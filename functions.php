<?php
/**
 * Main functions file, add any customizations to theme functionality here.
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/theme-support.php';
require_once get_template_directory() . '/inc/theme-options.php' ;
require_once get_template_directory() . '/inc/functions-admin.php';
require_once get_template_directory() . '/inc/acf-fields.php';
require_once get_template_directory() . '/inc/extras.php';
