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

    // Don't forget to exit at the end of processing
    exit(json_encode($response));
}