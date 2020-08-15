<?php
// Add the custom columns to the banner post type:
add_filter( 'manage_banner_posts_columns', 'set_custom_edit_book_columns' );
function set_custom_edit_book_columns($columns) {
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