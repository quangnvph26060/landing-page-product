<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\SectionConfig;
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

Route::get('/', function () {
    return view('frontend.master');
});

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
        Route::post('update-admin-email', [ContactController::class, 'changeEmail'])->name('contact.changeEmail');
    });
});
