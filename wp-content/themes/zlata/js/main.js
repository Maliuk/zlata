"use strict";

$(function () {

    $('.home section h2.title').each(function () {
        var $this = $(this);
        var html = $this.html();
        $this.html('<div>' + html + '</div>');
        $('> div', this).append('<span class="rhombus"></span>');
    });

    $('.lblog-photo').each(function () {
        var $this = $(this);
        var img = 'url(' + $('img', this).attr('src') + ')';
        $this.css('background-image', img);
        $('img', this).remove();
    });
    
    //$('#after-header .container').parallax3d();
    
    
    // Google Map
    initMap();
});



$.fn.parallax3d = function (options) {
    if (typeof TweenLite === 'undefined') {
        console.warn('TweenMax or Tweenlite library is requiered... https://greensock.com/tweenmax');
        return;
    }

    var op = $.extend({
        moveObj: document,
        degX: 45,
        degY: 45,
        rotate: true
    }, options);


    var pageX = 0;
    var pageY = 0;

    var $this = $(this);

    $(op.moveObj).on("mousemove", function (event) {
        var centerScreenY = $(window).innerHeight() / 2;
        var centerScreenX = $(window).innerWidth() / 2;
        pageX = event.pageX;
        pageY = event.pageY;

        TweenLite.to($this, 0.5, {rotationX: (centerScreenY - pageY) / 20, rotationY: (pageX - centerScreenX) / 70});

        $("#log").html("pageX: " + event.pageX + ", \
                        pageY: " + event.pageY + ", <br />\
                        pageCenterOffsetY: " + (centerScreenY - event.pageY) +
                "Screen center: " + centerScreenY);
    });

    return this;
};


function initMap() {
    getLocation('вулиця Бузника, 14, Миколаїв, Миколаївська область, Украина');

    var myLatLng = {lat: 46.9669752, lng: 31.96217999999999};

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 16
    });
    
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: ''
    });
}

var getLocation = function (address) {
    var geocoder = new google.maps.Geocoder();

    var latitude, longitude;
    var location;

    geocoder.geocode({'address': address}, function (results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            latitude = results[0].geometry.location.lat();
            longitude = results[0].geometry.location.lng();
            location = results[0].geometry.location;
            console.log(latitude, longitude);
        }
    });

    return location;
};