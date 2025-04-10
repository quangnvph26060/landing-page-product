<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\SectionConfig;
use App\Jobs\SendContactToGoogleSheet;
use App\Mail\NewContactNotification;
use App\Models\Config;
use App\Models\Contact;
use App\Services\SheetDBService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::prefix('auth')->middleware('guest')->controller(AuthController::class)->name('auth.')->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'authenticate');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', fn() => view('backend.dashboard'))->name('dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

        Route::get('section/{number}', [SectionConfig::class, 'switchView'])->name('section.config.view');
        Route::post('section/{number}', [SectionConfig::class, 'switchPost'])->name('section.config.post');

        Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('sheet-db', [ContactController::class, 'sheetDb'])->name('contact.sheet.db');
        Route::post('update-admin-email', [ContactController::class, 'changeEmail'])->name('contact.changeEmail');
    });
});

Route::get('/', function () {

    $numbers = ["One", "Two", "Three", "Four"];

    foreach ($numbers as $key => $num) {
        $modelClass = "App\\Models\\Section{$num}";

        if (class_exists($modelClass)) {
            ${"s" . ($key + 1)} = $modelClass::query()->firstOrCreate([]);
        }
    }


    $config = Config::query()->firstOrCreate();

    return view('frontend.master', compact('s1', 's2', 's3', 's4', 'config'));
});


Route::post('/submit-contact', function (Request $request, SheetDBService $sheet) {

    $cacheKey = 'contact_' . $request->phone . '_' . md5($request->name);

    if (Cache::has($cacheKey)) {
        return response()->json([
            'message' => 'Bạn chỉ có thể gửi lại sau 5 phút.'
        ], 429);
    }

    $credentials = $request->validate(
        [
            'fullname'        => 'required|string|max:255',
            'phone'       => 'required|regex:/^0[0-9]{9,10}$/',
            'address'     => 'required|string',
            'notes'     => 'nullable|string',
        ],
        __('request.messages'),
        [
            'fullname'        => 'Tên',
            'phone'       => 'Số điện thoại',
            'address'     => 'Địa chỉ',
            'notes'     => 'Lời nhắn',
        ]
    );

    $contact = Contact::create($credentials);

    SendContactToGoogleSheet::dispatch($contact);

    // Đặt cache chống spam
    Cache::put($cacheKey, true, now()->addMinutes(5));

    return response()->json([
        'message' => 'Đặt hàng thành công!',
    ], 201);
});
