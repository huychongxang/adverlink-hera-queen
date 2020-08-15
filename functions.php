<?php
define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_DIR', get_stylesheet_directory());
define('THEME_ASSET_WEB', get_stylesheet_directory_uri() . '/assets/web');

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
 */
require_once(THEME_DIR . '/functions/register_custom_type.php');
