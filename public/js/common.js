$(function() {
    // Silder
    $('.slider').slick();

    // Masthead Scroll
    var header = $('.menu-area');
    var scrollY = 200;

    // Scroll Header
    $(window).scroll(function() {
        if ($(window).scrollTop() > scrollY) {
            header.addClass('scrolle');
            $('.scroll-header-search').removeClass('hide');
        } else {
            header.removeClass('scrolle');
            $('.scroll-header-search').addClass('hide');
        }
    });
});
