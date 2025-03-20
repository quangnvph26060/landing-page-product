<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\SectionFive;
use App\Models\SectionFour;
use App\Models\SectionOne;
use App\Models\SectionSeven;
use App\Models\SectionSix;
use App\Models\SectionThree;
use App\Models\SectionTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionConfig extends Controller
{
    public function switchView($number)
    {
        return match ((int)$number) {
            1 => $this->sectionOneConfigView(),
            2 => $this->sectionTwoConfigView(),
            3 => $this->sectionThreeConfigView(),
            4 => $this->sectionFourConfigView(),
            5 => $this->sectionFiveConfigView(),
            default => 0,
        };
    }
    public function switchPost(Request $request, $number)
    {
        return match ((int)$number) {
            1 => $this->sectionOneConfigPost($request),
            2 => $this->sectionTwoConfigPost($request),
            3 => $this->sectionThreeConfigPost($request),
            4 => $this->sectionFourConfigPost($request),
            5 => $this->sectionFiveConfigPost($request),
            default => abort(404),
        };
    }

    private function sectionOneConfigView()
    {
        $one = SectionOne::query()->firstOrCreate();

        $images = collect($one->sliders)->map(function ($item, $index) {
            return [
                'src' => showImage($item),
                'id' => $index,
            ];
        });

        return view('backend.section.one', compact('one', 'images'));
    }

    private function sectionOneConfigPost(Request $request)
    {
        $one = SectionOne::query()->first();

        $existingImages = $one->sliders ?? [];
        $oldImages = $request->old ?? [];
        $newImages = [];

        foreach ($existingImages as $index => $image) {
            if (in_array($index, $oldImages)) {
                $newImages[] = $image;
            } else {
                deleteImage($image);
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $newImages[] = uploadImages($image);
            }
        }

        $request->merge([
            'sliders' => $newImages,
        ]);

        $one->update($request->all());

        return handleResponse('Lưu thay đổi thành công.', 201);
    }

    public function sectionTwoConfigView()
    {
        $two = SectionTwo::query()->firstOrCreate();

        return view('backend.section.two', compact('two'));
    }

    public function sectionTwoConfigPost(Request $request)
    {
        $request->validate([
            'supports' => ['required', 'array'],
            'supports.*.icon' => ['required', 'string'],
            'supports.*.content' => ['required', 'string'],
            'payment_methods' => ['required', 'array'],
            'payment_methods.*.abbr' => ['required', 'string'],
            'payment_methods.*.content' => ['required', 'string'],
            'transport' => ['required', 'string'],
            'freeship_discount' => ['required', 'string'],
            'return_policy' => ['required', 'string'],
        ], [
            'supports.required' => 'Vui lòng thêm ít nhất một mục hỗ trợ.',
            'supports.*.icon.required' => 'Icon không được để trống.',
            'supports.*.title.required' => 'Tiêu đề không được để trống.',
            'supports.*.title.min' => 'Tiêu đề phải có ít nhất 3 ký tự.',
            'supports.*.content.required' => 'Nội dung không được để trống.',
            'supports.*.content.min' => 'Nội dung phải có ít nhất 5 ký tự.',
            'payment_methods.required' => 'Vui lòng chọn ít nhất một phương thức thanh toán.',
            'transport.required' => 'Vui lòng nhập phương thức vận chuyển.',
            'freeship_discount.required' => 'Vui lòng nhập thông tin khuyến mãi freeship.',
            'return_policy.required' => 'Vui lòng nhập thông tin chính sách đổi trả.',
        ]);

        $two = SectionTwo::query()->first();

        $two->update($request->all());

        return handleResponse('Lưu thay đổi thành công.', 201);
    }

    public function sectionThreeConfigView()
    {
        $three = SectionThree::query()->firstOrCreate();

        return view('backend.section.three', compact('three'));
    }

    public function sectionThreeConfigPost(Request $request)
    {
        $request->validate([
            'comments' => ['nullable', 'array'],
        ]);

        $three = SectionThree::query()->first();

        $oldComments = $three->comments ?? [];

        $data = $request->except(['comments']);

        $updatedComments = [];

        if ($request->has('comments')) {
            foreach ($request->comments as $index => $comment) {
                $commentData = [
                    'name' => $comment['name'] ?? null,
                    'item' => $comment['item'] ?? null,
                    'content' => $comment['content'] ?? null,
                ];

                $oldImage = $oldComments[$index]['image'] ?? null;

                // Nếu có ảnh mới
                if (!empty($comment['image']) && $comment['image'] instanceof \Illuminate\Http\UploadedFile) {
                    // Xóa ảnh cũ nếu có
                    if (!empty($comment['old_image'])) {
                        Storage::disk('public')->delete($comment['old_image']);
                    }

                    // Lưu ảnh mới
                    $filePath = $comment['image']->store('uploads/comments', 'public');
                    $commentData['image'] = $filePath;
                } else {
                    // Nếu không có ảnh mới, giữ ảnh cũ
                    $commentData['image'] = $oldImage;
                }

                $updatedComments[] = $commentData;
            }
        }

        $data['comments'] = $updatedComments;

        $three->update($data);

        return handleResponse('Lưu thay đổi thành công.', 201);
    }

    public function sectionFourConfigView()
    {
        $four = SectionFour::query()->firstOrCreate();

        return view('backend.section.four', compact('four'));
    }

    public function sectionFourConfigPost(Request $request)
    {
        $four = SectionFour::query()->first();

        $options = array_filter(array_map(function ($option) {
            return array_filter($option, function ($value) {
                return !is_null($value);
            });
        }, $request->options));

        $request->merge([
            'options' => $options
        ]);

        $four->update($request->all());

        return handleResponse('Lưu thay đổi thành công.', 201);
    }

    public function sectionFiveConfigView()
    {
        $config = Config::query()->firstOrCreate();

        return view('backend.section.five', compact('config'));
    }

    public function sectionFiveConfigPost(Request $request)
    {
        $config = Config::query()->first();

        $data = $request->except('icon');

        if ($request->hasFile('icon')) {
            $data['icon'] = uploadImages($request->file('icon'));
            deleteImage($config->icon);
        }

        $config->update($data);

        return handleResponse('Lưu thay đổi thành công.', 201);
    }
}
