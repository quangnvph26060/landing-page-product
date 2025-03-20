<div class="px-2 py-3 border-bottom">
    <p class="mb-0 fw-bold ">Hình thức thanh toán</p>
    @foreach ($s2->payment_methods ?? [] as $pm)
        <span class="text-light fw-bold px-1"
            style="background-color: green; font-size: 0.7rem; border-radius: 4px">{{ $pm['abbr'] }}</span>
        <span class="text-muted">{{ $pm['content'] }}</span>
    @endforeach

</div>

<div class="d-flex justify-content-between align-items-center mt-3 px-2">
    <p class="mb-0 fw-bold ">Vận chuyển</p>
    <p class="mb-0 ">
        <del class="text-muted me-2">{{ $s2->freeship_discount }} </del>
        <span class="text-danger">Free</span>
        <svg width="18" height="18" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" class="text-muted">
            <polyline points="15,10 35,25 15,40" stroke="rgb(50, 50, 50)" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round"></polyline>
        </svg>
    </p>
</div>

<div class="position-relative border-bottom pb-3">
    <img width="217.254" height="28.654" src="{{ asset('frontend/assets/img/1-20230922041846-a2w0l.png') }}"
        alt="" align="left" />
    <span class="position-absolute fw-bold"
        style="top: 4px; left: 15px; color: rgb(72, 190, 190); font-size: 14px;">Voucher
        giảm phí vận chuyển</span>
    <p class="mb-0  px-2" style="padding-top: 5px">
        {{ $s2->transport }}
    </p>
</div>

<div class="py-3 px-2">
    <p id="a" class="mb-0 fw-bold ">Chính sách đổi trả</p>
    <span class="text-muted">{{ $s2->return_policy }}</span>

    <button class="px-5 py-2 text-light fw-bold  mt-2 d-block"
        style="border-radius: 4px; background-color: #fe2b54; border: none">
        Mua ngay
    </button>
</div>
