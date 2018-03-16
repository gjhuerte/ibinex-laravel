
// scrollreveal is disabled on width=1023px below
if (document.documentElement.clientWidth > 1023) {
        window.sr = ScrollReveal({reset: false,delay: 600,duration: 2000,});

        sr.reveal('#subtitle_1', {
            origin: 'bottom',
            distance: '70px',
        });
        sr.reveal('#para_1 p', {
            origin: 'left',
        });
        sr.reveal('#subtitle_2', {
            origin: 'bottom',
            distance: '70px',
        });
        sr.reveal('#para_2 p', {
            origin: 'right',
        });
        sr.reveal('#infor-security h1', {
            origin: 'left',
        });
        sr.reveal('#infor-security p', {
            origin: 'left',
        });
        // image
        sr.reveal('.security-section', {
            origin: 'bottom',
            distance: '50px',
        });
}
