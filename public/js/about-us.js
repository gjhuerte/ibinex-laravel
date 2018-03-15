
$(document).ready(function(){

    function resetCarouselControlPosition(){
        var height = $(".active:first-child").height();
        height /= 4;

        console.log(height);
        $(".carousel-control-prev").css("bottom", height);
        $(".carousel-control-next").css("bottom", height);
    }
    resetCarouselControlPosition();

    $(window).resize(resetCarouselControlPosition);

});