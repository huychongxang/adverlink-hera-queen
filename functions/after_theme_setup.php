<?php

// Title Tag | Theme Support
add_action('after_setup_theme', 'support_title_tag');
function support_title_tag()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}