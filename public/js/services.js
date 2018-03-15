$(document).ready(function() {
    $(".inner-nav-item").click(function() {
        $(".inner-nav-item").removeClass("active");
        $(this).addClass("active");
    });

    $(".inner-nav-link").on('click', function(event) {
        console.log(this.hash);
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

