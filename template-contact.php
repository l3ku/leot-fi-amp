<?php
/**
 * Template Name: Contact page
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

get_header();
?>

<div class="center-container contact-page-wrapper">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ): the_post(); ?>
      <h1 class="page-title"><?php the_title(); ?></h2>
      <p class="contact-page-text-content"><?php the_content(); ?></p>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- .contact-page-wrapper -->

<?php
get_footer();
