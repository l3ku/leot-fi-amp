<?php
/**
 * Extra functionality for theme.
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

function portfolio_remove_version_css_js( $src ) {
  return strpos( $src, 'ver=' ) ? remove_query_arg( 'ver', $src ) : $src;
}
add_filter( 'style_loader_src', 'portfolio_remove_version_css_js', 9999 );
add_filter( 'script_loader_src', 'portfolio_remove_version_css_js', 9999 );

/* Remove all styles from other plugins for AMP to work properly */
function remove_all_scripts() {
  global $wp_scripts, $wp_styles;
  $wp_styles = new WP_Styles();
  $wp_scripts = new WP_Scripts();
}

/* AMP is not loaded in WP admin so no need to break the whole site ;) */
if ( ! is_admin() ) {
  add_filter('show_admin_bar', '__return_false');
  add_action('wp_enqueue_scripts', 'remove_all_scripts', PHP_INT_MAX);
}

/* Remove all WP Core emoji cancer */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Remove WP Embed JS */
function deregister_wp_embed(){
  wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'deregister_wp_embed');
