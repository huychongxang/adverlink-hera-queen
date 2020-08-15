<?php
 // Banner
add_filter( 'manage_banner_posts_columns', 'set_custom_edit_banner_columns' );
function set_custom_edit_banner_columns($columns) {
    $columns['banner'] = __( 'Banner', 'hera' );
    return $columns;
}

// Add the data to the custom columns for the banner post type:
add_action( 'manage_banner_posts_custom_column' , 'custom_banner_column', 10, 2 );
function custom_banner_column( $column, $post_id ) {
    switch ( $column ) {
        case 'banner' :
            echo get_the_post_thumbnail( $post_id, 'thumbnail' );
            break;
    }
}


 // Image
add_filter( 'manage_image_posts_columns', 'set_custom_edit_image_columns' );
function set_custom_edit_image_columns($columns) {
    $columns['image'] = __( 'Banner', 'hera' );
    return $columns;
}

// Add the data to the custom columns for the banner post type:
add_action( 'manage_image_posts_custom_column' , 'custom_image_column', 10, 2 );
function custom_image_column( $column, $post_id ) {
    switch ( $column ) {
        case 'image' :
            echo get_the_post_thumbnail( $post_id, 'thumbnail' );
            break;
    }
}