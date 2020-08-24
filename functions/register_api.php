<?php
add_action('rest_api_init', 'getImageRegister');
function getImageRegister()
{
    register_rest_route('v1/images', 'get', [
        'method' => WP_REST_Server::READABLE,
        'callback' => "imagesResults"
    ]);
}
haha

function imagesResults($data)
{
    $images = new WP_Query([
        'post_type' => "image",
        'posts_per_page' => $data['per_page'] ?: 1,
        'paged' => $data['page'] ?: 1,
        'orderby' => 'date',
        'order' => 'DESC'
    ]);
    $max_pages = $images->max_num_pages;
    $total = $images->found_posts;

    $formats = [];
    while ($images->have_posts()) {
        $images->the_post();
        $formats[] = [
            'id' => get_the_ID(),
            'thumbnail' => get_the_post_thumbnail_url(),
        ];

    }
    $result = [
        'data' => $formats,
        'total' => $total,
        'total_pages' => $max_pages,
        'current_page' => $data['page']
    ];
    return $result;
}