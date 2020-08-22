<?php
add_action('wp_ajax_submit_register_course', 'submit_register_course');
add_action('wp_ajax_nopriv_submit_register_course', 'submit_register_course');
function submit_register_course()
{
    if (
        !isset($_POST['name_of_nonce_field'])
        || !wp_verify_nonce($_POST['name_of_nonce_field'], 'submit_register_course_nonce')
    ) {
        $response = array(
            'error' => false,
        );
        exit($response);
    }
    // A default response holder, which will have data for sending back to our js file
    $response = array(
        'error' => false,
    );

    // Example for creating an response with error information, to know in our js file
    // about the error and behave accordingly, like adding error message to the form with JS
    if (trim($_POST['phone']) == '') {
        $response['error'] = true;
        $response['error_message'] = 'Chưa nhập số điện thoại';
        // Exit here, for not processing further because of the error
        exit(json_encode($response));
    }

    // ... Do some code here, like storing inputs to the database, but don't forget to properly sanitize input data!
    $booking_id = wp_insert_post([
        'post_type' => 'booking',
        'post_title' => $_POST['name'] . ' + ' . $_POST['phone'],
        'post_status' => 'publish',
        'comment_status' => 'closed',
        'ping_status' => 'closed',
    ]);
    if ($booking_id) {
        add_post_meta($booking_id, 'name', trim($_POST['name']));
        add_post_meta($booking_id, 'phone', trim($_POST['phone']));
        add_post_meta($booking_id, 'email', trim($_POST['email']));
        add_post_meta($booking_id, 'course', trim($_POST['course']));
    }
    // Don't forget to exit at the end of processing
    exit(json_encode($response));
}