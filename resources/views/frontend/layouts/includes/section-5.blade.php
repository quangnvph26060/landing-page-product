<p class="deal-button">
    <i class="bi bi-lightning"></i> Deal hời - Mua ngay!
</p>
<p class="product-title">{{ $s4->product_name }}</p>
<p class="product-subtitle">{{ $s4->short_description }}</p>
<p style="font-size: 0.9rem"><span>Giá gốc: </span><del>{{ $s4->price }}</del></p>
<p class="fw-bold">
    <span style="font-size: 0.9rem">Giảm còn:</span>
    <span class="">{{ $s4->discount }}</span>
    <small class="bg-danger text-light">-{{ calculateDiscountPercentage($s4->price, $s4->discount) }}%</small>
</p>

<div class="countdown-container mt-4">
    <p class="mb-1 fs-6">Siêu sale chỉ diễn ra trong:</p>
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
    <form method="post" id="myForm">
        @csrf
        <input type="text" class="mb-3 w-100" placeholder="Họ và Tên" name="fullname" />
        <input type="text" class="mb-3 w-100" placeholder="Số điện thoại" name="phone" />
        <textarea class="mb-2 w-100" rows="2" placeholder="Địa chỉ" name="address"></textarea>



        @foreach ($s4->options ?? [] as $o)
            <div class="d-flex align-items-center justify-content-start gap-1 mb-1 {{ $loop->last ? 'mb-3' : '' }}">
                <input class="" type="radio" value="{{ $o['content'] }}" name="notes" id="option1" />
                <label class="form-check-label" for="option1">
                    {{ $o['content'] }}
                </label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-order">Mua Ngay</button>
    </form>
</div>

<div class="text-start mb-1">
    <h4><strong>{{ $s3->shop_name }}</strong></h4>
    <p>
        <i class="fas fa-map-marker-alt"></i>
        <strong>Địa chỉ:</strong>
        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($config->address) }}" target="_blank">
            {{ $config->address }}
        </a>
    </p>
    <p>
        <i class="fas fa-phone"></i>
        <strong>Hotline:</strong>
        <a href="tel:{{ preg_replace('/\s+/', '', $config->hotline) }}">
            {{ $config->hotline }}
        </a>
    </p>
    <p>
        <i class="fas fa-envelope"></i>
        <strong>Email:</strong>
        <a href="mailto:{{ $config->email }}">
            {{ $config->email }}
        </a>
    </p>
    <p>
        <i class="fas fa-globe"></i>
        <strong>Website:</strong>
        <a href="{{ $config->website }}" target="_blank">
            {{ $config->website }}
        </a>
    </p>
</div>
