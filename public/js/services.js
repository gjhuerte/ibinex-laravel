$(document).ready(function() {
    $(window).scroll(function() {
        var navOffset = $("#inner-nav").offset().top;
        if($(document).scrollTop() >= navOffset){
            $("#inner-nav").addClass('shadow');
            $("#inner-nav").removeClass('pb-4');
        }
        else {
            $("#inner-nav").removeClass('shadow');
            $("#inner-nav").addClass('pb-4');
        }
    });

    $(".inner-nav-item a").click(function() {
        var scrollPos = $(document).scrollTop();
        var curr = $(this);
        var reff = $(curr.attr("href"));
        console.log(reff.position().top + " <= " + scrollPos + " && " + (reff.position().top+reff.height()) + " > " + scrollPos);
        // console.log(curr);
    });

    $(document).on("scroll", onScroll);

    $('a[href^="#"]').on('click', function(event) {
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');

            // Store hash
            var target = this.hash,
                menu = target;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        } // End if
    });

    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        // console.log(scrollPos);
        $('.inner-nav-item a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos+200 && refElement.position().top + refElement.height() > scrollPos) {
                $('#menu-center ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        });
    }


    window.sr = ScrollReveal();

    sr.reveal('.inner-platform', {
        duration: 2000,
        viewFactor: 0.5,
        distance: '100px',
    }, 450);

    sr.reveal('#platform-text-container', {
        distance: '300px',
    });

    sr.reveal('.second-section', {
        duration: 2000,
        viewFactor: 0.5,
        distance: '100px',
    }, 450);

    sr.reveal('#second-section-container', {
        distance: '300px',
    });

    sr.reveal('.third-section', {
        duration: 2000,
        viewFactor: 0.5,
        distance: '100px',
    }, 450);

    sr.reveal('.third-section-mobile', {
        duration: 2000,
        viewFactor: 0.5,
        distance: '100px',
    }, 450);

    sr.reveal('#third-section-container', {
        distance: '300px',
    });

    sr.reveal('.fourth-section', {
        duration: 2000,
        viewFactor: 0.5,
        distance: '100px',
    }, 450);

    sr.reveal('#fourthSection', {
        distance: '300px',
    });

    sr.reveal('.fifth-section', {
        duration: 2000,
        viewFactor: 0.5,
        distance: '100px',
    }, 450);

    sr.reveal('#fifthSection', {
        distance: '300px',
    });




});

