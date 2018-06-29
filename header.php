<?php
/**
 * File for displaying header content.
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

?>

<!DOCTYPE HTML>
<html amp <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <!--Start AMP requirements -->

    <!-- Include and load the AMP JS library -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <!-- Point to itself as a regular version of this document does not exist -->
    <link rel="canonical" href="<?php global $wp; echo add_query_arg($wp->query_string, '', home_url($wp->request)); ?>">

    <!-- AMP Boilerplate code (ugly but mustuse...) -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <!-- AMP sidebar script -->
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

    <!-- All styles have to be in the HTML head -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway">
    <style amp-custom>
      <?php do_action('leotfi_amp_custom_styles'); ?>
    </style>

    <!-- End AMP requirements -->

    <title>
      <?php if ( !empty( wp_title( '', false ) ) ) echo wp_title( '', false ); ?>
    </title>

    <!-- Register favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <!-- Black browser bar on mobile -->
    <meta name="theme-color" content="black">
    <meta name="msapplication-navbutton-color" content="black">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Various meta -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
  </head>

  <body <?php body_class(); ?>>

    <!-- Header nav menu -->
    <amp-sidebar id="sidebar" layout="nodisplay" side="left">
      <amp-img class="personal-image" height="80px" width="80px"
        <?php $profile_picture = get_option('profile_picture'); ?>
        src="<?php if ( ! empty($profile_picture) ) : ?>
          <?php echo $profile_picture; ?>
        <?php else : ?>
          <?php echo get_template_directory_uri() . '/images/profile.jpg'; ?>
        <?php endif; ?>"
        alt="<?php esc_attr_e('Picture of me', 'leotoikka'); ?>">
      </amp-img>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container' => false
        )
      );
      ?>
    </amp-sidebar>
    <a href="#" on='tap:sidebar.open' class="nav-menu-toggle">
      <amp-img src="<?php echo get_template_directory_uri() . '/images/menu-open.png'; ?>" height="35"
        width="35" alt="<?php __('Open menu', 'leotoikka'); ?>"></amp-img>
    </a>

    <header>
      <!-- Header title and description -->
      <div class="center-container header-title-container">
        <h1 class="header-title">
          <a href="<?php echo get_option('home'); ?>">
            <?php bloginfo('name'); ?>
          </a>
        </h1>
        <h2 class="header-description"><?php bloginfo('description'); ?></h2>
      </div><!-- .header-title-container -->
    </header>
