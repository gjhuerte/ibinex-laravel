
// document.querySelector('#hero-content p').style.visibility == 'visible';

if (document.documentElement.clientWidth > 1023) {
        window.sr = ScrollReveal({reset: false,delay: 1000,useDelay: 'always',});

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
