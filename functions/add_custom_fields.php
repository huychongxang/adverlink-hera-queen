<?php
// Iframe 1 -box why choose hera
add_action('after_setup_theme', 'register_custom_fields_frame_1');
function register_custom_fields_frame_1()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_frame_1',
            'title' => 'Tại sao lựa chọn Hera Queen',
            'fields' => [
                [
                    'key' => 'box_title_1',
                    'label' => 'Tiêu đề box 1',
                    'name' => 'box_title_1',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'box_content_1',
                    'label' => 'Nội dung box 1',
                    'name' => 'box_content_1',
                    'type' => 'textarea',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'box_title_2',
                    'label' => 'Tiêu đề box 2',
                    'name' => 'box_title_2',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'box_content_2',
                    'label' => 'Nội dung box 2',
                    'name' => 'box_content_2',
                    'type' => 'textarea',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'box_title_3',
                    'label' => 'Tiêu đề box 3',
                    'name' => 'box_title_3',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'box_content_3',
                    'label' => 'Nội dung box 3',
                    'name' => 'box_content_3',
                    'type' => 'textarea',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ]
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ]);
    }
}

// Iframe 2 - video youtube
add_action('after_setup_theme', 'register_custom_fields_frame_2');
function register_custom_fields_frame_2()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_frame_2',
            'title' => 'Video',
            'fields' => [
                [
                    'key' => 'video_frame_2',
                    'label' => 'Link video youtube',
                    'name' => 'video_frame_2',
                    'type' => 'url',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'youtube_page',
                    'label' => 'Youtube Channel',
                    'name' => 'youtube_page',
                    'type' => 'url',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ]);
    }
}

// Iframe 3
add_action('after_setup_theme', 'register_custom_fields_frame_3');
function register_custom_fields_frame_3()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_frame_3',
            'title' => 'Thông tin khóa học',
            'fields' => [
                [
                    'key' => 'image_frame_3',
                    'label' => 'Ảnh mô tả khóa học',
                    'name' => 'image_frame_3',
                    'type' => 'image',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ]);
    }
}

// Footer
add_action('after_setup_theme', 'register_custom_fields_frame_5');
function register_custom_fields_frame_5()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_frame_5',
            'title' => 'Đăng ký khóa học',
            'fields' => [
                [
                    'key' => 'time_start',
                    'label' => 'Thời gian bắt đầu',
                    'name' => 'time_start',
                    'type' => 'date_time_picker',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'date_start',
                    'label' => 'Ngày bắt đầu',
                    'name' => 'date_start',
                    'type' => 'date_picker',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'date_end',
                    'label' => 'Ngày kết thúc',
                    'name' => 'date_end',
                    'type' => 'date_picker',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ]);
    }
}

// Footer
add_action('after_setup_theme', 'register_custom_fields_frame_footer');
function register_custom_fields_frame_footer()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_frame_footer',
            'title' => 'Footer',
            'fields' => [
                [
                    'key' => 'address',
                    'label' => 'Địa chỉ',
                    'name' => 'address',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'phone',
                    'label' => 'Số điện thoại',
                    'name' => 'phone',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'email',
                    'label' => 'Email',
                    'name' => 'email',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'facebook_link',
                    'label' => 'Facebook link',
                    'name' => 'facebook_link',
                    'type' => 'url',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'youtube_link',
                    'label' => 'Youtube link',
                    'name' => 'youtube_link',
                    'type' => 'url',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ]);
    }
}

// Course Post Type
add_action('after_setup_theme', 'register_custom_fields_course_post_type');
function register_custom_fields_course_post_type()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'price_and_time',
            'title' => 'Giá và thời gian',
            'fields' => [
                [
                    'key' => 'price',
                    'label' => 'Giá',
                    'name' => 'price',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                [
                    'key' => 'time',
                    'label' => 'Thời gian',
                    'name' => 'time',
                    'type' => 'text',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'course',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ]);
    }
}