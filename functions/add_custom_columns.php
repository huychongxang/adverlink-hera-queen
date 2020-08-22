<?php
// Banner
add_filter('manage_banner_posts_columns', 'set_custom_edit_banner_columns');
function set_custom_edit_banner_columns($columns)
{
    $columns['banner'] = __('Banner', 'hera');
    return $columns;
}

// Add the data to the custom columns for the banner post type:
add_action('manage_banner_posts_custom_column', 'custom_banner_column', 10, 2);
function custom_banner_column($column, $post_id)
{
    switch ($column) {
        case 'banner' :
            echo get_the_post_thumbnail($post_id, 'thumbnail');
            break;
    }
}


// Image
add_filter('manage_image_posts_columns', 'set_custom_edit_image_columns');
function set_custom_edit_image_columns($columns)
{
    $columns['image'] = __('Banner', 'hera');
    return $columns;
}

// Add the data to the custom columns for the banner post type:
add_action('manage_image_posts_custom_column', 'custom_image_column', 10, 2);
function custom_image_column($column, $post_id)
{
    switch ($column) {
        case 'image' :
            echo get_the_post_thumbnail($post_id, 'thumbnail');
            break;
    }
}


// Booking Post Type
add_filter('manage_booking_posts_columns', 'set_custom_edit_booking_columns');
function set_custom_edit_booking_columns($columns)
{
    $columns['status'] = __('Trạng thái', 'hera');
    return $columns;
}

add_action('manage_booking_posts_custom_column', 'custom_booking_column', 10, 2);
function custom_booking_column($column, $post_id)
{
    switch ($column) {
        case 'status' :
            $status = get_field('status', $post_id);
            if ($status == 0) {
                echo "Chưa xử lý";
            }
            if ($status == 1) {
                echo "Đã xử lý";
            }
            break;
    }
}

add_filter('manage_edit-booking_sortable_columns', 'set_custom_booking_sortable_columns');

function set_custom_booking_sortable_columns($columns)
{
    $columns['status'] = 'status';
    return $columns;
}

add_action('pre_get_posts', 'booking_custom_orderby');

function booking_custom_orderby($query)
{
    if (!is_admin())
        return;

    $orderby = $query->get('orderby');

    if ('status' == $orderby) {
        $query->set('meta_key', 'status');
        $query->set('orderby', 'meta_value_num');
    }
}