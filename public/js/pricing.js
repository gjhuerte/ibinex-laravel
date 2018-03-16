$(document).ready(function() {
    // No animation strating from iPad to smaller devices

    if(document.documentElement.clientWidth > 768) {
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
