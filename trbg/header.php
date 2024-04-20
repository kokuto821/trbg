<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="content">
        <div class="content__grid">
            <header class="header">
                <div class="header__inner" id="header">
                    <h1 class="header__title header-title">
                        <a href="<?php echo esc_url(home_url()); ?>" target="_blank">
                            <img src="https://code-jump.com/demo/html/blog/img/logo.svg"
                                alt="<?php bloginfo('name'); ?>">
                        </a>
                    </h1>
                    <nav class="header__nav nav" id="js-nav">
                        <ul class="nav__items nav-items">
                            <li class="nav-items__item">
                                <a class="nav-items__item--a">メニュー1</a>
                            </li>
                            <li class="nav-items__item">
                                <a class="nav-items__item--a">メニュー2</a>
                            </li>
                            <li class="nav-items__item">
                                <a class="nav-items__item--a">メニュー3</a>
                            </li>
                            <li class="nav-items__item">
                                <a class="nav-items__item--a">メニュー4</a>
                            </li>
                        </ul>
                    </nav>

                    <button class="header__hamburger hamburger" id="js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    </a>
            </header>
            <div class="space__header"></div>