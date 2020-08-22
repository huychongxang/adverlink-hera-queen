<?php
define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_DIR', get_stylesheet_directory());
define('THEME_ASSET_WEB', get_stylesheet_directory_uri() . '/assets/');

/**
 * Register Files CSS and JS
 */
require_once(THEME_DIR . '/functions/add_file_css_js.php');

/**
 * Required Plugin
 *
 *
 */
require_once(THEME_DIR . '/TGM-Plugin-Activation-develop/example.php');

/**
 * After theme setup
 *  Theme support
 *  Register Post/Page
 *  Add custom columns
 *  Add custome fields
 */

require_once(THEME_DIR . '/functions/after_theme_setup.php');
require_once(THEME_DIR . '/functions/register_default_post_page.php');
require_once(THEME_DIR . '/functions/add_custom_columns.php');
require_once(THEME_DIR . '/functions/add_custom_fields.php');
/**
 * Custom type
 *  Banner type
 *  Image type
 *  Course type
 */
require_once(THEME_DIR . '/functions/register_custom_type.php');


/**
 * Handle Ajax
 */
require_once(THEME_DIR . '/functions/handle_ajax.php');
/**
 * Register API
 */
require_once(THEME_DIR . '/functions/register_api.php');