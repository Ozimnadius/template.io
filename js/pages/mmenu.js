//mmenu.js
$(function () {
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
});