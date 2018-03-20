var mobile_width = 576;
var mobile_animation = false;
var ibinex = (function(options) {

    "use strict";

    return {

        options: options || {},

        scroll_pos: function(element, callback) {
            var hT = $(element).offset().top,
                hH = $(element).outerHeight(),
                wH = $(window).height(),
                wS = $(window).scrollTop();
                callback(wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH));
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
                                ibinex.go_animate(element, effect, delay ? delay : 800);
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
        },
        reveal_btn_top: function() {
            $(window).scroll(function(){
                if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300)
                    $('.back-to-top').removeClass('hidden').addClass('reveal');
                else
                    $('.back-to-top').removeClass('reveal').addClass('hidden');
            });
        },
        go_top: function() {
            $("html").animate({ scrollTop: 0 }, "slow");
        },
        hero_shinker: function() {
            var hero = $('#fullscreen-hero'),
                heroHeight = $('#fullscreen-hero').outerHeight(true);

            var navbar = $('#fullscreen-hero .navbar');

            var navbarHeight = $(navbar).outerHeight();

            $(hero).css('min-height', navbarHeight);

            $(hero).parent().css('margin-top', heroHeight);

            $(window).scroll(function() {

                var scrollOffset = $(window).scrollTop();

                $(hero).css('height', (heroHeight - scrollOffset));

                if (scrollOffset > (heroHeight - navbarHeight)) {

                    $('#hero-content').css( "opacity", 0);

                    $(navbar).css({"margin-top":"7.5px", "padding": "10px 0"});

                }

                else {

                    $('#hero-content').css( "opacity", 1);

                    $(navbar).css({"margin-top":"25px", "padding": "30px 0 0"});

                }

            });
        },
        smooth_scroll: function() {
            $("a[href*='#']")
                .not("[href='#']")
                .not("[href='#0']")
                .on("click", function (event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior

                        if (location.pathname != this.pathname) {
                            return;
                        }
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
        }
    }


}());

$(document).ready(function() { 
    ibinex.smooth_scroll();
    // ibinex.hero_shinker();

});