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
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.at-swiper__button-next',
        prevEl: '.at-swiper__button-prev',
    },
});
// swiper article kamis
var swiper = new Swiper('.at-swiper__kamis', {
    slidesPerView: 'auto',
    spaceBetween: 30,
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
