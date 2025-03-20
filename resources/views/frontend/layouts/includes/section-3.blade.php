<div class="d-flex justify-content-between align-items-center ">
    <p class="mb-0 fw-bold" style="font-size: 15px">
        Đánh giá của khách hàng ({{ $s3->review_count }} bình luận)
    </p>
    <span class="fw-bold text-muted">Xem thêm

        <svg width="18" height="18" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" class="text-muted">
            <polyline points="15,10 35,25 15,40" stroke="rgb(50, 50, 50)" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round"></polyline>
        </svg>
    </span>
</div>

<div class="rating d-flex align-items-center gap-2 ">
    <span class=""><b>{{ $s1->rating }}</b>/5</span>

    <span class="d-flex align-items-center">

        @for ($i = 0; $i < 5; $i++)
            <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none" width="16px"
                height="16px" class="" fill='url("#SHAPE6_mobile_gradient")'>
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
        @endfor
    </span>
</div>

<div class="comments">



    @foreach ($s3->comments ?? [] as $c)
        <div class="d-flex align-items-center gap-1">
            <img class="" width="40" height="40"
                src="{{ asset('frontend/assets/img/default-avatar-profile-icon-vector-260nw-2271804793-removebg-preview.png') }}"
                alt="" />
            <span class="fw-bold" style="font-size: 0.9rem">{{ $c['name'] }}</span>
        </div>

        <div class="my-1">
            <span class="d-flex align-items-center">

                @for ($i = 0; $i < 5; $i++)
                    <svg style="vertical-align: unset" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                        enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none"
                        width="14px" height="14px" class="" fill='url("#SHAPE6_mobile_gradient")'>
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
                @endfor
            </span>
            <span class="text-muted">Mặt hàng : {{ $c['item'] }}</span>
        </div>

        <div class="mb-2">
            <p class="mb-0 text-dark mb-1" style="font-size: 14px">
                {{ $c['content'] }}
            </p>

            <img src="{{ showImage($c['image'])}}" width="89"
                height="118.324px" style="object-fit: cover" alt="" />
        </div>
    @endforeach


</div>
