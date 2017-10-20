(function($) {
    "use strict";

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 60
    });

    new WOW().init();
    
    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - 60)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });
    
    $('#collapsingNavbar li a').click(function() {
        /* always close responsive nav after click */
        $('.navbar-toggler:visible').click();
    });

    $('#galleryModal').on('show.bs.modal', function (e) {
       $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
    });
    
    window.getURLParameter = function getURLParameter(param){
        var pageURL = window.location.search.substring(1);
        var urlVar = pageURL.split('&');
        for (var i = 0; i < urlVar.length; i++) {
            var paramName = urlVar[i].split('=');
            if (paramName[0] == param){
                return  paramName[1];
            }
        }
        return false;
    }

    window.addChannelUuidLink = function addChannelUuidLink(channelUuid){
        $("a.mode-link").each(function(){
            var href= $(this).attr("href").substring(1);
            href = "?channelUuid?"+channelUuid+"&"+href;
            $(this).attr("href", href);
        });
    }


})(jQuery);