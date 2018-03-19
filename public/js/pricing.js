$(document).ready(function() {
    function alignParagraphs(gotMaxHeight = false, maxHeight = 0) {
        var divSelector = '#pricing-content #what-you-receive > div > div';
        var divCount = $(divSelector).length;

        for (var i = 1; i <= divCount; i++) {
            var parSelector = divSelector + ':nth-of-type(' + i + ') > p';
            var parCount = $(parSelector).length;

            for (var j = 1; j <= parCount; j++) {
                var parHeight = $(parSelector + ':nth-of-type(' + j + ')').height();

                if (gotMaxHeight === false) {
                    if (parHeight > maxHeight) {
                        maxHeight = parHeight;
                    }
                } else {
                    if (parHeight < maxHeight) {
                        var paddingBottom = maxHeight - parHeight;
                        $(parSelector + ':nth-of-type(' + j + ')').css('padding-bottom', paddingBottom + 'px');
                    }
                }
            }
        }

        if (gotMaxHeight === false) {
            alignParagraphs(true, maxHeight);
        }
    }

    if ($(window).width() >= 768) {
        alignParagraphs();
    }

    window.sr = ScrollReveal({
        distance: '0',
        duration: 800,
        delay: 200,
        easing: 'ease-in-out',
        mobile: false
    });

    sr.reveal('#pricing-content h2', {
        scale: 0
    });

    sr.reveal('#pricing-content article > h5', {
        origin: 'left',
        distance: '30px'
    });

    sr.reveal('#pricing-content article p', {
        origin: 'bottom',
        distance: '30px'
    });

    sr.reveal('#pricing-content > hr', {
        scale: 0
    });

});
