<?php
/**
 * File for displaying home page content.
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

get_header();
?>

<div class="center-container index-wrapper">
  <?php $homeinfo = esc_attr(get_option('home_content')); ?>
  <?php if ( $homeinfo ) : ?>
    <div class="homeinfo-text">
      <?php echo $homeinfo; ?>
    </div><!-- .homeinfo-text -->
  <?php endif; ?>
</div><!-- .index-wrapper -->

<?php
get_footer();
