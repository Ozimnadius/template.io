//index.js
$(function () {

    // VARIABLES

    // EVENTS

    // FUNCTIONS

    //VENDORS


    const brecom = document.querySelector('.brecom__slider');
    if (brecom) {
        let brecomSlider = new Swiper('.brecom__container', {
            slidesPerView: 4,
            effect: 'slide',
            spaceBetween: 20,
            loop: true,
            watchOverflow: true,
            // If we need pagination
            pagination: {
                el: '.brecom__pag .pag',
                clickable: true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.brecom__next',
                prevEl: '.brecom__prev',
            },
            breakpoints: {
                // when window width is <= 768px
                768: {
                    spaceBetween: 0,
                    slidesPerView: 2,
                },
                // when window width is <= 1200px
                1200: {
                    slidesPerView: 3,
                },
            },
            on: {
                init: function () {
                    initParams(this, brecom);
                },
            }
        });
    }

});