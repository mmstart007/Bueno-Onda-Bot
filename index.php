<!DOCTYPE html>
<html>
    <head>
        <title>Bueno Onda</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="public/vendor/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="public/vendor/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
    </head>
    <body>
        <div class="chatscreen">
            <img id="back" class="back_button" src="public/img/back.png">
            <iframe class="chatbox" src="https://chat-interface.herokuapp.com/?theme=bridgestone&channelID=76a21dc9-256e-4bc7-a911-1906360178df&text=start_contobox_new&theme_ext=https://cbmedia3.s3.amazonaws.com/cbox_themes_v3/bridgestone_chatbot_q2_2017/styles/expansion/com-htmlbox-mobile.css">
            </iframe>
        </div>
        <div class="topbar" align="center">
            <div class="left_panel" align="center">
                <img class="logo" src="public/img/logo.png">
            </div>
            <div class="center_panel" align="center">
                <a class="learn_more">
                    Learn more
                </a>
            </div>
            <div class="right_panel" align="center">
                <img id="chat" class="chat_button" src="public/img/chat.png">
                <img id="heart" class="heart_button" src="public/img/heart.png">
                <img id="share" class="share_button" src="public/img/share.png">
            </div>
        </div>
        <div class="parent_slick">
            <div class="video_view">
                <div class="video_view_content">
                    <div id="video_play" class="play-icon" role="button" tabindex="0">
                    </div>
                    <video id="intro" class="intro_video" poster="public/img/video_poster.jpg" playsinline>
                        <source src="public/vids/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="gallery_view">
                <div class="gallery_view_content">
                    <div class="gallery_slick">
                        <div class="photo_view">
                            <div class="photo_view_content">
                                <img class="gallery_photo" data-lazy="public/img/gallery_photo-1.jpg">
                            </div>
                        </div>
                        <div class="photo_view">
                            <div class="photo_view_content">
                                <img class="gallery_photo" data-lazy="public/img/gallery_photo-2.jpg">
                            </div>
                        </div>
                        <div class="photo_view">
                            <div class="photo_view_content">
                                <img class="gallery_photo" data-lazy="public/img/gallery_photo-3.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="articles_view">
                <div class="articles_view_content">
                    <div id="article_1" class="article_item">
                        <img class="article_item_image" src="public/img/article_photo-1.jpg">
                        <div class="article_item_overlay">
                            <p class="article_item_title">
                                Caribbean dreams in Grand Cayman
                            </p>
                            <p class="article_item_subtitle">
                                Where life come to dream.
                            </p>
                        </div>
                    </div>
                    <div id="article_2" class="article_item">
                        <img class="article_item_image" src="public/img/article_photo-2.jpg">
                        <div class="article_item_overlay">
                            <p class="article_item_title">
                                Caribbean dreams in Costa Rica
                            </p>
                            <p class="article_item_subtitle">
                                Your vacation. Your way.
                            </p>
                        </div>
                    </div>
                    <div id="article_3" class="article_item">
                        <img class="article_item_image" src="public/img/article_photo-3.jpg">
                        <div class="article_item_overlay">
                            <p class="article_item_title">
                                Caribbean dreams in St. Martin
                            </p>
                            <p class="article_item_subtitle">
                                A stroll. A beach. Another perfect day.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article_view">
                <div class="article_view_content">
                    <div class="article_slick">
                        <div class="article_page_view">
                            <div class="article_page_view_content">
                                <img class="article_page_image" data-lazy="public/img/article_photo-1.jpg">
                                <div class="detail">
                                    <p class="detail_title">
                                        Caribbean dreams in Grand Cayman
                                    </p>
                                    <p class="detail_subtitle">
                                        Where life come to dream
                                    </p>
                                    <p class="detail_description">
                                        Total relaxtions. Exhilarating adventure. Freedom just to be, in a place where being rewards all the senses. From unspoiled natural beauty to unparalled luxury. Grans Cayman dazzles at every turn.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="article_page_view">
                            <div class="article_page_view_content">
                                <img class="article_page_image" data-lazy="public/img/article_photo-2.jpg">
                                <div class="detail">
                                    <p class="detail_title">
                                        Caribbean dreams in Costa Rica
                                    </p>
                                    <p class="detail_subtitle">
                                        Your vacation. Your way.
                                    </p>
                                    <p class="detail_description">
                                        A delightful mix of Old World charm, history and culture are the perfect complement to Costa Rica's natural beauty. San Jose welcomes you to Costa Rica.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="article_page_view">
                            <div class="article_page_view_content">
                                <img class="article_page_image" data-lazy="public/img/article_photo-3.jpg">
                                <div class="detail">
                                    <p class="detail_title">
                                        Caribbean dreams in St. Martin
                                    </p>
                                    <p class="detail_subtitle">
                                        A stroll. A beach. Another perfect day.
                                    </p>
                                    <p class="detail_description">
                                        Part French, part Dutch, and all paradise. A gateway with a true international flavour - in an idyllic Caribbean setting where each moment defines its own unique perfection.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="public/vendor/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="public/vendor/slick/slick.min.js"></script>
        <script type="text/javascript" src="public/js/index.js"></script>
    </body>
</html>
