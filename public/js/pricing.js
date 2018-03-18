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
    }
});
