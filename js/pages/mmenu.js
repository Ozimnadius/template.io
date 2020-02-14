//mmenu.js
$(function () {

    // VARIABLES

    // EVENTS
    $('.mitem__link_arr').on('click', function (e) {
        e.preventDefault();
        let link = $(this),
            wrapper = link.next();

        wrapper.addClass('active');
    });

    $('.jsWrapClose').on('click', function (e) {
        e.preventDefault();
        let btn = $(this),
            wrapper = btn.closest('.mmenu__wrapper');

        wrapper.removeClass('active');
    });

    $('.jsMenuOpen').on('click',function (e) {
        e.preventDefault();
        openMenu();
        setOverflow();
    });

    $('.jsMenuClose').on('click',function (e) {
        e.preventDefault();
        closeMenu();
        removeOverflow();
    });

    //Закрытие форм
    $('body').on('click', function (e) {
        let target = $(e.target);

        if (target.hasClass('mmenu active') || target.closest('.jsMenuClose').length > 0) {
            closeMenu();
        }
    });


    // FUNCTIONS
    function openMenu() {
        let menu = $('.mmenu');
        menu.addClass('active');
    }

    function closeMenu() {
        let menu = $('.mmenu'),
            wrappers = menu.find('.mmenu__wrapper');
        menu.removeClass('active');
        wrappers.removeClass('active');

    }


    //VENDORS



});