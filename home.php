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

<div class="index-wrapper">
  <!-- First row contains profile image and brief info -->
  <div class="row">
    <div class="col-xs-12 col-md-2">
      <amp-img class="img-circle center-block" class="personal-image"
        src="<?php echo esc_url( get_option( 'profile_picture' ) ); ?>"
        alt="<?php esc_attr_e( 'Picture of me', 'leotoikka' ); ?>"></amp-img>
    </div><!-- .col-xs-12 .col-md-2 -->
    <div class="coding-info col-xs-12 col-md-10">
      <?php $homeinfo = esc_attr( get_option( 'home_content' ) ); ?>
      <?php if ( $homeinfo ) : ?>
        <div class="homeinfo-text">
          <?php echo $homeinfo; ?>
        </div><!-- .homeinfo-text -->
      <?php endif; ?>
    </div><!-- .coding-info .col-xs-12 .col-md-10 -->
  </div><!-- .row -->
</div><!-- .index-wrapper -->

<?php
get_footer();
