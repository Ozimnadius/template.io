//index.js
$(function () {

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
                spaceBetween: 20,
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
                on: {
                    init: function () {
                        initParams(this, slider);
                    },
                }
            });

        });


    }

    const iactions = document.querySelector('.iactions__slider');
    if (iprojects) {
        let iprojectsSlider = new Swiper('.iactions__container', {
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
            on: {
                init: function () {
                    initParams(this, iprojects);
                },
            }
        });
    }

    const irevs = document.querySelector('.irevs__slider');
    if (iprojects) {
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
            on: {
                init: function () {
                    initParams(this, irevs);
                },
            }
        });
    }

    const ibrands = document.querySelector('.ibrands__slider');
    if (iprojects) {
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
            on: {
                init: function () {
                    initParams(this, ibrands);
                },
            }
        });
    }


    function initParams(item, slider) {

        let params = item.params,
            data = slider.dataset,
            speed = parseInt(data.speed) || 300,
            autoplay = (data.autoplay == 'true'),
            delay = parseInt(data.autoplayDelay) || 5000,
            pagination = (data.pagination == 'true');

        params.speed = speed;

        if (autoplay) {
            params.autoplay.enabled = autoplay;
            params.autoplay.delay = delay;
        }


        if (!pagination) {
            params.pagination = {};
        }
    }

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

        if (scrollTop> height){
            headerFixed.addClass('active');
        } else {
            headerFixed.removeClass('active');
        }

    });

});