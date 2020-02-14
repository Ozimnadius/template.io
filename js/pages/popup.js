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
        btn.addClass('active');
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