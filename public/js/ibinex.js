var ibinex = (function(options) {

    "use strict";

    return {

        options: options || {},

        scroll_pos: function(element, callback) {
            var hT = $(element).offset().top,
                hH = $(element).outerHeight(),
                wH = $(window).height(),
                wS = $(window).scrollTop();
            console.log(wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH), element);
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
            if($(window).width() > mobile_width) {
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
            if($(window).width() > mobile_width) {
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