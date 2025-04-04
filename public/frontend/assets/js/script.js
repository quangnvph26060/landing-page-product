// Khởi tạo SwiperJS
var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1, // Chỉ hiển thị 1 ảnh
    spaceBetween: 10, // Khoảng cách giữa các ảnh (nếu cần)
    loop: true, // Vòng lặp vô hạn
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Khởi tạo PhotoSwipe Lightbox
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".swiper-slide img");

    images.forEach((img) => {
        img.addEventListener("click", () => {
            const pswp = new PhotoSwipe({
                dataSource: [
                    {
                        src: img.getAttribute("data-large"),
                        width: 1200,
                        height: 800,
                    },
                ],
            });
            pswp.init();
        });
    });
});

function startCountdown(targetDate) {
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
            document.querySelectorAll(".countdown").forEach((el) => {
                el.innerHTML = "<p>Đã kết thúc!</p>";
            });
            clearInterval(interval);
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.querySelectorAll(".days").forEach((el) => {
            el.innerText = days.toString().padStart(2, "0");
        });
        document.querySelectorAll(".hours").forEach((el) => {
            el.innerText = hours.toString().padStart(2, "0");
        });
        document.querySelectorAll(".minutes").forEach((el) => {
            el.innerText = minutes.toString().padStart(2, "0");
        });
        document.querySelectorAll(".seconds").forEach((el) => {
            el.innerText = seconds.toString().padStart(2, "0");
        });
    }

    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
}

// document.addEventListener("DOMContentLoaded", function () {
// 	var cartModal = document.getElementById("cartModal");

// 	cartModal.addEventListener("show.bs.modal", function () {
// 		document.body.style.paddingRight = "0px";
// 	});

// 	cartModal.addEventListener("hidden.bs.modal", function () {
// 		document.body.style.paddingRight = "";
// 	});
// });

$(document).ready(function () {
    $(document).on("submit", ".myForm", function (e) {
        e.preventDefault();

        let formElement = this;
        let form = $(this).serialize();

        $.ajax({
            url: "submit-contact",
            data: form,
            method: "POST",
            success: function (res) {
                Swal.fire({
                    icon: "success",
                    title: "Thành công!",
                    text: "Đặt hàng thành công.",
                });

                formElement.reset();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    Swal.fire({
                        icon: "error",
                        title: "Lỗi!",
                        text: xhr.responseJSON.message,
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Lỗi!",
                        text:
                            xhr.responseJSON.message ||
                            "Có lỗi xảy ra, vui lòng thử lại.",
                    });
                }
            },
        });
    });
});
