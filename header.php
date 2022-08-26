<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-2.css" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scipt.js"></script>

        <?php wp_head(); ?>
    </head>

<body>
    <!-- Header -->
    <header>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" id="main_img" /></a>
        <!-- jQuery -->
        <div class="nav-wrapper">
            <!-- ナビゲーション -->
            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="/category/products/">PRODUCTS</a></li>
                    <li class="nav-item"><a href="/about/">ABOUT</a></li>
                    <li class="nav-item"><a href="/company/">COMPANY</a></li>
                    <li class="nav-item"><a href="/">CONTACT</a></li>
                </ul>
            </nav>
        </div>

        <button class="burger-btn">
            <!-- ハンバーガーメニュー -->
            <span class="bar bar_top"></span>
            <!-- <span class="bar bar_mid"></span> -->
            <span class="bar bar_bottom"></span>
        </button>

    </header>
    <!-- header.php ここまで -->
