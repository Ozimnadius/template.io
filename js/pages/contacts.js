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

/*YANDEX*/
$(function () {
    ymaps.ready(init);
    var myMap,
        myPlacemark,
        myPin;

    function init() {

        var map = document.querySelector('#map'),
            data = map.dataset;

        if (map) {
            var center = data.center;

            myMap = new ymaps.Map("map", {
                center: [data.centerX,data.centerY],
                zoom: data.zoom,
                // controls: ['zoomControl','searchControl',]
            });


            myMap.behaviors.disable(['scrollZoom']);
            // myMap.controls.remove('geolocationControl')
            //     .remove('searchControl')
            //     .remove('trafficControl')
            //     .remove('typeSelector')
            //     .remove('fullscreenControl')
            //     .remove('zoomControl')
            //     .remove('rulerControl');
            // myMap.controls.add('zoomControl');

            myPin = new ymaps.GeoObjectCollection({}, {
                // iconLayout: 'default#image',
                // iconImageHref: '/img/icons/map-marker.svg',
                // iconImageSize: [46, 57],
                // iconImageOffset: [-15, -55]
            });


            myPlacemark = new ymaps.Placemark([data.baloonX,data.baloonY], {
                    balloonContentHeader: data.baloonHeader,
                    balloonContentBody: data.baloonBody,
                    balloonContentFooter: data.baloonFooter,
                    hintContent: data.baloonContent
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: data.icon,
                    iconImageSize: [data.iconSizeX,data.iconSizeY],
                    iconImageOffset: [data.iconOffsetX,data.iconOffsetY]
                    // preset: 'islands#redGlyphIcon'
                });



            myPin.add(myPlacemark);
            myMap.geoObjects.add(myPin);
        }
    }
});
/*END YANDEX*/