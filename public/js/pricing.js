$(document).ready(function() {
    if(document.documentElement.clientWidth >= 768) {
        window.sr = ScrollReveal({
            //origin: 'left',
            distance: '0',
            scale: 1,
            mobile: false,
            viewFactor: 0.5
        });

        sr.reveal('#pricing-content article > h5', {
            // distance: '10px',
            duration: 250,
            delay: 250
        });

        sr.reveal('#pricing-content article p', {
            // distance: '5px',
            duration: 500,
            delay: 250
        });

        sr.reveal('#pricing-content > hr', {
            // distance: '5px',
            scale: 0,
            duration: 3000,
            delay: 250
        });

        var firstSet = $('#pricing-content #what-you-receive .first-set');
        var secondSet = $('#pricing-content #what-you-receive .second-set');
        var count = $(secondSet + ' > p').length;

        for(var i = 1; i <= count; i++) {
            if($(firstSet + ' > p:nth-of-type(' + i + ')').css('margin-bottom') <
                $(secondSet + ' > p:nth-of-type(' + i + ')').css('margin-bottom')) {
                $(firstSet + ' > p:nth-of-type(' + i + ')').css('margin-bottom', $(secondSet + ' > p:nth-of-type(' + i + ')').css('margin-bottom'));
            }
        }
    }
});
