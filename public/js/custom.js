$(function () {
    $('.multiple-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:"<button type='button' class='slick-prev prev' aria-hidden='true'></button>",
        nextArrow:"<button type='button' class='slick-next next' aria-hidden='true'></button>",
        autoplay: true,
        autoplaySpeed: 3000

       
    });
});