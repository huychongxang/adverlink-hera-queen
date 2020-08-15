<?php

// Banner Post Type
add_action('init', 'register_banner_type');
function register_banner_type()
{
    register_post_type('banner', [
        'supports' => [
            'title','thumbnail'
        ],
        'rewrite' => [
            'slug' => 'banners'
        ],
        'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => __( 'Banners', 'hera' ),
            'add_new_item' =>  __( 'Add New Banner', 'hera' ),
            'edit_item' =>  __( 'Edit Banner', 'hera' ),
            'all_items' => __( 'All Banners', 'hera' ),
            'singular_name' => __( 'Banner', 'hera' ),
        ],
        'menu_icon' => 'dashicons-images-alt2'
    ]);
}