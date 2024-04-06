<?php
function trbg_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_image_size('page_eyecatch',1000,300, true );
    add_image_size('archive_thumbnail',300,150, true );
}
add_action("after_setup_theme","trbg_theme_setup");
