@extends('backend.layouts.master')

@section('content')
    @include('backend.layouts.partials.breadcrumb', ['page' => 'Cấu Hình Section 1'])

    <form action="{{ route('admin.section.config.post', 1) }}" method="post" id="myForm">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group mb-3 col-lg-4">
                        <label for="price" class="form-label">Giá</label>
                        <input type="text" name="price" value="{{ $one->price }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-4">
                        <label for="price_sale" class="form-label">Giá giảm</label>
                        <input type="text" name="price_sale" value="{{ $one->price_sale }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-4">
                        <label for="end_date" class="form-label">Thời gian kết thúc</label>
                        <input type="text" name="end_date" value="{{ $one->end_date }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-12">
                        <label for="product_name" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="product_name" value="{{ $one->product_name }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-3">
                        <label for="rating" class="form-label">Đánh giá</label>
                        <input type="text" name="rating" value="{{ $one->rating }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-3">
                        <label for="rating_count" class="form-label">Lượt đánh giá</label>
                        <input type="text" name="rating_count" value="{{ $one->rating_count }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-3">
                        <label for="sold_count" class="form-label">Lượt bán</label>
                        <input type="text" name="sold_count" value="{{ $one->sold_count }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-3">
                        <label for="top_product" class="form-label">Sản phẩm hàng đầu</label>
                        <input type="text" name="top_product" value="{{ $one->top_product }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-12">
                        <label for="title" class="form-label">Ảnh Slider</label>
                        <div class="input-images pb-3"></div>
                    </div>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-end">
                @include('backend.includes.button-submit')
            </div>
        </div>

    </form>
@endsection


@push('scripts')
    <script src="{{ asset('backend/assets/js/image-uploader.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            submitForm('#myForm', function(response) {
                Toast.fire({
                    icon: "success",
                    title: response.message
                });

            })

            const preloaded = @json($images);

            $('.input-images').imageUploader({
                preloaded: preloaded,
                imagesInputName: 'images',
                preloadedInputName: 'old',
                maxSize: 2 * 1024 * 1024,
                maxFiles: 15,
            });
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/image-uploader.min.css') }}">
@endpush
