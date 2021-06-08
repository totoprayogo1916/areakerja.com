$(function () {
    $('.multiple-items').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:"<button type='button' class='slick-prev '><img src='{{ asset('img/kiri.png') }}' aria-hidden='true'></button>",
        nextArrow:"<button type='button' class='slick-next '><img src='{{ asset('img/kanan.png') }}' aria-hidden='true'></button>",
        autoplay: true,
        autoplaySpeed: 3000
    });
});