
if (document.documentElement.clientWidth > 1023) {
    window.sr = ScrollReveal({reset: false,viewFactor: 0.3,delay: 1000,useDelay: 'always',});


    // // title = Security
    // sr.reveal('#security_title', {
    //     origin: 'bottom',
    //     duration: 2000,
    //     distance: '100px',
    //     delay: 1200,
    //     useDelay: 'always'
    // }).delay(5000);

    sr.reveal('#subtitle_1', {
        origin: 'left',
        duration: 2000,
    });
    sr.reveal('#para_1 p', {
        origin: 'left',
        duration: 2000,
    });
    sr.reveal('#subtitle_2', {
        origin: 'right',
        duration: 3500,
    });
    sr.reveal('#para_2 p', {
        origin: 'right',
        duration: 3500,
    });
    sr.reveal('#infor-security h1', {
        origin: 'left',
        duration: 2000,
    });
    sr.reveal('#infor-security p', {
        origin: 'left',
        duration: 2000,
    });
    // image
    sr.reveal('.security-section', {
        duration: 2000,
    });
}






