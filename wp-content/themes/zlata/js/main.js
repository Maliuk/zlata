"use strict";

$(function () {

    (function () {
        $('menu').prepend('<li class="helper"></li>');
        var $helper = $('menu > li.helper');
        var $active = $('menu > li.active');

        $active.addClass('other-hov');
        $(window).load(function () {
            $('menu > li:not(.active)').hover(function () {
                $active.addClass('other-hov');
                var left = $(this).position().left;
                var width = $(this).outerWidth();
                $helper.css({
                    'left': left + 'px',
                    'width': width - 1 + 'px',
                    'opacity': '1'
                });
            }, mouseOut);
            mouseOut();
        });

        function mouseOut() {
            $active.removeClass('other-hov');
            $active = $('menu > li.active');
            if ($active.size() > 0) {
                var left = $active.position().left;
                var width = $active.outerWidth();
                $helper.css({
                    'left': left + 'px',
                    'width': width - 1 + 'px',
                    'opacity': '1'
                });
            }
            else {
                $helper.css({
                    'left': '50%',
                    'width': '0px',
                    'opacity': '0'
                });
            }
        }
    })();

    $(window).load(function () {
        setTimeout(function () {
            $('#preloader').addClass('preloader-hide');

            setTimeout(function () {
                $('#preloader').remove();
            }, 3000);
        }, 1);
    });


    $('.home section h2.title').each(function () {
        var $this = $(this);
        var html = $this.html();
        $this.html('<div>' + html + '</div>');
        $('> div', this).append('<span class="rhombus"></span>');
    });

    $('.lblog-photo, .img-wrap').each(function () {
        var $this = $(this);
        var img = 'url(' + $('img', this).attr('src') + ')';
        $this.css('background-image', img);
        $('img', this).remove();
    });


    (function () {
        $('.zl-collapse .zl-collapse-title').click(function (e) {
            e.preventDefault();

            var active = $(this).hasClass('active');

            $('.zl-collapse .zl-collapse-title.active').siblings(".zl-collapse-content").slideUp(300);
            $('.zl-collapse .zl-collapse-title').removeClass('active');
            if (active) {
                //$(this).removeClass('active');
                //$(this).siblings(".zl-collapse-content").slideUp(300);
                return;
            }
            $(this).addClass('active');
            $(this).siblings(".zl-collapse-content").slideDown(300);
        });
    })();

    //$('#after-header .container').parallax3d();


    // Google Map
    if ($('#map').size() > 0)
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


(function () {
    "use strict";

    var toggles = document.querySelectorAll(".c-hamburger");

    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    }
    ;

    function toggleHandler(toggle) {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
        });
    }

})();