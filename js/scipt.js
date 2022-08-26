$(function () {
    $('.burger-btn').on('click', function () {
        $('.burger-btn').toggleClass('open');
        $('.nav-wrapper').toggleClass('fade');
        $('body').toggleClass('noscroll');
    });
    $('.header-nav').on('click', function() {
        $('.nav-wrapper').removeClass('fade');
        $('.burger-btn').removeClass('open');
    });
});