@extends('backend.layouts.master')

@section('content')
    @include('backend.layouts.partials.breadcrumb', ['page' => 'Cấu Hình Section 3'])

    <form action="{{ route('admin.section.config.post', 3) }}" method="post" id="myForm">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group mb-3 col-lg-3">
                        <label for="review_count" class="form-label">Lượt bình luận</label>
                        <input type="text" name="review_count" value="{{ $three->review_count }}" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-lg-6">
                        <label for="shop_name" class="form-label">Tên shop</label>
                        <input type="text" name="shop_name" value="{{ $three->shop_name }}" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-lg-3">
                        <label for="shop_rating" class="form-label">Đánh giá shop</label>
                        <input type="text" name="shop_rating" value="{{ $three->shop_rating }}" class="form-control">
                    </div>

                    <div class="form-group mb-3 col-lg-3">
                        <label for="product_category" class="form-label">Mặt hàng</label>
                        <input type="text" name="product_category" value="{{ $three->product_category }}"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3 col-lg-3">
                        <label for="sold_count" class="form-label">Đã bán</label>
                        <input type="text" name="sold_count" value="{{ $three->sold_count }}" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-lg-3">
                        <label for="response_rate_24h" class="form-label">Tỉ lệ trả lời trong 24h</label>
                        <input type="text" name="response_rate_24h" value="{{ $three->response_rate_24h }}"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3 col-lg-3">
                        <label for="ship_within_48h " class="form-label">Xuất kho trong 48h</label>
                        <input type="text" name="ship_within_48h" value="{{ $three->ship_within_48h }}"
                            class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="fw-bold card-title">Bình luận</h5>
                <button type="button" class="btn btn-outline-primary btn-sm" id="add-comment">Thêm bình luận</button>
            </div>

            <div class="card-body" id="comments-container">
                @forelse ($three->comments ?? [] as $index => $comment)
                    <div class="comment-block position-relative" data-index="{{ $index }}">
                        <div class="row">
                            <div class="form-group col-2">
                                <img class="img-fluid img-thumbnail w-100 show_image" id="show_image_{{ $index }}"
                                    style="cursor: pointer" src="{{ showImage($comment['image']) }}"
                                    alt="Hình ảnh bình luận" onclick="$(this).siblings('input[type=file]').click();">
                                <input type="file" name="comments[{{ $index }}][image]"
                                    class="form-control d-none image_input" accept="image/*"
                                    onchange="previewImage(event, 'show_image_{{ $index }}')">
                            </div>

                            <div class="form-group col-10">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="comments[{{ $index }}][name]"
                                            class="form-control mb-2" value="{{ $comment['name'] ?? '' }}"
                                            placeholder="Tên người bình luận">
                                    </div>

                                    <div class="col-6">
                                        <input type="text" name="comments[{{ $index }}][item]"
                                            class="form-control mb-2" value="{{ $comment['item'] ?? '' }}"
                                            placeholder="Mặt hàng">
                                    </div>
                                </div>
                                <textarea name="comments[{{ $index }}][content]" class="form-control mb-3" cols="30" rows="5"
                                    placeholder="Nội dung bình luận">{{ $comment['content'] ?? '' }}</textarea>
                                <button type="button"
                                    class="btn btn-danger btn-sm remove-comment position-absolute top-0 end-0">Xóa</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">Chưa có bình luận nào.</p>
                @endforelse
            </div>

            <div class="card-footer d-flex justify-content-end">
                @include('backend.includes.button-submit')
            </div>
        </div>



    </form>

    <!-- 🌟 Comment mẫu (ẩn) -->
    <div id="comment-template" class="comment-block position-relative d-none">
        <div class="row">
            <div class="form-group col-2">
                <img class="img-fluid img-thumbnail w-100 show_image" style="cursor: pointer" src="{{ showImage('') }}"
                    alt="Hình ảnh bình luận" onclick="$(this).siblings('input[type=file]').click();">
                <input type="file" class="form-control d-none image_input" accept="image/*">
            </div>
            <div class="form-group col-10">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control mb-2" placeholder="Tên người bình luận">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control mb-2" placeholder="Mặt hàng">
                    </div>
                </div>
                <textarea class="form-control mb-3" cols="30" rows="5" placeholder="Nội dung bình luận"></textarea>
                <button type="button"
                    class="btn btn-danger btn-sm remove-comment position-absolute top-0 end-0">Xóa</button>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {

            submitForm('#myForm', function(response) {
                Toast.fire({
                    icon: "success",
                    title: response.message
                });
            })

            let commentIndex = $("#comments-container .comment-block").length;

            // Thêm bình luận mới
            $("#add-comment").click(function() {
                commentIndex++; // Tăng index

                // Clone từ mẫu thay vì clone từ .comment-block.first()
                let newComment = $("#comment-template").clone().removeClass("d-none").attr("data-index",
                    commentIndex);

                // Cập nhật các input với index mới
                newComment.find("textarea")
                    .attr("name", "comments[" + commentIndex + "][content]")
                    .val("");

                newComment.find("input[type='text']").each(function() {
                    let fieldName = $(this).attr("placeholder") === "Tên người bình luận" ? "name" :
                        "item";
                    $(this).attr("name", "comments[" + commentIndex + "][" + fieldName + "]").val(
                        "");
                });

                newComment.find("input[type='file']")
                    .attr("name", "comments[" + commentIndex + "][image]")
                    .attr("id", "image_input_" + commentIndex)
                    .val("");

                // Cập nhật ID của img để khớp với input file
                newComment.find(".show_image")
                    .attr("id", "show_image_" + commentIndex)
                    .attr("src", "{{ showImage('') }}");

                newComment.find(".show_image")
                    .attr("onclick", "$(this).siblings('input[type=file]').click();");

                newComment.find("input[type='file']")
                    .attr("onchange", "previewImage(event, 'show_image_" + commentIndex + "')");

                // Thêm vào container
                $("#comments-container").append(newComment);
            });

            // Xóa bình luận
            $(document).on("click", ".remove-comment", function() {
                $(this).closest(".comment-block").remove();
                updateIndexes();
            });

            // Cập nhật lại index sau khi xóa
            function updateIndexes() {
                commentIndex = 0;
                $(".comment-block").each(function() {
                    $(this).attr("data-index", commentIndex);

                    $(this).find("textarea").attr("name", "comments[" + commentIndex + "][content]");
                    $(this).find("input[type='text']").each(function() {
                        let fieldName = $(this).attr("placeholder") === "Tên người bình luận" ?
                            "name" : "item";
                        $(this).attr("name", "comments[" + commentIndex + "][" + fieldName + "]");
                    });

                    $(this).find("input[type='file']").attr("name", "comments[" + commentIndex +
                        "][image]");
                    commentIndex++;
                });
            }
        });
    </script>
@endpush

@push('styles')
    <style>
        .comment-block {
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Tạo bóng */
            transition: box-shadow 0.3s ease-in-out;
        }

        .comment-block:hover {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            /* Tạo hiệu ứng khi hover */
        }
    </style>
@endpush
