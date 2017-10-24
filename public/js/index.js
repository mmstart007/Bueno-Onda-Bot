$(document).ready(function(){
    var vid = document.getElementById("intro");
    var iframes = $('iframe');
    var isChatFirstLoad = true;

    vid.onended = function(){
        $("#video_play").show();
        vid.load();
    }
    iframes.each(function() {
        var src = $(this).attr('src');
        $(this).data('src', src).attr('src', '');
    });
    $('#chat').click(function(){
        $('.chatscreen').css('left', 0);
        $('.chatscreen').css('right', 0);
        if (isChatFirstLoad) {
            iframes.attr('src', function() {
                return $(this).data('src');
            });
            isChatFirstLoad = false;
        }
    });
    $('#back').click(function(){
        $('.chatscreen').css('left', '100%');
        $('.chatscreen').css('right', '-100%');
    });
    $('#video_play').click(function(){
        $("#video_play").hide();
        vid.play();
    });
    $('#article_1').click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 0, true);
    });
    $('#article_2').click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 1, true);
    });
    $('#article_3').click(function(){
        $('.parent_slick').slick('slickNext');
        $('.article_slick').slick('slickGoTo', 2, true);
    });
    $('.parent_slick').slick({
        infinite: false
    });
    $('.gallery_slick').slick({
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand'
    });
    $('.article_slick').slick({
        vertical: true,
        verticalSwiping: true,
        lazyLoad: 'ondemand'
    });
    $('.parent_slick').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        if (currentSlide == 0) {
            vid.pause();
            $("#video_play").show();
        }
    })
    setPhotoHeight();
});

$(window).resize(function() {
    setPhotoHeight();
});

function setPhotoHeight () {
    windowHeight = $(window).innerHeight();
    $('.gallery_photo').css('height', windowHeight);
    $('.article_page_image').css('height', windowHeight);
}