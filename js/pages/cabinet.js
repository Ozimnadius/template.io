//cabinet.js
$(function () {

    // VARIABLES


    // EVENTS
    $('.order__top').on('click', function (e) {
        let $this = $(this),
            $order = $this.closest('.order'),
            $bottom = $order.find('.order__bottom');

        $order.toggleClass('active');
        $bottom.slideToggle();

    });


    // FUNCTIONS


    //VENDORS

});