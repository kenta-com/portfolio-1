<!DOCTYPE html>
<html lang="ja">
<head
        prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/website#">
        <meta property="og:title" content="ポートフォリオ"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://yama-kenta.com/portofolio/"/>
        <meta property="og:image" content="https://yama-kenta.com/portofolio.png"/>
        <meta property="og:description" content="つくってみました"/>
        <meta property="og:site_name" content="ポートフォリオ"/>

        <!-- ※Twitter共通設定 -->
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@kenta_zzzaaa"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome -->
        <link
            href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
            rel="stylesheet">
        <!-- css -->
        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
        <title>Kenta Yamamoto</title>
        <?php wp_head();?>
    </head>
    <body>
        <!-- クリック時の背景 -->
        <div class="wave-burger-frame">
            <div class="wave-burger"></div>
        </div>
        <!-- 波エフェクト -->
        <div class="wave -one"></div>
        <div class="wave -two"></div>
        <div class="wave -three"></div>
        <header class="header">
            <a target="_blank" class="header__left" href="https://twitter.com/kenta_zzzaaa">
                <i class="fab fa-twitter"></i>
            </a>
            <div id="burger">
                <nav class="header-nav">
                    <ul class="header-items" id="navi">
                        <li class="header-item">
                            <a href="#" class="header-link">home</a>
                        </li>
                        <li class="header-item">
                            <a href="#service" class="header-link">service</a>
                        </li>
                        <li class="header-item">
                            <a href="#works" class="header-link">works</a>
                        </li>
                        <li class="header-item">
                            <a href="#about" class="header-link">about</a>
                        </li>
                        <li class="header-item">
                            <a href="#contact" class="header-link">contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="nav_btn" id="nav_btn">
                    <span class="hamburger_line hamburger_line1"></span>
                    <span class="hamburger_line hamburger_line2"></span>
                    <span class="hamburger_line hamburger_line3"></span>
                </div>
                <div class="nav_bg" id="nav_bg"></div>
                <!-- /ボタン部分ここを後で追加するだけ-->
            </div>
        </header>