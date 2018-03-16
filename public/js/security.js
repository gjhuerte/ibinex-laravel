
// && $("#hero-content p").css("visibility")


// var color = $('.box').css('background-color');
// var color = $("#hero-content p").css("visibility");
// if (color == 'rgb(0, 0, 255)' || color == 'blue') // =='blue' <- IE hack
//     alert("it's blue!\nColor detected: " + color);

if (document.documentElement.clientWidth > 1023) {
    // setTimeout(function() {
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
    // }, 1500);
}
