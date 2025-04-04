<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="countdown-container mt-4">
            <p class="mb-1 fs-6">Siêu sale chỉ diễn ra trong</p>
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

                @foreach ($s4->options ?? [] as $o)
                    <div
                        class="d-flex align-items-center justify-content-start gap-1 mb-1 {{ $loop->last ? 'mb-3' : '' }}">
                        <input class="" type="radio" value="{{ $o['content'] }}" name="notes"
                            id="option1" />
                        <label class="form-check-label" for="option1">
                            {{ $o['content'] }}
                        </label>
                    </div>
                @endforeach

                <button type="submit" class="btn btn-order">Mua Ngay</button>
            </form>
        </div>
    </div>
</div>
