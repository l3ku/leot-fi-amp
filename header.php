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

    <!-- All styles have to be in the HTML head -->
    <style amp-custom>
      /* @TODO for CSS:
      - Minify all styles, use Sass in development
      - Remove unnecessary styles
      - Use classes not ID's */
      /*******************************
       *          HEADER             *
       ******************************/
      #header-menu {
        list-style-type: none;
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
      .navbar-nav {
        margin: 0 auto;
        width: 50%;
      }
      .navbar-nav>ul {
        margin: 0 auto;
        text-align: center;
        list-style-type: none;
      }
      .navbar-nav>li>a:hover, .navbar-nav>li>a:active, .navbar-nav>li>a:focus {
        background-color: rgba(255, 0, 0, 0);
      }
      #header-title-container {
        padding-top: 7.5em;
        width: 50%;
        margin: 0 auto;
      }
      #header-title {
        font-size: 5em;
        font-weight: bold;
        font-family: 'Dancing Script', sans-serif;
        text-align: center;
        margin: 0 auto;
      }
      #header-title>a, #header-title>a:hover {
        text-decoration: none;
        color: black;
      }
      #header-description {
        color: black;
        font-size: 1.5em;
        text-align: center;
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
      #personal-image {
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
       *         PROJECTS            *
       ******************************/
      .project-wrapper {
        padding: 0 4em;
        background-color: #ececec;
        color: black;
      }
      .project-row {
        margin: 0 auto;
        margin-top: 3em;
        margin-bottom: 3em;
        max-width: 1000px;
      }
      .project-preview {
        font-size: 1.15em;
        margin-bottom: 3em;
      }
      .project-preview-image {
        border-radius: 10px;
      }
      .project-preview-title {
        text-align: center;
        font-size: 3em;
        margin-bottom: 0.5em;
      }
      .project-preview-title-link {
        color: black;
        -o-transition:.5s;
        -ms-transition:.5s;
        -moz-transition:.5s;
        -webkit-transition:.5s;
      }
      .project-preview-title-link:hover {
        color: white;
        text-decoration: none;
      }
      .project-read-more {
        color: black;
      }
      .project-read-more:hover {
        color: #16D4DA;
      }
      .projects-hr {
        border: 0;
        border-top: 1px solid white;
      }

      /*******************************
       *          RESUME             *
       ******************************/
      .cv-wrapper {
        padding: 30px;
        background-color: #ececec;
        color: black;
      }
      .cv-personal-image {
        border-radius: 10px;
        margin-top: 20px;
        max-height: 10em;
        margin: 0 auto;
      }
      .work-experience-wrapper {
        margin-top: 20px;
      }
      .cv-row-image {
        padding: 2em;
        margin: 0 auto;
      }
      .cv-row-image {
        max-width: 80%;
      }

      /*******************************
       *       CONTACT PAGE          *
       ******************************/
      .contact-page-wrapper {
        padding: 30px;
        margin: 0 auto;
        background-color: #ececec;
        color: black;
      }

      /*******************************
       *           FOOTER            *
       ******************************/
      .footer-wrapper {
        min-height: 5em;
        padding: 1em;
        margin: 0 auto;
        width: 50%;
      }
      #footer-copyright {
        font-size: 1.2em;
        color: black;
        text-align: center;
      }
      #footer-copyright>a{
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
       *         SINGLE POST         *
       ******************************/
      .content-area {
        padding-top: 20px;
        padding: 1.5em;;
        background-color: #ececec;
      }

      /*******************************
       *         UNIVERSAL           *
       ******************************/
      body {
        font-family: 'Raleway', sans-serif;
        margin: 0;
      }
      .leotoikka-wrapper {
        padding: 8em 0;
        background-color: #ececec;
        color: black;
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

    <!-- Black browser bar on mobile -->
    <meta name="theme-color" content="black">
    <meta name="msapplication-navbutton-color" content="black">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>

      <!-- Header title and description -->
      <div id="header-title-container">
        <h1 id="header-title">
          <a href="<?php echo get_option('home'); ?>">
            <?php bloginfo('name') ?>
          </a>
        </h1>
        <div id="header-description">
          <?php bloginfo('description'); ?>
        </div><!-- .header-description -->
      </div><!-- .header-title-container -->

      <!-- Header nav menu -->
      <nav class="nav-container">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav navbar-nav'
          )
        );
        ?>
      </nav><!--.nav-container -->

    </header>
