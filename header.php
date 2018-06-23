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
      /* @TODO for CSS:
      - Minify all styles, use Sass in development
      - Remove unnecessary styles
      - Use classes not ID's */
      /*******************************
       *         UNIVERSAL           *
       ******************************/
      body {
        font-family: 'Raleway', sans-serif;
        margin: 0;
      }
      .center-container {
        margin: 0 auto;
        width: 50%;
      }

      /*******************************
       *          HEADER             *
       ******************************/
       .nav-menu {
         margin-right: 5em;
       }
      .nav-menu li {
        list-style-type: none;
      }
      .nav-menu li a, .nav-menu li a:visited {
        color: black;
        text-decoration: none;
        float: left;
        font-size: 1.75em;
        margin-top: 1em;
      }
      .nav-menu-toggle {
        float: right;
        margin-top: 1em;
        margin-right: 1em;
      }
      .header-image {
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
      }
      .header-container {
      	display: block;
      	text-align: center;
      	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
      }
      .nav-container {
        margin: 0 auto;
      }
      .navbar-nav>ul {
        margin: 0 auto;
        text-align: center;
        list-style-type: none;
      }
      .navbar-nav>li>a:hover, .navbar-nav>li>a:active, .navbar-nav>li>a:focus {
        background-color: rgba(255, 0, 0, 0);
      }
      .header-title-container {
        padding-top: 7.5em;
      }
      .header-title {
        font-size: 5em;
        font-weight: bold;
        font-family: 'Dancing Script', sans-serif;
        text-align: center;
        margin: 0 auto;
      }
      .header-title>a, .header-title>a:hover {
        text-decoration: none;
        color: black;
      }
      .header-description {
        color: black;
        font-size: 1.5em;
        text-align: center;
        font-family: 'Raleway', sans-serif;
      }

      /*******************************
       *            HOME             *
       ******************************/
      .index-black {
        padding-top: 3em;
        position: relative;
        background-position: center;
        display: block;
        min-height: 300px;
        font-size: 1.5em;
      }
      .personal-image {
        margin: 0 auto;
        margin-bottom: 1em;
        max-height: 10em;
      }
      .coding-info {
        text-align: center;
        margin-bottom: 1em;
      }
      .recent-projects {
        text-align: center;
      }
      .projects-preview {
        padding-top: 2em;
      }
      .projects-preview-entry {
        text-align: center;
        margin-bottom: 2em;
      }
      .projects-preview-title {
        color: white;
        text-align: center;
        font-size: 1.7em;
      }
      .projects-preview-title:hover {
        color: white;
        text-decoration: none;
      }
      .projects-preview-thumbnail > img {
        opacity: 0.7;
        max-height: 15em;
        padding-top: 0.75em;
        -webkit-backface-visibility: hidden;
        -o-transition:.5s;
        -ms-transition:.5s;
        -moz-transition:.5s;
        -webkit-transition:.5s;
      }
      .projects-preview-thumbnail:hover > img {
        opacity: 1;
      }
      .index-lower {
        min-height: 300px;
        margin-top: -2px;
        background-repeat: no-repeat;
        background-size: cover;
        filter: contrast(110%);
        filter: brightness(70%);
      }

      /*******************************
       *           FOOTER            *
       ******************************/
      .footer-wrapper {
        min-height: 5em;
        padding: 1em;
        margin: 0 auto;
        width: 50%;
        margin-top: 2em;
      }
      .footer-copyright {
        font-size: 1.2em;
        color: black;
        text-align: center;
      }
      .footer-copyright>a{
        color: black;
      }
      .social-media-wrapper {
        margin: 0 auto;
        min-height: 3em;
        min-width: 2em;
        display: block;
        text-align: center;
      }
      .twitter-logo, .facebook-logo, .github-logo, .linkedin-logo {
        display: inline-block;
        background-repeat:no-repeat;
        background-size:100% 100%;
        padding-left: 4em;
        height: 50px;
        width: 45px;
      }
      .twitter-link, .facebook-link, .github-link, .linkedin-link {
        opacity: 0.5;
        -o-transition:.5s;
        -ms-transition:.5s;
        -moz-transition:.5s;
        -webkit-transition:.5s;
        font-size: 0;
      }
      .twitter-link:hover, .facebook-link:hover, .github-link:hover, .linkedin-link:hover {
        opacity: 1;
      }

      /*******************************
       *         404 page            *
       ******************************/
      .not-found-title, .not-found-content {
        text-align: center;
      }

      /*******************************
       *           @MEDIA            *
       ******************************/
      @media (max-width:770px) {
        body {
          font-size: 13px;
        }
        .header-container {
          height: 700px;
        }
      }

      @media (min-width: 770px) {
        body{
          font-size: 15px;
        }
        .header-container {
          height: 500px;
        }
      }
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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
  </head>

  <body <?php body_class(); ?>>

    <!-- Header nav menu -->
    <amp-sidebar id="sidebar" layout="nodisplay" side="right">
      <div class="nav-menu">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => false
          )
        );
        ?>
      </div>
    </amp-sidebar>
    <a href="#" on='tap:sidebar.open' class="nav-menu-toggle">
      <amp-img src="<?php echo get_template_directory_uri() . '/images/menu.png'; ?>" height="35"
        width="35" alt="<?php __('Menu', 'leotoikka'); ?>"></amp-img>
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
