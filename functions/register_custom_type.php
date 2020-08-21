<?php

// Banner Post Type
add_action('init', 'register_banner_type');
function register_banner_type()
{
    register_post_type('banner', [
        'supports' => [
            'title', 'thumbnail'
        ],
        'rewrite' => [
            'slug' => 'banners'
        ],
        'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => __('Banners', 'hera'),
            'add_new_item' => __('Add New Banner', 'hera'),
            'edit_item' => __('Edit Banner', 'hera'),
            'all_items' => __('All Banners', 'hera'),
            'singular_name' => __('Banner', 'hera'),
        ],
        'menu_icon' => 'dashicons-images-alt2'
    ]);
}

// Image Post Type
add_action('init', 'register_image_type');
function register_image_type()
{
    register_post_type('image', [
        'supports' => [
            'title', 'thumbnail'
        ],
        'rewrite' => [
            'slug' => 'image'
        ],
        'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => __('Thư viện ảnh', 'hera'),
            'add_new_item' => __('Thêm mới', 'hera'),
            'edit_item' => __('Sửa', 'hera'),
            'all_items' => __('Danh sách', 'hera'),
            'singular_name' => __('Ảnh', 'hera'),
        ],
        'menu_icon' => 'dashicons-camera-alt'
    ]);
}

// Course Post Type
add_action('init', 'register_course_type');
function register_course_type()
{
    register_post_type('course', [
        'supports' => [
            'title', 'thumbnail','editor'
        ],
        'rewrite' => [
            'slug' => 'course'
        ],
        'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => __('Khóa học', 'hera'),
            'add_new_item' => __('Thêm mới', 'hera'),
            'edit_item' => __('Sửa', 'hera'),
            'all_items' => __('Danh sách khóa học', 'hera'),
            'singular_name' => __('Khóa học', 'hera'),
        ],
        'menu_icon' => 'dashicons-welcome-learn-more'
    ]);
}