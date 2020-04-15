//index.js
$(function () {

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

    //Добавить в сравнение
    $('body').on('click', '.jsCompare', function (e) {
        e.preventDefault();
        let $this = $(this),
            data = {
                action: 'jsCompare',
                id: 1
            },
            url = 'ajax.php';

        // debugger;

        $.ajax({
            dataType: "json",
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result.status) {
                    $this.toggleClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    //Добавить в избранное
    $('body').on('click', '.jsFavorite', function (e) {
        e.preventDefault();
        let $this = $(this),
            data = {
                action: 'jsFavorite',
                id: 1
            },
            url = 'ajax.php';

        // debugger;

        $.ajax({
            dataType: "json",
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result.status) {
                    $this.toggleClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    //Добавить в избранное
    $('body').on('click', '.jsAdd', function (e) {
        let $this = $(this),
            data = {
                action: 'jsAdd',
                id: 1
            },
            url = 'ajax.php';

        if (!$this.hasClass('add_in')) {
            e.preventDefault();

            $.ajax({
                dataType: "json",
                type: "POST",
                url: url,
                data: data,
                success: function (result) {
                    if (result.status) {
                        $this.addClass('add_in');
                    } else {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                },
                error: function (result) {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            });

        }

    });



});

//popup.js
$(function () {
    // VARIABLES
    const popup = $('.popup'),
        btns = popup.find('.popup__btn'),
        tab = popup.find('.popup__tab');

    // EVENTS
    //Анимация плейсхолдера input формы
    $('body').on('focusin', '.popup__input', function (e) {
        let placeholder = getPlaceholder(this);
        placeholder.addClass('active');
    });
    $('body').on('focusout', '.popup__input', function (e) {
        let $this = $(this),
            type = $this.attr('type'),
            value = $this.val(),
            placeholder = getPlaceholder(this);

        if (type == 'tel') {
            if (!validateTel(value)) {
                $this.val('');
                placeholder.removeClass('active');
            }
        } else {
            if (!this.value) {
                placeholder.removeClass('active');
            }
        }
    });


    //Вызов формы "Корзина"
    $('.jsCartForm').on('click', function (e) {
        e.preventDefault();

        let btn = btns.filter('[data-action=cart]'),
            action = btn.data('action'),
            url = btn.data('ajax'),
            data = {
                action: action
            };

        if (btn.hasClass('active')) {
            deactivatePopup();
            return;
        }

        activatePopup(btn, 'loader_white');

        $.ajax({
            dataType: "json",
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result.status) {
                    tab.html(result.html);
                    deactivateLoader();
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    //Вызов формы "Избранное"
    $('.jsFavoriteForm').on('click', function (e) {
        e.preventDefault();

        let btn = btns.filter('[data-action=favorite]'),
            action = btn.data('action'),
            url = btn.data('ajax'),
            data = {
                action: action
            };

        if (btn.hasClass('active')) {
            deactivatePopup();
            return;
        }

        activatePopup(btn, 'loader_white');

        $.ajax({
            dataType: "json",
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result.status) {
                    tab.html(result.html);
                    deactivateLoader();
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });


    //Вызов формы "Заказать звонок"
    $('.jsCall').on('click', function (e) {
        e.preventDefault();

        let btn = btns.filter('[data-action=callback]'),
            action = btn.data('action'),
            url = btn.data('ajax'),
            data = {
                action: action
            };

        if (btn.hasClass('active')) {
            deactivatePopup();
            return;
        }

        activatePopup(btn, 'loader_white');

        sendAjax(url, data);

    });

    //Вызов формы "Задать вопрос"
    $('.jsQuestion').on('click', function (e) {
        e.preventDefault();

        let btn = btns.filter('[data-action=question]'),
            action = btn.data('action'),
            url = btn.data('ajax'),
            data = {
                action: action
            };

        if (btn.hasClass('active')) {
            deactivatePopup();
            return;
        }

        activatePopup(btn, 'loader_white');

        sendAjax(url, data);

    });

    //Вызов формы "Оставить отзыв"
    $('.jsReview').on('click', function (e) {
        e.preventDefault();

        let btn = btns.filter('[data-action=review]'),
            action = btn.data('action'),
            url = btn.data('ajax'),
            data = {
                action: action
            };

        if (btn.hasClass('active')) {
            deactivatePopup();
            return;
        }

        activatePopup(btn, 'loader_white');

        $.ajax({
            dataType: "json",
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result.status) {
                    tab.html(result.html);
                    deactivateLoader();

                    let form = tab.find('.popup__form');
                    $('input[type=tel]').mask('+7 (999) 999-99-99');

                    form.validate({
                        onfocusout: false,
                        submitHandler: function (form) {
                            activateLoader('loader_white');
                            let $form = $(form),
                                data =new FormData(),
                                url = $form.attr('action'),
                                file = form.querySelector('.file__input'),
                                inputs = $form.find('input[type!=file],textarea');


                            if (file.files.length>0) {
                                data.append('file', file.files[0]);
                            }
                            inputs.each(function (x,i) {
                                data.append(i.name, i.value);
                            });

                            $.ajax({
                                dataType: "json",
                                type: "POST",
                                url: url,
                                data: data,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function (result) {
                                    if (result.status) {
                                        tab.html(result.html);
                                        deactivateLoader();
                                    } else {
                                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                                    }
                                },
                                error: function (result) {
                                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                                }
                            });
                        },
                    });

                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    //Вызов формы "Оставить отзыв на товар"
    $('.jsReviewProduct').on('click', function (e) {
        e.preventDefault();

        let btn = btns.filter('[data-action=review]'),
            action = 'reviewProduct',
            url = btn.data('ajax'),
            data = {
                action: action
            };


        activatePopup(false, 'loader_white');

        $.ajax({
            dataType: "json",
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result.status) {
                    tab.html(result.html);
                    deactivateLoader();

                    let form = tab.find('.popup__form');
                    $('input[type=tel]').mask('+7 (999) 999-99-99');

                    form.validate({
                        onfocusout: false,
                        submitHandler: function (form) {
                            activateLoader('loader_white');
                            let $form = $(form),
                                data =new FormData(),
                                url = $form.attr('action'),
                                file = form.querySelector('.file__input'),
                                inputs = $form.find('input[type!=file],textarea');


                            if (file.files.length>0) {
                                data.append('file', file.files[0]);
                            }
                            inputs.each(function (x,i) {
                                data.append(i.name, i.value);
                            });

                            $.ajax({
                                dataType: "json",
                                type: "POST",
                                url: url,
                                data: data,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function (result) {
                                    if (result.status) {
                                        tab.html(result.html);
                                        deactivateLoader();
                                    } else {
                                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                                    }
                                },
                                error: function (result) {
                                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                                }
                            });
                        },
                    });

                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });


    //Изменение выбора файла
    $('.popup').on('change', '.file__input', function (e) {
        let input = $(this),
            val = input.val(),
            item = input.closest('.file'),
            text = item.find('.file__title'),
            file = val.replace(/\\/g, '/').split('/').pop();

        if (val) {
            text.text(file);
            item.addClass('active');
        } else {
            text.text('Прикрепить');
            item.removeClass('active');
        }

    });

    //Удаление файла
    $('.popup').on('click', '.file__del', function (e) {
        e.preventDefault();
        let btn = $(this),
            item = btn.closest('.file'),
            text = item.find('.file__title'),
            input = item.find('.file__input');

        input.val('');
        text.text('Прикрепить');
        item.removeClass('active');
    });

    $('.popup').on('mouseover', '.rating2__star', function () {
        let star = $(this),
            rate = star.data('rate');

        setRatingText(rate);
    });

    $('.popup').on('mouseout', '.rating2__star', function () {
        let checked = $('.rating2__input:checked');
        if (checked.length == 0) {
            setRatingText('Без оценки');
        } else {
            setRatingText(checked.val());
        }
    });

    //Закрытие форм
    $('body').on('click', function (e) {
        let target = $(e.target);

        if (target.hasClass('popup active') || target.closest('.jsFormClose').length > 0) {
            deactivatePopup();
        }
    });

    //Смена количества
    $('body').on('click', '.count__minus', function (e) {
        e.preventDefault();
        let btn = $(this),
            count = btn.closest('.count'),
            input = count.find('.count__input')[0];
        input.stepDown();

    });

    $('body').on('click', '.count__plus', function (e) {
        e.preventDefault();
        let btn = $(this),
            count = btn.closest('.count'),
            input = count.find('.count__input')[0];
        input.stepUp();

    });


    // FUNCTIONS
    function getPlaceholder(i) {
        let input = $(i),
            field = input.closest('.popup__field'),
            placeholder = field.find('.popup__placeholder');

        return placeholder;
    }

    function activatePopup(btn, loaderClass) {
        popup.addClass('active');
        setOverflow();
        btns.removeClass('active');
        if (btn) {
            btn.addClass('active');
        }
        activateLoader(loaderClass);
        tab.html('');
    }

    function deactivatePopup() {
        popup.removeClass('active');
        removeOverflow();
        btns.removeClass('active');
        tab.html('');
    }

    function activateLoader(loaderClass = 'loader_default') {
        popup.find('.popup__tabs').append(getLoader(loaderClass));
    }

    function deactivateLoader() {
        popup.find('.loader').remove();
    }

    function getLoader(cls) {
        let template = $(tmpl.content),
            loader = template.find('.loader').clone().addClass(cls);
        return loader;
    }

    function sendAjax(url, data) {
        $.ajax({
            dataType: "json",
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result.status) {
                    tab.html(result.html);
                    deactivateLoader();

                    let form = tab.find('.popup__form');
                    $('input[type=tel]').mask('+7 (999) 999-99-99');

                    validateForm(form, tab)

                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

    function validateForm(form, tab) {
        form.validate({
            onfocusout: false,
            submitHandler: function (form) {
                activateLoader('loader_white');
                let $form = $(form),
                    data = $form.serialize(),
                    url = $form.attr('action');

                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: url,
                    data: data,
                    success: function (result) {
                        if (result.status) {
                            tab.html(result.html);
                            deactivateLoader();
                        } else {
                            alert('Что-то пошло не так, попробуйте еще раз!!!');
                        }
                    },
                    error: function (result) {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                });
            },
        });
    }

    function setRatingText(val) {
        $('.rating2__txt').text(val);
    }


    //VENDORS


});

//catalog.js
$(function () {

    // VARIABLES
    const rangeFrom = $('.range__input_from'),
        rangeTo = $('.range__input_to'),
        range = $('.range__slider'),
        rangeMin = range.data('min'),
        rangeMax = range.data('max');

    // EVENTS
    $('.aitem__link_arr').on('click', function (e) {
        e.preventDefault();
        let $this =  $(this),
            sub = $this.next();

        $this.toggleClass('active');
        sub.slideToggle(300);
    });

    //Раскрытие фильтров
    $('.filter__title').on('click', function (e) {
        e.preventDefault();

        let $this = $(this),
            filter = $this.closest('.filter'),
            content = filter.find('.filter__content');


        content.slideToggle(300);
        filter.toggleClass('active');
    });

    //ввод цифр в поля
    $('.range__input').on('keypress', function (e) {
        if (e.key.match(/[^0-9]/g) || (this.value == 0 && e.key == 0)) {
            e.preventDefault();
        }
    });

    //Изменение данных
    $('.range__input').on('input', function (e) {
        let $this = $(this),
            val = '',
            from = getNumber(rangeFrom.val()),
            to = getNumber(rangeTo.val());

        if ($this.hasClass('range__input_from')) {
            if (from < rangeMin) {
                from = rangeMin;
            } else if (from > to) {
                from = to;
            }
            val = from;
        } else {
            if (to > rangeMax) {
                to = rangeMax;
            } else if (to < from) {
                to = from;
            }
            val = to;
        }

        let valPretty = prettify(val);

        rangeSlider.update({
            from: from,
            to: to
        });

        $this.val(valPretty);
    });

    //Открытие фильтров
    $('.filters-btn').on('click', function (e) {
        e.preventDefault();

        openFilters();
    });

    //Сброс фильтров
    $('.filters__reset').on('click', function (e) {
        let btn = $(this),
            form = btn.closest('.filters');
        form.trigger('reset');
        rangeUpdate();
    });

    //Закрытие фильтров
    $('body').on('click', function (e) {
        let target = $(e.target);

        if (target.hasClass('filters active') || target.closest('.filters__close').length > 0) {
            closeFilters();
        }
    });

    // FUNCTIONS
    function rangeUpdate(){
        let from = getNumber(rangeFrom.val()),
            to = getNumber(rangeTo.val());

        rangeSlider.update({
            from: from,
            to: to
        });
    }

    // Функция отрытия фильтров
    function openFilters() {
        let filters = $('.filters');
        filters.addClass('active');
        setOverflow();
    }

    // Функция закрытия фильтров
    function closeFilters() {
        let  filters = $('.filters');
        filters.removeClass('active');
        removeOverflow();
    }


    //VENDORS
    $(".range__slider").ionRangeSlider({
        prettify_enabled: true,
        skin: 'round',
        hide_from_to: true,
        // hide_min_max: true,
        onChange: function (data) {
            rangeFrom.val(data.from_pretty);
            rangeTo.val(data.to_pretty);
        },
        onFinish: function (data) {
            //ToDo Здесь должень быть ajax на получение товаров
        },
    });
    let rangeSlider = $(".range__slider").data("ionRangeSlider");

});

//contacts.js
$(function () {

    // VARIABLES

    // EVENTS

    // FUNCTIONS

    //VENDORS

    // Валидация формы
    $('.ccall').validate({
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