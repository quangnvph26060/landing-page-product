<div class="swiper-container position-relative">
    <div class="swiper-wrapper">

        @foreach ($s1->sliders ?? [] as $sKey => $s)
            <div class="swiper-slide">
                <img src="{{ showImage($s) }}" data-large="{{ showImage($s) }}" alt="slider {{ $sKey }}" />
            </div>
        @endforeach
    </div>

    <!-- Nút điều hướng -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <div class="d-flex position-absolute justify-content-center align-items-center gap-1 p-2 z-1"
        style="
                width: 35%;
                background: rgb(11, 171, 173);
                background: linear-gradient(
                    90deg,
                    rgba(11, 171, 173, 1) 0%,
                    rgba(33, 213, 214, 1) 51%
                );
                /* clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%); */
                bottom: 0px;
            ">
        <p class="mb-0  text-light fw-bold" style="font-style: italic">
            EXTRA
        </p>
        <p class="mb-0 text-light" style="line-height: 1">Shipping Voucher</p>
    </div>

    <div class="d-flex position-absolute justify-content-center align-items-center gap-1 py-2 ps-3 z-1"
        style="
                width: 32%;
                background: linear-gradient(
                    90deg,
                    rgba(95, 176, 52, 1) 0%,
                    rgba(155, 215, 91, 1) 51%
                );
                clip-path: polygon(
                    0 0,
                    100% 0,
                    100% 100%,
                    80% 100%,
                    0 100%,
                    10% 50%
                );
                bottom: 0px;
                left: 135px;
            ">
        <p class="mb-0  text-light fw-bold" style="font-style: italic">
            BONUS
        </p>
        <p class="mb-0 text-light" style="line-height: 1">Hoàn tiền</p>
    </div>
</div>

<div class="row" style="--bs-gutter-x: 0rem">
    <div class="col-6 bg-danger ps-3 py-2" style="line-height: 1">
        <div class="text-light fw-bold" style="font-size: 1.5rem">{{ $s1->price }}</div>
        <div class="" style="color: #d3d3d3">
            <del style="font-size: .8rem">{{ $s1->price_sale }}</del>
            <small style="font-size: .8rem">-{{ calculateDiscountPercentage($s1->price_sale, $s1->price) }}%</small>
        </div>
    </div>
    <div class="col-6 bg-warning px-3 py-2" style="line-height: 1.1">
        <div class="mb-0  fw-bold" style="font-size: 1.5rem">Ưu đãi giờ vàng</div>
        <span class="" style="font-size: .8rem">{{ $s1->end_date }}</span>
    </div>
</div>

<h3 class="fw-bold  mt-3 px-2">
    <span class="badge rounded-pill bg-danger">Sale sốc!!!</span>
    {{ $s1->product_name }}
</h3>

