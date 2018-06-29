<?php
/**
 * File for footer content.
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

?>

<div class="footer-wrapper">
  <div class="social-media-wrapper">

    <!-- Twitter -->
    <a class="twitter-link" href="<?php echo esc_attr(get_option('twitter_handler')); ?>">
      <div class="twitter-logo"></div>
    </a>
    <!-- Facebook -->
    <a class="facebook-link" href="<?php echo esc_attr(get_option('facebook_handler')); ?>">
      <div class="facebook-logo"></div>
    </a>
    <!-- Github -->
    <a class="github-link" href="<?php echo esc_attr(get_option('github_handler')); ?>">
      <div class="github-logo"></div>
    </a>
    <!-- LinkedIn -->
    <a class="linkedin-link" href="<?php echo esc_attr(get_option('linkedin_handler')); ?>">
      <div class="linkedin-logo"></div>
    </a>

  </div><!-- .social-media-wrapper -->

  <!-- Copyright -->
  <div class="footer-copyright">
    &copy;
    <a href="<?php echo get_option('home'); ?>">
      <?php bloginfo('name') ?>
    </a> <?php echo date('Y'); ?>
  </div>

</div><!-- .footer-wrapper -->
</body>
</html>
