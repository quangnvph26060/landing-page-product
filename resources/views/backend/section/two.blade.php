@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', ['page' => 'Cấu Hình Section 2'])

    <form action="{{ route('admin.section.config.post', 2) }}" method="post" id="myForm">
        <div class="card">
            <div class="card-header">
                <h5 class="fw-bold card-title">Thông tin hỗ trợ</h5>
            </div>
            <div class="card-body">
                <div class="container-support">

                    @php $index = 0; @endphp
                    @forelse ($two->supports ?? [] as $item)
                        <div class="row support-item {{ !$loop->first ? 'mt-2' : '' }}"
                            data-index="{{ $item['id'] ?? 'new_' . $index }}">
                            <div class="col-lg-3">
                                <input type="text" value="{{ $item['icon'] }}" class="form-control icon-picker"
                                    name="supports[{{ $item['id'] ?? 'new_' . $index }}][icon]" placeholder="Chọn icon" />
                            </div>
                            <div class="col-lg-8">
                                <input type="text" value="{{ $item['content'] }}" class="form-control"
                                    name="supports[{{ $item['id'] ?? 'new_' . $index }}][content]" placeholder="Nội dung" />
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
                        @php $index++; @endphp
                    @empty
                        <div class="row support-item" data-index="new_0">
                            <div class="col-lg-3">
                                <input type="text" class="form-control icon-picker" name="supports[new_0][icon]"
                                    placeholder="Chọn icon" />
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="supports[new_0][content]"
                                    placeholder="Nội dung" />
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

        <div class="card">
            <div class="card-header">
                <h5 class="card-title fw-bold">Phương thức thanh toán</h5>
            </div>
            <div class="card-body">
                <div class="container-payment-methods">

                    @forelse  ($two->payment_methods ?? [] as $key => $value)
                        <div class="row mt-2" data-index="{{ $key }}">
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Viết tắt"
                                    name="payment_methods[{{ $key }}][abbr]" value="{{ $value['abbr'] }}">
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Nội dung"
                                    name="payment_methods[{{ $key }}][content]" value="{{ $value['content'] }}">
                            </div>
                            <div class="col-1 p-0">
                                @if ($loop->first)
                                    <button type="button" class="btn btn-primary add-btn-payment"><i
                                            class="fas fa-plus-square"></i></button>
                                @else
                                    <button type="button" class="btn btn-danger remove-btn-payment"><i
                                            class="fas fa-minus-square"></i></button>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="row">
                            <div class=" col-3">
                                <input type="text" class="form-control" placeholder="Viết tắt"
                                    name="payment_methods[0][abbr]">
                            </div>
                            <div class=" col-8">
                                <input type="text" class="form-control" placeholder="Nội dung"
                                    name="payment_methods[0][content]">
                            </div>
                            <div class="col-1 p-0">
                                <button type="button" class="btn btn-primary add-btn-payment"><i
                                        class="fas fa-plus-square"></i></button>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="transport" class="form-label">Vận chuyển</label>
                        <input type="text" name="transport" id="transport" class="form-control" value="{{ $two->transport }}">
                    </div>

                    <div class="form-group col-6">
                        <label for="freeship_discount" class="form-label">Giá freeship</label>
                        <input type="text" name="freeship_discount" id="freeship_discount" class="form-control" value="{{ $two->freeship_discount }}">
                    </div>

                    <div class="form-group col-6">
                        <label for="return_policy" class="form-label">Chính sách đổi trả</label>
                        <input type="text" name="return_policy" id="return_policy" class="form-control" value="{{ $two->return_policy }}">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $(".icon-picker").iconpicker();

            submitForm('#myForm', function(response) {
                Toast.fire({
                    icon: "success",
                    title: response.message
                });

            })

            let containerSupport = $(".container-support");
            let indexSupport = 0;

            // Thêm dòng mới
            $(document).on("click", ".add-btn", function() {
                indexSupport++;
                let newRow = `
            <div class="row support-item mt-2" data-index="new_${indexSupport}">
                <div class="col-lg-3">
                    <input type="text" class="form-control icon-picker" name="supports[new_${indexSupport}][icon]" placeholder="Chọn icon" />
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="supports[new_${indexSupport}][content]" placeholder="Nội dung" />
                </div>
                <div class="col-lg-1 p-0">
                    <button type="button" class="btn btn-danger remove-btn"><i class="fas fa-minus-square"></i></button>
                </div>
            </div>
        `;
                containerSupport.append(newRow);

                // Khởi tạo icon picker cho dòng mới
                containerSupport.find(".icon-picker").iconpicker();
            });

            // Xóa dòng
            $(document).on("click", ".remove-btn", function() {
                $(this).closest(".support-item").remove();
            });


            let containerPaymentMethod = $('.container-payment-methods');
            let indexPaymentMethod = 0;

            // Thêm dòng mới
            $(document).on("click", ".add-btn-payment", function() {
                indexPaymentMethod++;
                let newRow = `
            <div class="row mt-2" data-index="new_${indexPaymentMethod}">
                <div class="col-3">
                    <input type="text" class="form-control" placeholder="Viết tắt" name="payment_methods[${indexPaymentMethod}][abbr]">
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Nội dung" name="payment_methods[${indexPaymentMethod}][content]">
                </div>
                <div class="col-1 p-0">
                    <button type="button" class="btn btn-danger remove-btn-payment"><i class="fas fa-minus-square"></i></button>
                </div>
            </div>
        `;
                containerPaymentMethod.append(newRow);
            });

            // Xóa dòng
            $(document).on("click", ".remove-btn-payment", function() {
                $(this).closest(".row").remove();
            });

        });
    </script>
@endpush

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"
        rel="stylesheet" />

    <style>
        .iconpicker-popover.popover {
            z-index: 1000;
            width: 333px !important;
        }

        .fade:not(.show) {
            opacity: 1 !important;
        }
    </style>
@endpush
