//header.js
$(function () {

    // VARIABLES
    let $menus = $('.menu'),
        menusObj = {};

    // Применяем плагин адаптивного меню к менюшкам
    $menus.each(function (x, i) {
        let menu = $(i);
        menusObj['menu' + x] = new AdaptiveMenu(menu);
        menusObj['menu' + x].init();
    });

    const headerFixed = $('.fixmenu'),
        headerMain = $('.header');

    // EVENTS
    // Фиксированная шапка
    $(window).on('scroll', function (e) {
        let height = headerMain.outerHeight(),
            scrollTop = $(this).scrollTop();

        if (scrollTop > height) {
            headerFixed.addClass('active');
        } else {
            headerFixed.removeClass('active');
        }

    });


    // FUNCTIONS

    //VENDORS
    //Если планшет или мобила, то клик отрабатывает как стандартный ховер
    if (device.tablet() || device.mobile()) {
        $('.jsHoverLink').on('click', function (e) {
            e.preventDefault();
            let link = $(this),
                item = link.closest('.jsHoverItem');

            $(this).trigger('hover');
        });
    }









});