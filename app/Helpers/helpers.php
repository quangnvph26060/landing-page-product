<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

if (!class_exists('sessionFlash')) {
    function sessionFlash($key, $message)
    {
        session()->flash($key, $message);
    }
}

if (!class_exists('showImage')) {
    function showImage($path, $default = 'image-default.jpg')
    {
        /** @var FilesystemAdapter $storage */
        $storage = Storage::disk('public');

        if ($path && Storage::exists($path)) {
            return $storage->url($path);
        }

        return asset('backend/assets/img/' . $default);
    }
}

if (!function_exists('transaction')) {
    function transaction($callback)
    {
        DB::beginTransaction();
        try {
            $result = $callback();
            DB::commit();
            return $result;
        } catch (\Exception $e) {
            Log::error('Exception Details:', [
                'error' => $e->getMessage(),  // Tên lỗi
                'file' => $e->getFile(),      // File xảy ra lỗi
                'line' => $e->getLine(),      // Dòng xảy ra lỗi
                'function' => getErrorFunction($e), // Function xảy ra lỗi
                'trace' => $e->getTraceAsString(), // Stack trace (tùy chọn)
            ]);
            DB::rollBack();

            if (session()->has('executeError') && session('executeError')) {
                $imagePath = session('executeError');
                deleteImage($imagePath);
            }

            return errorResponse('Có lỗi xảy ra, vui lòng thử lại sau!');
        }
    }
}

if (!function_exists('deleteImage')) {
    function deleteImage($path)
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}

if (!function_exists('logInfo')) {
    function logInfo($data)
    {
        Log::info($data);
    }
}

if (!function_exists('getErrorFunction')) {
    function getErrorFunction(Throwable $exception): ?string
    {
        // Kiểm tra nếu có trace và function gọi lỗi
        $trace = $exception->getTrace();
        return isset($trace[0]['function']) ? $trace[0]['function'] : null;
    }
}



if (!function_exists('successResponse')) {
    function successResponse($message, $data = null, $code = 200)
    {
        sessionFlash('success', $message);
        return response()->json(['success' => true, 'message' => $message, 'data' => $data], $code);
    }
}

if (!function_exists('handleResponse')) {
    function handleResponse($message, $code = 200, $isLoading = false)
    {
        if ($isLoading)  sessionFlash('success', $message);
        return response()->json(['success' => true, 'message' => $message], $code);
    }
}

if (!function_exists('errorResponse')) {
    function errorResponse(string $message, $code = 500)
    {
        $response = [
            'success' => false,
            'message' => $message
        ];

        sessionFlash('error', $message);

        return response()->json($response, $code);
    }
}

if (!function_exists('generateSlug')) {
    function generateSlug(string $text)
    {
        return Str::slug($text);
    }
}

if (!function_exists('saveImages')) {
    function saveImages($request, string $inputName, string $directory = 'images', $width = 150, $height = 150, $isArray = false, $resize = false)
    {
        $paths = [];

        if ($request->hasFile($inputName)) {
            $images = $request->file($inputName);
            if (!is_array($images)) {
                $images = [$images];
            }

            $manager = new ImageManager(['driver' => 'gd']);

            foreach ($images as $key => $image) {
                $img = $manager->make($image->getRealPath());

                // Resize nếu $resize = true
                if ($resize) {
                    $img->resize($width, $height);
                }

                $filename = time() . uniqid() . '.' . 'webp';

                Storage::disk('public')->put($directory . '/' . $filename, $img->encode());

                $paths[$key] = $directory . '/' . $filename;
            }

            return $isArray ? $paths : $paths[0] ?? null;
        }

        return null;
    }
}

if (!function_exists('uploadImages')) {
    function uploadImages($image, string $directory = 'images', $width = 150, $height = 150, $isArray = false, $resize = false)
    {
        $paths = [];

        if ($image instanceof \Illuminate\Http\UploadedFile) {
            // Sử dụng ImageManager để xử lý ảnh
            $manager = new ImageManager(['driver' => 'gd']);
            $img = $manager->make($image->getRealPath());

            // Resize nếu $resize = true
            if ($resize) {
                $img->resize($width, $height);
            }

            // Tạo tên file duy nhất
            $filename = time() . uniqid() . '.' . 'webp';

            // Lưu ảnh vào thư mục public
            Storage::disk('public')->put($directory . '/' . $filename, $img->encode());

            // Thêm đường dẫn vào mảng
            $paths[] = $directory . '/' . $filename;
        }

        return $isArray ? $paths : $paths[0] ?? null;
    }
}



if (!function_exists('isActiveMenu')) {
    function isActiveMenu($menuItem)
    {
        $currentRoute = request()->route()->getName(); // Lấy route hiện tại

        // Kiểm tra nếu menuItem có key 'inRoutes' và route hiện tại có trong danh sách
        if (isset($menuItem['inRoutes']) && in_array($currentRoute, $menuItem['inRoutes'])) {
            return 'show';
        }

        return '';
    }
}

if (!function_exists('calculateDiscountPercentage')) {
    function calculateDiscountPercentage($originalPrice, $discountedPrice)
    {
        // Loại bỏ tất cả ký tự không phải số
        $originalPrice = (int) preg_replace('/\D/', '', $originalPrice);
        $discountedPrice = (int) preg_replace('/\D/', '', $discountedPrice);

        // Kiểm tra tránh chia cho 0
        if ($originalPrice == 0) {
            return 0;
        }

        // Tính % giảm giá
        $discountPercent = (1 - ($discountedPrice / $originalPrice)) * 100;

        // Làm tròn theo quy tắc thương mại
        return round($discountPercent);
    }
}