<div class="row px-2">
    <div class="col-4 d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
            y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
            preserveAspectRatio="none" width="22px" height="22px" class=""
            fill='url("#SHAPE6_mobile_gradient")'>
            <defs id="SHAPE6_defs">
                <linearGradient id="SHAPE6_mobile_gradient" gradientTransform="rotate(0)">
                    <stop offset="0%" stop-color="#FACE15"></stop>
                    <stop offset="100%" stop-color="rgba(255, 221, 32, 1.0)"></stop>
                </linearGradient>
            </defs>
            <g>
                <polygon
                    points="50,4.826 64.682,34.567 97.5,39.336 73.752,62.485 79.36,95.174 50,79.741 20.646,95.174 26.252,62.485    2.5,39.336 35.323,34.567  ">
                </polygon>
            </g>
        </svg>
        <p class="mb-0  fw-bold me-2 ms-1">{{ $s1->rating }}/5</p>
        <span class=" text-primary"> ({{ $s1->rating_count }}) </span>
    </div>

    <div class="col-8 d-flex align-items-center gap-2 px-0 ">
        <p class="mb-0 text-muted">
            Đã bán <span class=" fw-bold">{{ $s1->sold_count }}</span>
        </p>
        <p class="mb-0  fw-bold" style="color: rgb(28, 191, 192)">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24" xml:space="preserve"
                preserveAspectRatio="none" width="18px" height="18px" class="" fill="#1CBFC0">
                <path
                    d="M5.1842651,16H5c-0.5522461,0-1,0.4472656-1,1s0.4477539,1,1,1h0.1843262C5.5984497,19.161499,6.6980591,20,8,20  s2.4016113-0.838501,2.8157349-2h2.3685913C13.5984497,19.161499,14.6980591,20,16,20  c1.3076782,0,2.4108276-0.8461304,2.8206177-2.015625c1.1932373-0.079895,2.1885376-0.9144897,2.451355-2.0976563  l1.2446289-5.6025391c0.1787109-0.8027344-0.0141602-1.6318359-0.5292969-2.2734375C21.472168,7.3681641,20.7050781,7,19.8818359,7  H18.574707c-0.1003418-0.3739624-0.2807007-0.7266235-0.5361328-1.0322266C17.5244141,5.3525391,16.7695313,5,15.9677734,5H6  C5.4477539,5,5,5.4472656,5,6s0.4477539,1,1,1h9.9677734c0.2841797,0,0.4580078,0.1572266,0.5366211,0.2509766  c0.078125,0.09375,0.2016602,0.2919922,0.1518555,0.5703125l-1.1339722,6.2269897  C14.4328613,14.2244263,13.5463257,14.984436,13.1842651,16h-2.3685303C10.4016113,14.838501,9.3019409,14,8,14  S5.5983887,14.838501,5.1842651,16z M20.4272461,9.2617188c0.0786133,0.0976563,0.2001953,0.3037109,0.137207,0.5888672  l-1.2446289,5.6025391c-0.0582275,0.2613525-0.2563477,0.4512939-0.5042725,0.5164795  c-0.2426147-0.6555176-0.7125854-1.2089233-1.3255615-1.5636597L18.4745483,9h1.4072876  C20.1738281,9,20.3486328,9.1640625,20.4272461,9.2617188z M16,16c0.0634766,0,0.1274414,0.0048828,0.1704102,0.0117188  C16.6508789,16.1054688,17,16.5205078,17,17c0,0.5517578-0.4487305,1-1,1s-1-0.4482422-1-1S15.4487305,16,16,16z M8,16  c0.5512695,0,1,0.4482422,1,1s-0.4487305,1-1,1s-1-0.4482422-1-1S7.4487305,16,8,16z">
                </path>
                <path
                    d="M4,11h4c0.5522461,0,1-0.4472656,1-1S8.5522461,9,8,9H4c-0.5522461,0-1,0.4472656-1,1S3.4477539,11,4,11z">
                </path>
                <path
                    d="M2,14h3c0.5522461,0,1-0.4472656,1-1s-0.4477539-1-1-1H2c-0.5522461,0-1,0.4472656-1,1S1.4477539,14,2,14z">
                </path>
                <circle cx="3" cy="6" r="1"></circle>
                <circle cx="2" cy="17" r="1"></circle>
            </svg>
            Miễn phí vẫn chuyển
        </p>
    </div>
</div>

