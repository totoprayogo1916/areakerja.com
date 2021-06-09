$(function () {
    $('.multiple-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:"<a type='button' class='slick-prev prev' aria-hidden='true'></a>",
        nextArrow:"<a type='button' class='slick-next next' aria-hidden='true'></a>",
        autoplay: true,
        autoplaySpeed: 3000
    });
});
