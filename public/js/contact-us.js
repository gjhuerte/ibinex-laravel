var contact = {
    func: $.extend({}, ibinex),

    init_circle: function() {
        $circle = $('.ib-circle');
        $circle.css('visibility','hidden');
        $('.row.ib-get-started-b img, .row.ib-get-started-b div.label').css('visibility','hidden');
        if(!$circle.hasClass('animated')) {
            $($circle).css('visibility', 'hidden');
            ibinex.scroll(".ib-get-started .ib-get-started-b", function (flag) {
                console.log(flag);
                if (flag)
                    contact.circle();
            });
            window.addEventListener('load', function () {
                ibinex.scroll_pos(".ib-get-started .ib-get-started-b", function (v) {
                    if (v)
                        contact.circle();
                });
            });
        }
    },
    circle: function() {
        $circle = $('.ib-circle');
        $circle.each(function(k,v){
            var $this = $(this);
            var img = $this.parent().parent().find('img');
            var label = $this.parent().parent().find('.label');
            if(!$this.hasClass('animated') && !img.hasClass('animated') && !label.hasClass('animated')) {
                setTimeout(function () {
                    $this.css('visibility', 'visible');
                    $this.addClass('circle-animation-target');
                    ibinex.go_animate($this.parent().parent().find('img'), "flipInY", 250);
                    ibinex.go_animate($this.parent().parent().find('.label'), "flipInY", 250);
                }, k * 500);
            }
        });
    }
};


$(document).ready(function(){

    if($(window).width() > mobile_width) {
        contact.init_circle();
        // ibinex.animate(".ib-get-started .row.ib-get-started-a h2, .ib-get-started .row.ib-get-started-a p", "fadeInUp");
        // ibinex.animate(".ib-get-started .ib-note", "fadeInUp");
        ibinex.animate(".ib-contact .ib-contact-form input, .ib-contact .ib-contact-form textarea", "zoomIn");
    }
    window.sr = ScrollReveal();

    sr.reveal('.ib-get-started .row.ib-get-started-a h2', {
        duration: 1000,
        viewFactor: 0.5,
        distance: '100px',
        delay: 100,
        mobile: false
    }, 450);
    sr.reveal('.ib-get-started .row.ib-get-started-a p', {
        duration: 1000,
        viewFactor: 0.5,
        distance: '100px',
        delay: 100,
        mobile: false
    }, 450);
    sr.reveal('.ib-get-started .ib-note', {
        duration: 2000,
        viewFactor: 0.5,
        distance: '100px',
        delay: 100,
        mobile: false
    }, 450);

});