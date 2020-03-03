//index.js
$(function () {

    // VARIABLES

    // EVENTS

    // FUNCTIONS

    //VENDORS
    const ibanner = document.querySelector('.ibanner__slider');
    if (ibanner) {
        let ibannerSlider = new Swiper('.ibanner__container', {
            slidesPerView: 1,
            effect: 'slide',
            loop: true,
            watchOverflow: true,
            // Navigation arrows
            navigation: {
                nextEl: '.ibanner__next-btn',
                prevEl: '.ibanner__prev-btn',
            },
            // If we need pagination
            pagination: {
                el: '.ibanner__pag',
                clickable: true
            },

            on: {
                init: function () {
                    initParams(this, ibanner);
                },
            },
        });
    }

    const iprojects = document.querySelector('.iprojects__slider');
    if (iprojects) {
        let iprojectsSlider = new Swiper('.iprojects__container', {
            slidesPerView: 'auto',
            effect: 'slide',
            spaceBetween: 20,
            loop: true,
            // If we need pagination
            pagination: {
                el: '.iprojects__pag .pag',
                clickable: true
            },
            breakpoints: {
                // when window width is <= 768px
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
            },
            on: {
                init: function () {
                    initParams(this, iprojects);
                },

            }
        });
    }

    const irecom = $('.irecom__slider');
    if (irecom.length > 0) {
        let irecomSliders = {};

        irecom.each(function (x, i) {
            let slider = i;

            irecomSliders['iprojectsSlider' + x] = new Swiper('.irecom__container-' + x, {
                slidesPerView: 4,
                effect: 'slide',
                spaceBetween: -1,
                loop: true,
                watchOverflow: true,
                // Navigation arrows
                navigation: {
                    nextEl: '.irecom__next-' + x,
                    prevEl: '.irecom__prev-' + x,
                },
                // If we need pagination
                pagination: {
                    el: '.irecom__pag-' + x + ' .pag',
                    clickable: true
                },
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 2,
                    },
                    // when window width is <= 1200px
                    1200: {
                        slidesPerView: 3,
                    },
                },
                on: {
                    init: function () {
                        initParams(this, slider);
                    },
                }
            });

        });


    }

    const iactions = document.querySelector('.iactions__slider');
    if (iactions) {
        let iactionsSlider = new Swiper('.iactions__container', {
            slidesPerView: 4,
            effect: 'slide',
            spaceBetween: 20,
            loop: true,
            watchOverflow: true,
            // If we need pagination
            pagination: {
                el: '.iactions__pag .pag',
                clickable: true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.iactions__next',
                prevEl: '.iactions__prev',
            },
            breakpoints: {
                // when window width is <= 768px
                768: {
                    spaceBetween: 10,
                    slidesPerView: 1,
                },
                // when window width is <= 800px
                850: {
                    spaceBetween: 70,
                    slidesPerView: 2,
                },
                // when window width is <= 1200px
                1200: {
                    slidesPerView: 3,
                },
            },
            on: {
                init: function () {
                    initParams(this, iactions);
                },
            }
        });
    }

    const irevs = document.querySelector('.irevs__slider');
    if (irevs) {
        let iprojectsSlider = new Swiper('.irevs__container', {
            slidesPerView: 3,
            effect: 'slide',
            spaceBetween: 20,
            loop: true,
            watchOverflow: true,
            // If we need pagination
            pagination: {
                el: '.irevs__pag .pag',
                clickable: true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.irevs__next',
                prevEl: '.irevs__prev',
            },
            breakpoints: {
                // when window width is <= 769px
                769: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                // when window width is <= 850px
                850: {
                    slidesPerView: 2,
                },
            },
            on: {
                init: function () {
                    initParams(this, irevs);
                },
            }
        });
    }

    const ibrands = document.querySelector('.ibrands__slider');
    if (ibrands) {
        let iprojectsSlider = new Swiper('.ibrands__container', {
            slidesPerView: 5,
            effect: 'slide',
            spaceBetween: 20,
            loop: true,
            watchOverflow: true,
            // If we need pagination
            pagination: {
                el: '.ibrands__pag .pag',
                clickable: true
            },
            // Navigation arrows
            navigation: {
                nextEl: '.ibrands__next',
                prevEl: '.ibrands__prev',
            },
            breakpoints: {
                // when window width is <= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                // when window width is <= 850px
                850: {
                    slidesPerView: 3,
                },
                // when window width is <= 1200px
                1200: {
                    slidesPerView: 4,
                },
            },
            on: {
                init: function () {
                    initParams(this, ibrands);
                },
            }
        });
    }

    $('input[type=tel]').mask('+7 (999) 999-99-99');

    // Валидация формы в подвале
    $('.ffeed').validate({
        onfocusout: false,
        submitHandler: function (form) {
            alert('submit');
        },
        invalidHandler: function (event, validator) {
            // debugger;
        },
        errorPlacement: function (error, element) {
            element[0].placeholder = error[0].innerText;
            // debugger;
        }
    });

});