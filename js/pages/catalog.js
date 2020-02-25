//header.js
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