<div style="background-color: #f9f5f2" class="mt-2 d-flex justify-content-between align-items-center px-1">
    <div class="d-flex align-items-center gap-2 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
            y="0px" viewBox="0 0 66 66" style="enable-background: new 0 0 66 66" xml:space="preserve"
            preserveAspectRatio="none" width="22px" height="22px" class="" fill="rgba(156, 113, 49, 1)">
            <g>
                <path
                    d="M43.4,50.4h-3.1h0c-1.2,0-2.7-2-3.4-6.3c1.3-0.2,2.3-1.4,2.3-2.7v-1.2c-1.7,0.6-3.5,0.9-5.3,1c-0.3,0-0.6,0-0.9,0   c-2.1,0-4.2-0.3-6.1-1v1.2c0,1.4,1,2.5,2.3,2.7c-0.7,4.3-2.2,6.3-3.4,6.3h-3.1c-2.8,0-5,2.3-5,5v8.7c0,0.6,0.4,1,1,1h28.8   c0.5,0,1-0.4,1-1v-8.7C48.4,52.7,46.1,50.4,43.4,50.4z">
                </path>
                <path
                    d="M58.5,8.9h-8.3V6.9c0.8,0,1.6-0.3,2.1-0.9c0.5-0.5,0.9-1.3,0.9-2.1c0-1.7-1.3-3-3-3H15.8c-1.7,0-3,1.3-3,3c0,1.6,1.3,3,3,3   h0v2.1H7.5c-0.5,0-1,0.5-1,1c0.3,12.4,5.8,21.6,14.3,24.2c3.1,3.1,7.4,5.1,12.2,5.1c0.3,0,0.5,0,0.8,0c4.4-0.2,8.3-2.1,11.2-5   c8.7-2.5,14.2-11.8,14.5-24.3C59.5,9.4,59,8.9,58.5,8.9z M8.5,10.9h7.3v11.2c0,3.2,0.9,6.2,2.4,8.8C12.6,27.5,9,20.3,8.5,10.9z    M47.5,31c4-6.5,2.2-11.9,2.6-20.1h7.3C57,20.4,53.3,27.7,47.5,31z">
                </path>
            </g>
        </svg>

        <p class="mb-0 fw-bold " style="color: #9c7131">
            Sản phẩm hàng đầu
        </p>

        <span class="" style="color: rgb(150, 117, 67)">{{ $s1->top_product }}</span>
    </div>
    <svg width="22" height="22" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
        <polyline points="15,10 35,25 15,40" stroke="rgb(156, 113, 49)" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</div>

<div style="background-color: #f9f9f9" class="d-flex justify-content-evenly mt-2 py-2 " id="support">

    @foreach ($s2->supports ?? [] as $s)
        <div>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                y="0px" viewBox="0 0 60 60" style="enable-background: new 0 0 60 60" xml:space="preserve"
                preserveAspectRatio="none" width="18px" height="18px" class="" fill="#FFCE71">
                <g>
                    <path
                        d="M47.52,32.74c-4.12,0-7.48,3.35-7.48,7.47c0,4.13,3.36,7.48,7.48,7.48S55,44.35,55,40.22C55,36.1,51.64,32.74,47.52,32.74z    M50.36,39.45L47.4,42.4c-0.2,0.2-0.45,0.29-0.71,0.29s-0.51-0.1-0.71-0.29l-1.3-1.3c-0.39-0.39-0.39-1.02,0-1.41s1.02-0.39,1.41,0   l0.6,0.6l2.25-2.25c0.39-0.39,1.02-0.39,1.41,0S50.75,39.06,50.36,39.45z">
                    </path>
                    <path d="M49.1,15.72v0.81H5v-0.81c0-1.88,1.52-3.41,3.4-3.41h37.3C47.57,12.3,49.1,13.84,49.1,15.72z">
                    </path>
                    <path
                        d="M5,25.33v13.34c0,1.88,1.52,3.41,3.4,3.41h29.83c-0.12-0.6-0.19-1.22-0.19-1.86c0-5.22,4.25-9.47,9.48-9.47   c0.54,0,1.06,0.06,1.58,0.14v-5.56H5z M17.68,34.33h-7.3c-0.55,0-1-0.45-1-1s0.45-1,1-1h7.3c0.55,0,1,0.45,1,1   S18.23,34.33,17.68,34.33z M22.9,34.33h-1.77c-0.55,0-1-0.45-1-1s0.45-1,1-1h1.77c0.55,0,1,0.45,1,1S23.45,34.33,22.9,34.33z    M28.26,34.33h-1.77c-0.55,0-1-0.45-1-1s0.45-1,1-1h1.77c0.55,0,1,0.45,1,1S28.81,34.33,28.26,34.33z">
                    </path>
                    <rect x="5" y="18.53" width="44.1" height="4.8"></rect>
                </g>
            </svg> --}}
            <i class="{{ $s['icon'] }}"></i>
            <span style="font-size: 0.8rem">Thanh toán bảo mật</span>
        </div>
    @endforeach

</div>

<!-- PhotoSwipe Popup -->
<div id="photoswipe" class="pswp"></div>
