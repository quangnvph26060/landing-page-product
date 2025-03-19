    <!--   Core JS Files   -->
    <script src="{{ asset('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('backend/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('backend/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('backend/assets/js/kaiadmin.min.js') }}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{ asset('backend/assets/js/setting-demo.js') }}"></script>

    @include('backend.includes.alert')

    <script>
        const BASE_URL = "{{ url('/') }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        const previewImage = function(event, imgId) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                const imgElement = document.getElementById(imgId);
                imgElement.src = reader.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        };

        const convertSlug = (sourceSelector, targetSelector) => {
            let text = $(sourceSelector).val();

            let slug = text
                .toLowerCase()
                .trim()
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "") // Loại bỏ dấu tiếng Việt
                .replace(/đ/g, "d")
                .replace(/Đ/g, "D") // Chuyển đ -> d
                .replace(/[^a-z0-9 -]/g, "") // Xóa ký tự đặc biệt
                .replace(/\s+/g, "-") // Thay khoảng trắng bằng dấu -
                .replace(/-+/g, "-"); // Xóa dấu - dư thừa

            $(targetSelector).val(slug);
        }

        function ckeditor(id, height = 200) {
            if (CKEDITOR.instances[id]) {
                CKEDITOR.instances[id].destroy(true);
            }

            CKEDITOR.replace(id, {
                filebrowserUploadMethod: 'form',
                height: height
            });
        }

        function submitForm(formId, successCallback) {

            $(formId).on('submit', function(e) {
                e.preventDefault();

                let type = $(this).attr('data-type');

                var submitBtn = $("#submitBtn");
                var spinner = submitBtn.find(".spinner-border");
                // submitBtn.prop("disabled", true);

                spinner.removeClass("d-none");

                // Kiểm tra xem CKEditor đã được khởi tạo trên textarea chưa
                $('textarea.ckeditor').each(function() {
                    const editorId = this.id;

                    // Nếu CKEditor chưa được khởi tạo, khởi tạo nó
                    if (!CKEDITOR.instances[editorId]) {
                        CKEDITOR.replace(editorId, {
                            filebrowserUploadMethod: 'form'
                        });
                    } else {
                        // Nếu CKEditor đã được khởi tạo, cập nhật giá trị của nó
                        CKEDITOR.instances[editorId].updateElement();
                    }
                });


                var formData = new FormData(this);

                if (type && type !== undefined && type.toUpperCase() === 'PUT') {
                    formData.append('_method', 'PUT');
                }

                $.ajax({
                    url: $(formId).attr('action'),
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log('Dữ liệu đã được gửi thành công', response);
                        if (typeof successCallback === 'function') {
                            successCallback(response);
                        }
                    },
                    error: function(xhr, status, error) {

                        Toast.fire({
                            icon: "error",
                            title: xhr.responseJSON.message
                        });

                        console.log('Lỗi khi gửi dữ liệu: ', error);
                    },
                    complete: function() {
                        // Khôi phục trạng thái nút sau khi API hoàn tất (thành công hoặc lỗi)
                        submitBtn.prop("disabled", false);
                        spinner.addClass("d-none");
                    }
                });
            });
        }

        function updateCharCount(inputSelector, maxLength) {
            // Tìm label có 'for' tương ứng với inputSelector
            const labelSelector = $('label[for="' + inputSelector.substring(1) + '"]');

            // Tạo thẻ charCountSelector và thêm vào sau label
            const charCountSelector = $('<span></span>').addClass('char-count').css({
                'margin-left': '10px',
                'font-size': '14px',
                'color': '#555'
            }).insertAfter(labelSelector);

            // Đặt maxlength ban đầu cho phần tử input/textarea
            $(inputSelector).attr('maxlength', maxLength);

            // Hàm cập nhật số ký tự
            $(inputSelector).on('input', function() {
                var currentLength = $(this).val().length;
                charCountSelector.text(currentLength + '/' + maxLength);

                // Kiểm tra khi đã đạt maxLength, ngừng nhập
                if (currentLength >= maxLength) {
                    $(this).attr('maxlength', maxLength); // Ngừng cho phép nhập thêm ký tự
                }
            });

            // Cập nhật số ký tự ban đầu khi trang tải
            var initialLength = $(inputSelector).val().length;
            charCountSelector.text(initialLength + '/' + maxLength);
        }


        const formatDataInput = function(input) {
            let $input = $(`#${input}`);

            // Hàm format số theo định dạng tiền tệ USD
            function formatNumber(value) {
                return Number(value).toLocaleString("en-US");
            }

            // Format ngay khi trang load nếu có giá trị
            let initialValue = $input.val().replace(/,/g, ""); // Thay dấu phẩy thành rỗng
            if (!isNaN(initialValue) && initialValue !== "") {
                $input.val(formatNumber(initialValue));
            }

            // Lắng nghe sự kiện nhập liệu
            $input.on('input', function() {
                let value = $(this).val().replace(/,/g, ""); // Xóa dấu phẩy cũ
                if (!isNaN(value)) {
                    $(this).val(formatNumber(value)); // Format lại số
                } else {
                    $(this).val($(this).val().slice(0, -1)); // Xóa ký tự không hợp lệ
                }
            });
        };
    </script>


    @stack('scripts')
