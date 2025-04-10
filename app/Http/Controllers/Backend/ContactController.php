<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use SheetDB\SheetDB;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::query()->latest()->get();

        return view('backend.contact.contact', compact('contacts'));
    }

    public function sheetDb()
    {
        $sheetdb = new SheetDB('4ur0e3ofn95ep');
    }


    public function changeEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $envPath = base_path('.env');
        if (!File::exists($envPath)) {
            return response()->json(['message' => '.env file not found'], 500);
        }

        $envContent = file_get_contents($envPath);

        if (preg_match('/^ADMIN_EMAIL=.*$/m', $envContent)) {
            $envContent = preg_replace('/^ADMIN_EMAIL=.*$/m', 'ADMIN_EMAIL=' . $request->email, $envContent);
        } else {
            $envContent .= "\nADMIN_EMAIL=" . $request->email;
        }

        file_put_contents($envPath, $envContent);

        // Xóa cache để cấu hình mới được load lại
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');

        return handleResponse('Cập nhật email thành công!', 200);
    }
}
