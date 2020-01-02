// swiper head ceo
var swiper = new Swiper('.at-swiper__head', {
    // runCallbacksOnInit: 'true',
    navigation: {
        nextEl: '.at-swiper__button-next',
        prevEl: '.at-swiper__button-prev',
    },
    pagination: {
        el: '.at-swiper__head-pagination',
        clickable: 'true',
    },
});
// swiper milestone
var swiper = new Swiper('.at-swiper__milestone', {
    slidesPerView: 4,
    spaceBetween: 20,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
// swiper article kamis
var swiper = new Swiper('.at-swiper__kamis', {
    slidesPerView: 3,
    spaceBetween: 25,
    freeMode: true,
});
$(document).ready(function () {
    $('.at-slick__head').slick({
        dots: true,
    });
    $('.at-slick__team').slick({
        dots: true,
    });
    // click love
    $(".js-love").on('click', function (event) {
        var id = $(this).data('lottie');
        if ($(this).parent().hasClass('is-disabled')) { }
        else {
            eval('alt_love_' + id).play();
        }
    });
});
