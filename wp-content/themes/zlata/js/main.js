"use strict";

$(function () {
    
    //$('#after-header .container').parallax3d();
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