var mobile_width = 576;
var mobile_animation = true;
var ibinex = (function(options) {

    "use strict";

    return {

        options: options || {},

        scroll_pos: function(element, callback) {
            var hT = $(element).offset().top,
                hH = $(element).outerHeight(),
                wH = $(window).height(),
                wS = $(window).scrollTop();
            if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH))
                callback(true);
        },
        scroll: function(element, callback) {
            // $('body,html').bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove', function () {
            $(window).scroll(function(){
                ibinex.scroll_pos(element,function(v){
                    if( v && !$(element).hasClass('animated'))
                        callback(true);
                });
            });
        },
        animate: function(element, effect, delay) {
            if((!mobile_animation && $(window).width() > mobile_width) || mobile_animation) {
                if(!$(element).hasClass('animated')) {
                    $(element).css('visibility', 'hidden');
                    delay = delay ? delay : false;

                    window.addEventListener('load', function () {
                        ibinex.scroll_pos(element, function (v) {
                            if (v)
                                ibinex.go_animate(element, effect, delay);
                        });
                    });
                    ibinex.scroll(element, function (flag) {
                        if (flag)
                            ibinex.go_animate(element, effect, delay);
                    });
                }
            }
        },
        go_animate: function(element, effect, delay) {
            if((!mobile_animation && $(window).width() > mobile_width) || mobile_animation) {
                if (delay) {
                    setTimeout(function () {
                        $(element).css('visibility', 'visible');
                        $(element).addClass('animated ' + effect);
                    }, delay);
                } else {
                    $(element).css('visibility', 'visible');
                    $(element).addClass('animated ' + effect)
                }
            }
        }
    }


}());