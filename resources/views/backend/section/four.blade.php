@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', ['page' => 'Cấu Hình Section 4'])

    <form action="{{ route('admin.section.config.post', 4) }}" method="post" id="myForm">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-lg-6">
                        <label for="product_name" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="product_name" value="{{ $four->product_name }}" class="form-control">
                    </div>

                    <div class="form-group col-lg-2">
                        <label for="price" class="form-label">Giá sản phẩm</label>
                        <input type="text" name="price" value="{{ $four->price }}" class="form-control">
                    </div>

                    <div class="form-group col-lg-2">
                        <label for="discount" class="form-label">Giá giảm</label>
                        <input type="text" name="discount" value="{{ $four->discount }}" class="form-control">
                    </div>

                    <div class="form-group col-lg-2">
                        <label for="end_date" class="form-label">Thời gian kết thúc</label>
                        <input type="date" name="end_date" value="{{ $four->end_date->format('Y-m-d') }}"
                            class="form-control">
                    </div>

                    <div class="form-group col-lg-12">
                        <label for="short_description" class="form-label">Mô tả ngắn</label>
                        <input type="text" name="short_description" value="{{ $four->short_description }}"
                            class="form-control">
                    </div>

                    <div class="form-group col-lg-12">
                        <label for="short_description" class="form-label">Mô tả chi tiết</label>
                        <textarea id="description" class="form-control ckeditor" name="description" rows="10">{!! $four->description  !!}</textarea>
                    </div>

                    <div class="form-group mb-3 col-lg-12">
                        <label for="description" class="form-label">Option giá</label>

                        <div class="container-options">
                            @forelse ($four->options ?? [] as $key => $option)
                                <div class="row input-group {{ !$loop->first ? 'mt-2' : '' }}">
                                    <div class="col-lg-11">
                                        <input value="{{ $option['content'] }}" type="text"
                                            name="options[{{ $key }}][content]" class="form-control"
                                            placeholder="Nội dung">
                                    </div>
                                    <div class="col-lg-1 p-0">
                                        @if ($loop->first)
                                            <button type="button" class="btn btn-primary add-btn"><i
                                                    class="fas fa-plus-square"></i></button>
                                        @else
                                            <button type="button" class="btn btn-danger remove-btn"><i
                                                    class="fas fa-minus-square"></i></button>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="row input-group">
                                    <div class="col-lg-11">
                                        <input value="" type="text" name="options[0][content]" class="form-control"
                                            placeholder="Nội dung">
                                    </div>
                                    <div class="col-lg-1 p-0">
                                        <button type="button" class="btn btn-primary add-btn"><i
                                                class="fas fa-plus-square"></i></button>
                                    </div>
                                </div>
                            @endforelse
                        </div>
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
    <script src="{{ asset('library/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function() {
            submitForm('#myForm', function(response) {
                Toast.fire({
                    icon: "success",
                    title: response.message
                });
            })

            ckeditor('description');

            $(".container-options").on("click", ".add-btn", function() {
                let index = $(".container-options .input-group").length; // Đếm số nhóm input hiện có
                let newInput = `
                    <div class="row input-group mt-2">
                        <div class="col-lg-11">
                            <input value="" type="text" name="options[${index}][content]" class="form-control" placeholder="Nội dung">
                        </div>
                        <div class="col-lg-1 p-0">
                            <button type="button" class="btn btn-danger remove-btn"><i class="fas fa-minus-square"></i></button>
                        </div>
                    </div>
                `;
                $(".container-options").append(newInput);
            });

            // Xóa input khi bấm nút "-"
            $(".container-options").on("click", ".remove-btn", function() {
                if ($(".input-group").length > 1) {
                    $(this).closest(".input-group").remove();
                    updateIndexes(); // Cập nhật lại index sau khi xóa
                }
            });

            // Cập nhật lại index sau khi xóa một phần tử
            function updateIndexes() {
                $(".container-options .input-group").each(function(index) {
                    $(this).find("input[name^='options']").each(function() {
                        let name = $(this).attr("name");
                        let newName = name.replace(/\[\d+\]/, `[${index}]`);
                        $(this).attr("name", newName);
                    });
                });
            }
        });
    </script>
@endpush
