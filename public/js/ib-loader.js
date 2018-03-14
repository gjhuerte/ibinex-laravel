var loading_screen = {
    init: function(logo) {
        var loader =
            "<div class=\"ib-loading-screen\">\n" +
            "    <div class=\"ib-loading-inner\">\n" +
            "        <div class=\"ib-loading-outer\">\n" +
            "            <div class=\"ib-loading-middle\">\n" +
            "                <h1 class=\"ib-loading-logo-header\">\n" +
            "                    <img class=\"ib-loading-logo\" src=\""+logo+"\" alt=\"ibinex-logo\" />\n" +
            "                </h1>\n" +
            "                <div class=\"ib-loading-html ib-loaded\">\n" +
            "                    <div class=\"sk-spinner sk-spinner-chasing-dots\">\n" +
            "                        <div class=\"sk-dot1\"></div>\n" +
            "                        <div class=\"sk-dot2\"></div>\n" +
            "                    </div>\n" +
            "                </div>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "</div>";
        $('body').addClass('ib-loading').append(loader);
    },
    finish: function() {
        $('.ib-loading-screen').fadeOut();
        $('body').removeClass('ib-loading');
    }
};

loading_screen.init('./img/logo.png');

window.addEventListener('load', function() {
    setTimeout(function(){
        loading_screen.finish();
    },500);
});