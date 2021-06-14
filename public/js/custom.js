$(function () {
    $('.multiple-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:"<a type='button' class='slick-prev prev' aria-hidden='true'></a>",
        nextArrow:"<a type='button' class='slick-next next' aria-hidden='true'></a>",
        autoplay: true,
        autoplaySpeed: 3000,

    //     lazyLoad: 'onDemand',
    // centerMode: true,
    // infinite: true,
    // slidesToShow: 1,
    // slidesToScroll: 1,
    // dots: true,
    //autoplay: true,
    // autoplaySpeed: 6000,
    responsive: [
    {
      breakpoint: 768,
      settings: {
      slidesToShow: 2,
      arrows: false,
      centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
      slidesToScroll: 1,
      }
    }
   ]
    });
});

if ($(window).width() < 1070) {
    var slick = document.getElementById("slick");
    slick.style.marginTop='50%';
}
