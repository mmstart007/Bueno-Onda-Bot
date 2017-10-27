$(document).ready(function(){
    var vid = document.getElementById("intro");
    var isChatFirstLoad = true;

    vid.onended = function(){
        $("#video_play").show();
        vid.load();
    }
    var chat_iframe = $("#chatbox_iframe");
    var src = 'https://chat-interface.herokuapp.com/?theme=bridgestone&channelID=76a21dc9-256e-4bc7-a911-1906360178df&text=start_contobox_new&theme_ext=' + document.location.origin + '/public/css/chatbox.css'
    chat_iframe.data('src', src).attr('src', '');
    $('#chat').click(function(){
        $('.chatscreen').css('left', 0);
        $('.chatscreen').css('right', 0);
        if (isChatFirstLoad) {
            chat_iframe.attr('src', function() {
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