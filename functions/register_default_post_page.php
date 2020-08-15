<?php
add_action('init', 'register_default_page');
function register_default_page()
{
    wp_insert_post([
        'ID'=>1,
        'guid'=>1,
        'post_status'=>'publish',
        'post_type'=>'page',
        'post_name'=>'Home',
        'post_title'=>__( 'Home', 'hera' ),
    ]);
}