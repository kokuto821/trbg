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
                                <p class="nav-items__item--p">メニュー1</p>
                                <ul class="dropdown-items">
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu1-1</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu1-2</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu1-3</a></li>
                                </ul>
                            </li>
                            <li class="nav-items__item">
                                <p class="nav-items__item--p">メニュー2</p>
                                <ul class="dropdown-items">
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu2-1</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu2-2</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu2-3</a></li>
                                </ul>
                            </li>
                            <li class="nav-items__item">
                                <p class="nav-items__item--p">メニュー3</p>
                                <ul class="dropdown-items">
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu3-1</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu3-2</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu3-3</a></li>
                                </ul>
                            </li>
                            <li class="nav-items__item">
                                <p class="nav-items__item--p">メニュー4</p>
                                <ul class="dropdown-items">
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu4-1</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu4-2</a></li>
                                    <li class="dropdown-items__item"><a
                                            href="https://github.com/TaichiSato-starcraft/ui-practice"
                                            target="_blank">menu4-3</a></li>
                                </ul>
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