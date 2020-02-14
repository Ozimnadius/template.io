//header.js
$(function () {


    let $menus = $('.menu'),
        menusObj = {};

    $menus.each(function (x, i) {
        let menu = $(i);
        menusObj['menu' + x] = new AdaptiveMenu(menu);
        menusObj['menu' + x].init();
    });

    const headerFixed = $('.fixmenu'),
        headerMain = $('.header');

    $(window).on('scroll', function (e) {
        let height = headerMain.outerHeight(),
            scrollTop = $(this).scrollTop();

        if (scrollTop > height) {
            headerFixed.addClass('active');
        } else {
            headerFixed.removeClass('active');
        }

    });


    if (device.tablet() || device.mobile()) {
        $('.jsHoverLink').on('click', function (e) {
            e.preventDefault();
            let link = $(this),
                item = link.closest('.jsHoverItem');

            $(this).trigger('hover');
        });
    }

});