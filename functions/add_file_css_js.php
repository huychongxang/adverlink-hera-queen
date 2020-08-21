<?php
add_action('wp_enqueue_scripts', 'load_css');

function load_css()
{
    wp_enqueue_style('style', THEME_URL . '/style.css');
    wp_enqueue_style('style-web', THEME_ASSET_WEB . 'css/styles.css');
    wp_enqueue_style('font-awesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('font', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');
    wp_enqueue_style('font2', '//fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,500;1,300;1,500&display=swap');
}

add_action('wp_enqueue_scripts', 'load_js');

function load_js()
{
    wp_enqueue_script('swiper', THEME_ASSET_WEB . 'vendors/slide/swiper.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('bootstrap', THEME_ASSET_WEB . 'vendors/bs4/bootstrap.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('popper', THEME_ASSET_WEB . 'vendors/bs4/popper.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('fancybox', THEME_ASSET_WEB . 'vendors/fancybox/jquery.fancybox.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('main-js', THEME_ASSET_WEB . 'js/scripts.js', ['jquery'], '1.0', true);
}