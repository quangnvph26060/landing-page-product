<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- PhotoSwipe CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.8/photoswipe.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
</head>

<body>
    <div class="container">
        <header class="bg-light">
            <div class="header-top container px-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-search me-2"></i>
                            <small class="text-muted fs-6">máy xay</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center justify-content-end gap-3 position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.2" baseProfile="tiny" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve"
                                preserveAspectRatio="none" width="22px" height="22px" class="" fill="#0A0A0A">
                                <path
                                    d="M6.523,87.301c0.924,0.392,1.992,0.193,2.714-0.503C21.533,74.924,37.702,68.14,55,67.543V85   c0,1.011,0.609,1.923,1.543,2.31c0.309,0.128,0.634,0.19,0.956,0.19c0.65,0,1.29-0.254,1.768-0.732l35-35   c0.977-0.976,0.977-2.559,0-3.535l-35-35c-0.714-0.716-1.791-0.93-2.724-0.542C55.609,13.077,55,13.989,55,15v17.559   C27.207,33.867,5,56.889,5,85C5,86.003,5.6,86.909,6.523,87.301z M57.5,37.5c1.381,0,2.5-1.119,2.5-2.5V21.036L88.964,50L60,78.964   V65c0-1.381-1.119-2.5-2.5-2.5c-17.444,0-33.959,5.86-47.138,16.616C13.269,55.69,33.3,37.5,57.5,37.5z">
                                </path>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" preserveAspectRatio="none"
                                viewBox="0 0 24 24" class="" fill="#0A0A0A">
                                <path
                                    d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z">
                                </path>
                            </svg>
                            <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger px-2"
                                style="font-size: 8px; right: 20px">3</span>

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                xml:space="preserve" preserveAspectRatio="none" width="22px" height="22px" class=""
                                fill="#0A0A0A">
                                <path
                                    d="M20.163,41.671c-4.6,0-8.329,3.729-8.329,8.329c0,4.599,3.729,8.328,8.329,8.328s8.329-3.729,8.329-8.328  C28.491,45.4,24.762,41.671,20.163,41.671z M50,41.671c-4.6,0-8.328,3.729-8.328,8.329c0,4.599,3.729,8.328,8.328,8.328  c4.599,0,8.328-3.729,8.328-8.328C58.328,45.4,54.6,41.671,50,41.671z M79.838,41.671c-4.598,0-8.328,3.729-8.328,8.329  c0,4.599,3.73,8.328,8.328,8.328c4.6,0,8.328-3.729,8.328-8.328C88.166,45.4,84.438,41.671,79.838,41.671z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-body mt-2">
                <nav class="border-bottom">
                    <ul class="nav justify-content-center">
                        <li class="nav-item fw-bold">
                            <a href="#" class="nav-link text-dark fs-6">Tổng quan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#a" class="nav-link text-dark fs-6">Đánh giá</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark fs-6">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark fs-6">Đề xuất</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div id="SECTION1">
            <div class="swiper-container position-relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/img/2024_5_29_638526132170267161_danh-gia-may-xay-thit-osaka-20240808034656-w9egi.jpg') }}"
                            data-large="{{ asset('frontend/assets/img/2024_5_29_638526132170267161_danh-gia-may-xay-thit-osaka-20240808034656-w9egi.jpg') }}"
                            alt="Cigar 1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/img/2024_5_29_638526132170267161_danh-gia-may-xay-thit-osaka-20240808034656-w9egi.jpg') }}"
                            data-large="{{ asset('frontend/assets/img/2024_5_29_638526132170267161_danh-gia-may-xay-thit-osaka-20240808034656-w9egi.jpg') }}"
                            alt="Cigar 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/img/2024_5_29_638526132170267161_danh-gia-may-xay-thit-osaka-20240808034656-w9egi.jpg') }}"
                            data-large="{{ asset('frontend/assets/img/2024_5_29_638526132170267161_danh-gia-may-xay-thit-osaka-20240808034656-w9egi.jpg') }}"
                            alt="Cigar 3" />
                    </div>
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
                    <p class="mb-0 fs-6 text-light fw-bold" style="font-style: italic">
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
                            left: 115px;
                        ">
                    <p class="mb-0 fs-6 text-light fw-bold" style="font-style: italic">
                        BONUS
                    </p>
                    <p class="mb-0 text-light" style="line-height: 1">Hoàn tiền</p>
                </div>
            </div>

            <div class="row" style="--bs-gutter-x: 0rem">
                <div class="col-6 bg-danger ps-3 py-2" style="line-height: 1">
                    <div class="text-light fw-bold fs-5">90.000đ</div>
                    <div class="fs-6" style="color: #d3d3d3">
                        <del>420.000đ</del>
                        <small>-60%</small>
                    </div>
                </div>
                <div class="col-6 bg-warning px-4 py-2" style="line-height: 1.1">
                    <p class="mb-0 fs-5 fw-bold">Ưu đãi giờ vàng</p>
                    <span class="fs-6">Kết thúc sau 1 ngày</span>
                </div>
            </div>

            <h3 class="fw-bold fs-6 mt-3 px-2">
                <span class="badge rounded-pill bg-danger">Sale sốc!!!</span>
                Máy Xay Đa Năng Osaka Nhật Bản - Máy Xay Sinh Tố,Thịt Cao Cấp-Lưỡi Dao
                Lớn Không Gỉ Bảo Hành 1 Năm
            </h3>

            <div class="row px-2">
                <div class="col-4 d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
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
                    <p class="mb-0 fs-6 fw-bold me-2 ms-1">4.8/5</p>
                    <span class="fs-6 text-primary"> (1.2k) </span>
                </div>

                <div class="col-8 d-flex align-items-center gap-2 px-0">
                    <p class="mb-0 text-muted">
                        Đã bán <span class="fs-6 fw-bold">12k</span>
                    </p>
                    <p class="mb-0 fs-6 fw-bold" style="color: rgb(28, 191, 192)">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            x="0px" y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24"
                            xml:space="preserve" preserveAspectRatio="none" width="18px" height="18px"
                            class="" fill="#1CBFC0">
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
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 66 66" style="enable-background: new 0 0 66 66" xml:space="preserve"
                        preserveAspectRatio="none" width="22px" height="22px" class=""
                        fill="rgba(156, 113, 49, 1)">
                        <g>
                            <path
                                d="M43.4,50.4h-3.1h0c-1.2,0-2.7-2-3.4-6.3c1.3-0.2,2.3-1.4,2.3-2.7v-1.2c-1.7,0.6-3.5,0.9-5.3,1c-0.3,0-0.6,0-0.9,0   c-2.1,0-4.2-0.3-6.1-1v1.2c0,1.4,1,2.5,2.3,2.7c-0.7,4.3-2.2,6.3-3.4,6.3h-3.1c-2.8,0-5,2.3-5,5v8.7c0,0.6,0.4,1,1,1h28.8   c0.5,0,1-0.4,1-1v-8.7C48.4,52.7,46.1,50.4,43.4,50.4z">
                            </path>
                            <path
                                d="M58.5,8.9h-8.3V6.9c0.8,0,1.6-0.3,2.1-0.9c0.5-0.5,0.9-1.3,0.9-2.1c0-1.7-1.3-3-3-3H15.8c-1.7,0-3,1.3-3,3c0,1.6,1.3,3,3,3   h0v2.1H7.5c-0.5,0-1,0.5-1,1c0.3,12.4,5.8,21.6,14.3,24.2c3.1,3.1,7.4,5.1,12.2,5.1c0.3,0,0.5,0,0.8,0c4.4-0.2,8.3-2.1,11.2-5   c8.7-2.5,14.2-11.8,14.5-24.3C59.5,9.4,59,8.9,58.5,8.9z M8.5,10.9h7.3v11.2c0,3.2,0.9,6.2,2.4,8.8C12.6,27.5,9,20.3,8.5,10.9z    M47.5,31c4-6.5,2.2-11.9,2.6-20.1h7.3C57,20.4,53.3,27.7,47.5,31z">
                            </path>
                        </g>
                    </svg>

                    <p class="mb-0 fw-bold fs-6" style="color: #9c7131">
                        Sản phẩm hàng đầu
                    </p>

                    <span class="fs-6" style="color: rgb(150, 117, 67)">Máy xay thịt</span>
                </div>
                <svg width="22" height="22" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                    <polyline points="15,10 35,25 15,40" stroke="rgb(156, 113, 49)" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <div style="background-color: #f9f9f9" class="d-flex justify-content-evenly mt-2 py-2">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 60 60" style="enable-background: new 0 0 60 60" xml:space="preserve"
                        preserveAspectRatio="none" width="18px" height="18px" class="" fill="#FFCE71">
                        <g>
                            <path
                                d="M47.52,32.74c-4.12,0-7.48,3.35-7.48,7.47c0,4.13,3.36,7.48,7.48,7.48S55,44.35,55,40.22C55,36.1,51.64,32.74,47.52,32.74z    M50.36,39.45L47.4,42.4c-0.2,0.2-0.45,0.29-0.71,0.29s-0.51-0.1-0.71-0.29l-1.3-1.3c-0.39-0.39-0.39-1.02,0-1.41s1.02-0.39,1.41,0   l0.6,0.6l2.25-2.25c0.39-0.39,1.02-0.39,1.41,0S50.75,39.06,50.36,39.45z">
                            </path>
                            <path
                                d="M49.1,15.72v0.81H5v-0.81c0-1.88,1.52-3.41,3.4-3.41h37.3C47.57,12.3,49.1,13.84,49.1,15.72z">
                            </path>
                            <path
                                d="M5,25.33v13.34c0,1.88,1.52,3.41,3.4,3.41h29.83c-0.12-0.6-0.19-1.22-0.19-1.86c0-5.22,4.25-9.47,9.48-9.47   c0.54,0,1.06,0.06,1.58,0.14v-5.56H5z M17.68,34.33h-7.3c-0.55,0-1-0.45-1-1s0.45-1,1-1h7.3c0.55,0,1,0.45,1,1   S18.23,34.33,17.68,34.33z M22.9,34.33h-1.77c-0.55,0-1-0.45-1-1s0.45-1,1-1h1.77c0.55,0,1,0.45,1,1S23.45,34.33,22.9,34.33z    M28.26,34.33h-1.77c-0.55,0-1-0.45-1-1s0.45-1,1-1h1.77c0.55,0,1,0.45,1,1S28.81,34.33,28.26,34.33z">
                            </path>
                            <rect x="5" y="18.53" width="44.1" height="4.8"></rect>
                        </g>
                    </svg>
                    <span style="font-size: 0.7rem">Thanh toán bảo mật</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 70 70" style="enable-background: new 0 0 70 70" xml:space="preserve"
                        preserveAspectRatio="none" width="18px" height="18px" class="" fill="#FFCE71">
                        <g>
                            <path
                                d="M40.55302,8.57504c-5.37012,0-9.74011,4.35999-9.74011,9.72998s4.37,9.73999,9.74011,9.73999   c5.36987,0,9.72998-4.37,9.72998-9.73999S45.92289,8.57504,40.55302,8.57504z M45.25004,21.59195   c0.39063,0.39063,0.39063,1.02344,0,1.41406c-0.39061,0.39061-1.02343,0.39064-1.41406,0l-3.28467-3.28467l-3.28467,3.28467   c-0.39061,0.39061-1.02343,0.39064-1.41406,0c-0.39063-0.39063-0.39063-1.02344,0-1.41406l3.28467-3.28467l-3.28467-3.28467   c-0.39063-0.39063-0.39063-1.02344,0-1.41406s1.02344-0.39063,1.41406,0l3.28467,3.28467l3.28467-3.28467   c0.39063-0.39063,1.02344-0.39063,1.41406,0s0.39063,1.02344,0,1.41406l-3.28467,3.28467L45.25004,21.59195z">
                            </path>
                            <g>
                                <path
                                    d="M23.64286,45.14505l-4.06995,6.53998h42.02002c1.03067,0,4.54993,1.76913,4.54993,5.48999    c0,3.02002-2.45996,5.47998-5.48999,5.47998c-3.02002,0-5.48999-2.45996-5.48999-5.47998    c0-1.32001,0.46997-2.53998,1.26001-3.48999h-33c2.89416,3.48019,0.46573,8.96997-4.22998,8.96997    c-5.86444,0-7.63179-8.03468-2.28003-10.46997c0-0.10064,0.34286-0.56073,5.08008-8.16998    c0-0.01001-0.01001-0.02002-0.01001-0.04004c-0.08035-0.22742-0.06947-0.19348-0.08008-0.21997l0.02002,0.02997    c-1.38037-3.67537,3.92657,11.79544-11.50995-34.44H4.00291c-0.56,0-1-0.44995-1-1c0-0.54999,0.44-1,1-1h7.09003    c0.40997,0,0.77002,0.25,0.92999,0.63l3.76007,9.33002h13.07996c-0.04004,0.33002-0.05005,0.65997-0.05005,1    c0,6.46997,5.27002,11.73999,11.74011,11.73999c6.46997,0,11.72998-5.27002,11.72998-11.73999    c0-0.34003-0.01001-0.66998-0.05005-1h13.76001c0.07996,0,0.16992,0.01001,0.23999,0.02997h0.01001    c0.26001,0.07001,0.48999,0.24005,0.62988,0.48004c0.13013,0.23999,0.16016,0.51996,0.08008,0.78998l-7.96997,25.84003    c-0.13,0.41998-0.52002,0.70001-0.95996,0.70001H23.64286z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span style="font-size: 0.7rem">Hủy đơn dễ dàng</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 100 100" style="enable-background: new 0 0 100 100"
                        xml:space="preserve" preserveAspectRatio="none" width="18px" height="18px" class=""
                        fill="#FFCE71">
                        <path
                            d="M67.2,8.3c-19.8-8-42.7-1.2-54.6,16.1C0.9,41.5,3,64.2,17.4,79c-1,4.3-3,9.5-7,12.1c-0.7,0.5-1,1.3-0.9,2.1  c0.2,0.8,0.8,1.4,1.7,1.6c0.2,0,1.7,0.2,4.1,0.2c4.5,0,12-0.8,18.5-5.4c5.1,1.9,10.5,2.9,16.1,2.9c0,0,0.1,0,0.1,0  c21.4,0,39.9-14.8,44.1-35.2C98.3,36.9,87,16.3,67.2,8.3z M34.2,36.7h22.6c1.1,0,2,0.9,2,2s-0.9,2-2,2H34.2c-1.1,0-2-0.9-2-2  S33.1,36.7,34.2,36.7z M70.4,58.8H34.2c-1.1,0-2-0.9-2-2s0.9-2,2-2h36.2c1.1,0,2,0.9,2,2S71.5,58.8,70.4,58.8z">
                        </path>
                    </svg>
                    <span style="font-size: 0.7rem">Đội ngũ hỗ trợ 24/7</span>
                </div>
            </div>

            <!-- PhotoSwipe Popup -->
            <div id="photoswipe" class="pswp"></div>
        </div>

        <div id="SECTION2">
            <div class="px-2 py-3 border-bottom">
                <p class="mb-0 fw-bold fs-6">Hình thức thanh toán</p>
                <span class="text-light fw-bold px-1"
                    style="background-color: green; font-size: 0.7rem; border-radius: 4px">COD</span>
                <span class="text-muted">Thanh toán bằng tiền mặt (COD)</span>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                <p class="mb-0 fw-bold fs-6">Vận chuyển</p>
                <p class="mb-0 fs-6">
                    <del class="text-muted me-2">22.200đ </del>
                    <span class="text-danger">Free</span>
                    <svg width="18" height="18" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"
                        class="text-muted">
                        <polyline points="15,10 35,25 15,40" stroke="rgb(50, 50, 50)" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round"></polyline>
                    </svg>
                </p>
            </div>

            <div class="position-relative border-bottom pb-3">
                <img width="217.254" height="28.654" src="{{ asset('frontend/assets/img/1-20230922041846-a2w0l.png') }}" alt=""
                    align="left" />
                <span class="position-absolute fw-bold" style="top: 4px; left: 15px; color: rgb(72, 190, 190); font-size: 14px;">Voucher
                    giảm phí vận chuyển</span>
                <p class="mb-0 fs-6 px-2" style="padding-top: 5px">
                    Giảm 5000đ phí vận chuyển đối với các đơn hàng trị giá 25000đ trở lên,
                    giảm 25000đ phí vận chuyển đối với các đơn hàng trị giá 80.000đ trở
                    lên
                </p>
            </div>

            <div class="py-3 px-2">
                <p id="a" class="mb-0 fw-bold fs-6">Chính sách đổi trả</p>
                <span class="text-muted">Trả hàng trong vòng 7 ngày - Hủy đơn dễ dàng - Hoàn hàng miễn
                    phí</span>

                <button class="px-5 py-2 text-light fw-bold fs-6 mt-2 d-block"
                    style="border-radius: 4px; background-color: #fe2b54; border: none">
                    Mua ngay
                </button>
            </div>
        </div>

        <hr style="border: 3px solid rgb(209, 209, 209)" />

        <div id="SECTION3" class="px-2">
            <div class="d-flex justify-content-between align-items-center ">
                <p class="mb-0 fw-bold" style="font-size: 15px">
                    Đánh giá của khách hàng (1245 bình luận)
                </p>
                <span class="fw-bold text-muted">Xem thêm

                    <svg width="18" height="18" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"
                        class="text-muted">
                        <polyline points="15,10 35,25 15,40" stroke="rgb(50, 50, 50)" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round"></polyline>
                    </svg>
                </span>
            </div>

            <div class="rating d-flex align-items-center gap-2">
                <span class="fs-6"><b>4.8</b>/5</span>
                <span class="d-flex align-items-center">
                    <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                        enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none"
                        width="16px" height="16px" class="" fill='url("#SHAPE6_mobile_gradient")'>
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
                    <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                        enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none"
                        width="16px" height="16px" class="" fill='url("#SHAPE6_mobile_gradient")'>
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
                    <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                        enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none"
                        width="16px" height="16px" class="" fill='url("#SHAPE6_mobile_gradient")'>
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
                    <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                        enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none"
                        width="16px" height="16px" class="" fill='url("#SHAPE6_mobile_gradient")'>
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
                    <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                        enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none"
                        width="16px" height="16px" class="" fill='url("#SHAPE6_mobile_gradient")'>
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
                </span>
            </div>

            <div class="comments">
                <div class="d-flex align-items-center gap-1">
                    <img class="" width="40" height="40"
                        src="./assets/img/default-avatar-profile-icon-vector-260nw-2271804793-removebg-preview.png"
                        alt="" />
                    <span class="fw-bold" style="font-size: 0.9rem">Thanh Huyền </span>
                </div>

                <div class="my-1">
                    <span class="d-flex align-items-center">
                        <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
                            preserveAspectRatio="none" width="14px" height="14px" class=""
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
                        <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
                            preserveAspectRatio="none" width="14px" height="14px" class=""
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
                        <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
                            preserveAspectRatio="none" width="14px" height="14px" class=""
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
                        <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
                            preserveAspectRatio="none" width="14px" height="14px" class=""
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
                        <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
                            preserveAspectRatio="none" width="14px" height="14px" class=""
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
                    </span>
                    <span class="text-muted">Mặt hàng : 500ml</span>
                </div>

                <div class="mb-2">
                    <p class="mb-0 text-dark mb-1" style="font-size: 14px">
                        Máy xay mới, sử dụng tốt, vừa mua về dùng thử và ok. Giá rẻ + được
                        giảm giá, rất thích🥰🥰🥰🥰🥰🥰. Đóng gói hàng đẹp, cẩn thận
                    </p>

                    <img src="{{ asset('frontend/assets/img/osaka-fp126-20240808034656-knjji.jpg') }}" width="89" height="118.324px"
                        style="object-fit: cover" alt="" />
                </div>
            </div>

            <p class="text-muted">Còn hơn 52+ đánh giá khác…</p>
        </div>

        <hr style="border: 3px solid rgb(209, 209, 209)" />

        <div id="SECTION3">
            <div class="d-flex align-items-center gap-2">
                <div class="bg-light text-center rounded-circle" style="padding: 18px 0; width: 15%">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
                        preserveAspectRatio="none" width="25px" height="25px" class="" fill="#000">
                        <g>
                            <path
                                d="M84.1,55.6c-1.5,0-2.8,1.3-2.8,2.8v30.8H64.5V72.4c0-7.7-6.3-14-14-14c-7.7,0-14,6.3-14,14v16.8H19.7V58.4   c0-1.5-1.3-2.8-2.8-2.8s-2.8,1.3-2.8,2.8V92c0,1.5,1.3,2.8,2.8,2.8h67.2c1.5,0,2.8-1.3,2.8-2.8V58.4C86.9,56.9,85.6,55.6,84.1,55.6   z M42.1,72.4c0-4.6,3.8-8.4,8.4-8.4s8.4,3.8,8.4,8.4v16.8H42.1V72.4z M97.6,37.2L86.4,20.4c0,0,0,0,0,0c-0.1-0.2-0.2-0.3-0.4-0.4   C86,20,86,19.9,85.9,19.9c-0.1-0.1-0.2-0.1-0.2-0.2c-0.1,0-0.2-0.1-0.2-0.1c-0.1,0-0.2-0.1-0.2-0.1c-0.1,0-0.2-0.1-0.3-0.1   c-0.1,0-0.1-0.1-0.2-0.1c-0.2,0-0.4-0.1-0.6-0.1c0,0,0,0,0,0H16.9c0,0,0,0,0,0c-0.2,0-0.4,0-0.5,0.1c-0.1,0-0.2,0.1-0.3,0.1   c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0.1-0.2,0.1-0.2,0.2C15,19.9,15,20,14.9,20   c-0.1,0.1-0.2,0.3-0.4,0.4c0,0,0,0,0,0L3.4,37.2c-0.3,0.5-0.5,1-0.5,1.6c0,7.7,6.3,14,14,14c4.6,0,8.6-2.2,11.2-5.6   c2.6,3.4,6.6,5.6,11.2,5.6s8.6-2.2,11.2-5.6c2.6,3.4,6.6,5.6,11.2,5.6c4.6,0,8.6-2.2,11.2-5.6c2.6,3.4,6.6,5.6,11.2,5.6   c7.7,0,14-6.3,14-14C98.1,38.2,97.9,37.7,97.6,37.2z M84.1,47.2c-4.6,0-8.4-3.8-8.4-8.4c0,0,0,0,0,0c0,0,0,0,0,0v-8.4   c0-1.5-1.3-2.8-2.8-2.8s-2.8,1.3-2.8,2.8v8.4c0,4.6-3.8,8.4-8.4,8.4s-8.4-3.8-8.4-8.4c0,0,0,0,0,0c0,0,0,0,0,0v-8.4   c0-1.5-1.3-2.8-2.8-2.8s-2.8,1.3-2.8,2.8v8.4c0,4.6-3.8,8.4-8.4,8.4s-8.4-3.8-8.4-8.4v-8.4c0-1.5-1.3-2.8-2.8-2.8s-2.8,1.3-2.8,2.8   v8.4c0,0,0,0,0,0c0,0,0,0,0,0c0,4.6-3.8,8.4-8.4,8.4c-4.4,0-8-3.3-8.4-7.6l9.9-14.8h64.2l9.9,14.8C92.1,43.9,88.5,47.2,84.1,47.2z    M14.1,13.6V8c0-1.5,1.3-2.8,2.8-2.8h67.2c1.5,0,2.8,1.3,2.8,2.8v5.6c0,1.5-1.3,2.8-2.8,2.8s-2.8-1.3-2.8-2.8v-2.8H19.7v2.8   c0,1.5-1.3,2.8-2.8,2.8S14.1,15.1,14.1,13.6z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="info" style="width: 55%">
                    <p class="fw-bold fs-6 mb-1">Gia dụng 19</p>
                    <p class="mb-0 border"
                        style="
                                background-color: #eaf5ef;
                                padding: 3px;
                                display: inline;
                                border-radius: 4px;
                            ">
                        <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px"
                            y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"
                            preserveAspectRatio="none" width="14px" height="14px">
                            <g>
                                <polygon
                                    points="50,4.826 64.682,34.567 97.5,39.336 73.752,62.485 79.36,95.174 50,79.741 20.646,95.174 26.252,62.485 2.5,39.336 35.323,34.567"
                                    fill="rgb(79, 171, 125)"></polygon>
                            </g>
                        </svg>
                        <span class="fw-bold">4.9</span>
                    </p>
                </div>

                <button style="width: 25%" class="fw-bold border py-2">Truy cập</button>
            </div>

            <div class="box d-flex justify-content-around py-3">
                <p class="mb-0" style="line-height: 1">
                    <span class="fw-bold fs-6">184</span> <br />
                    <small class="text-muted">Mặt hàng</small>
                </p>
                <p class="mb-0" style="line-height: 1">
                    <span class="fw-bold fs-6">24583</span> <br />
                    <small class="text-muted">Đã bán</small>
                </p>
                <p class="mb-0" style="line-height: 1">
                    <span class="fw-bold fs-6">100%</span> <br />
                    <small class="text-muted">Tỷ lệ trả lời 24 giờ</small>
                </p>
                <p class="mb-0" style="line-height: 1">
                    <span class="fw-bold fs-6">184</span> <br />
                    <small class="text-muted">Xuất kho trong 48 giờ </small>
                </p>
            </div>
        </div>

        <hr style="border: 3px solid rgb(209, 209, 209)" />

        <div id="SECTION4"></div>

        <div id="SECTION5" class="text-center mt-4 bg-light p-3">
            <p class="deal-button">
                <i class="bi bi-lightning"></i> Deal hời - Mua ngay!
            </p>
            <p class="product-title">Máy xay thịt osaka đến từ nhật bản</p>
            <p class="product-subtitle">Tươi tắn làn da - Khỏe đẹp mịn màng</p>
            <p style="font-size: 0.9rem"><span>Giá gốc: </span><del>420.000đ</del></p>
            <p class="fw-bold">
                <span style="font-size: 0.9rem">Giảm còn:</span>
                <span class="fs-5">99.000đ</span>
                <small class="bg-danger text-light">-60%</small>
            </p>

            <div class="countdown-container mt-4">
                <p class="mb-1">Siêu sale chỉ diễn ra trong:</p>
                <div class="countdown">
                    <div class="countdown-box">
                        <div class="days">00</div>
                        <span>Ngày</span>
                    </div>
                    <div class="countdown-box">
                        <div class="hours">00</div>
                        <span>Giờ</span>
                    </div>
                    <div class="countdown-box">
                        <div class="minutes">00</div>
                        <span>Phút</span>
                    </div>
                    <div class="countdown-box">
                        <div class="seconds">00</div>
                        <span>Giây</span>
                    </div>
                </div>
            </div>

            <div class="order-form">
                <form>
                    <input type="text" class="mb-3 w-100" placeholder="Họ và Tên" required />
                    <input type="text" class="mb-3 w-100" placeholder="Số điện thoại" required />
                    <textarea class="mb-3 w-100" rows="2" placeholder="Địa chỉ" required></textarea>

                    <div class="d-flex align-items-center justify-content-start gap-1 mb-1">
                        <input class="" type="radio" name="order" id="option1" />
                        <label class="form-check-label" for="option1">
                            Mua 1 Máy: 99.000đ + 30.000 Phí Vận Chuyển
                        </label>
                    </div>

                    <div class="d-flex align-items-center justify-content-start gap-1 mb-1">
                        <input class="" type="radio" name="order" id="option2" />
                        <label class="form-check-label" for="option2">
                            Mua 2 Máy: 198.000đ + Miễn Phí Vận Chuyển
                        </label>
                    </div>
                    <div class="d-flex align-items-center justify-content-start gap-1 mb-3">
                        <input class="" type="radio" name="order" id="option3" />
                        <label class="form-check-label" for="option3">
                            Mua 3 Máy: 277.000đ + Miễn Phí Vận Chuyển
                        </label>
                    </div>

                    <button type="submit" class="btn btn-order">Mua Ngay</button>
                </form>
            </div>

            <div class="text-start mb-5">
                <h4><strong>Gia dụng 19</strong></h4>
                <p>
                    <i class="fas fa-map-marker-alt"></i> <strong>Địa chỉ:</strong> 402 -
                    Mỹ Đình - Nam Từ Liêm, HN
                </p>
                <p><i class="fas fa-phone"></i> <strong>Hotline:</strong> 098866996</p>
                <p>
                    <i class="fas fa-envelope"></i>
                    <strong>Email:</strong> rosielelunal@gmail.com
                </p>
                <p>
                    <i class="fas fa-globe"></i> <strong>Website:</strong> Rosielunal.com
                </p>
            </div>
        </div>

        <div class="fixed-bottom-bar">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="text-center me-3">
                        <i class="bi bi-house-door"></i>
                        <p class="mb-0">Cửa hàng</p>
                    </div>
                    <div class="text-center">
                        <i class="bi bi-chat-dots"></i>
                        <p class="mb-0">Trò chuyện</p>
                    </div>
                </div>
                <div class="d-flex">
                    <button class="btn btn-outline-danger me-2 fw-bold py-0 px-4" style="font-size: 14px"
                        data-bs-toggle="modal" data-bs-target="#cartModal">
                        Thêm vào<br />Giỏ hàng
                    </button>
                    <button class="btn btn-danger" style="font-size: 14px" data-bs-toggle="modal"
                        data-bs-target="#cartModal">
                        Mua Ngay
                    </button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="countdown-container mt-4">
                        <p class="mb-1">Siêu sale chỉ diễn ra trong</p>
                        <div class="countdown">
                            <div class="countdown-box">
                                <div class="days">00</div>
                                <span>Ngày</span>
                            </div>
                            <div class="countdown-box">
                                <div class="hours">00</div>
                                <span>Giờ</span>
                            </div>
                            <div class="countdown-box">
                                <div class="minutes">00</div>
                                <span>Phút</span>
                            </div>
                            <div class="countdown-box">
                                <div class="seconds">00</div>
                                <span>Giây</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-form">
                        <form>
                            <input type="text" class="mb-3 w-100" placeholder="Họ và Tên" required />
                            <input type="text" class="mb-3 w-100" placeholder="Số điện thoại" required />
                            <textarea class="mb-3 w-100" rows="2" placeholder="Địa chỉ" required></textarea>

                            <div class="d-flex align-items-center justify-content-start gap-1 mb-1">
                                <input class="" type="radio" name="order" id="option1" />
                                <label class="form-check-label" for="option1">
                                    Mua 1 Máy: 99.000đ + 30.000 Phí Vận Chuyển
                                </label>
                            </div>

                            <div class="d-flex align-items-center justify-content-start gap-1 mb-1">
                                <input class="" type="radio" name="order" id="option2" />
                                <label class="form-check-label" for="option2">
                                    Mua 2 Máy: 198.000đ + Miễn Phí Vận Chuyển
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-start gap-1 mb-3">
                                <input class="" type="radio" name="order" id="option3" />
                                <label class="form-check-label" for="option3">
                                    Mua 3 Máy: 277.000đ + Miễn Phí Vận Chuyển
                                </label>
                            </div>

                            <button type="submit" class="btn btn-order">Mua Ngay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- PhotoSwipe JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/umd/photoswipe.umd.min.js"></script>

    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>

</html>
