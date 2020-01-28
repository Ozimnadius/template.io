//index.js
$(function () {

    const ibanner = document.querySelector('.ibanner__slider');

    if (ibanner) {
        let ibannerSlider = new Swiper('.ibanner__container', {
            slidesPerView: 1,
            effect: 'slide',
            loop: true,

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

                    let params = this.params,
                        data = ibanner.dataset,
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
                },
            },
        });
    }

    const iprojects = document.querySelector('.iprojects__slider');
    if (ibanner) {
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

                    let params = this.params,
                        data = iprojects.dataset,
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
                },

            }
        });
    }


});