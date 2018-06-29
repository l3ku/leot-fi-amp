<?php
/**
 * Register theme supported features.
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

add_theme_support(
  'custom-header',
  array(
    'default-image' => get_template_directory_uri() . '/images/header-default.jpg',
  )
);

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function portfolio_register_nav_menus() {
  register_nav_menu('header-menu', __('The main navigation menu which appears in the top right corner', 'leotoikka'));
}
add_action('after_setup_theme', 'portfolio_register_nav_menus');
