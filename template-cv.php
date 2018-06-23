<?php
/**
 * Template Name: CV page
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

get_header();
?>

<div class="center-container cv-wrapper">

  <!-- Row containing motivation text -->
  <div class="row">
    <div class="cv-motivation-text-wrapper">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <p class="cv-motivation-text-content"><?php the_content(); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
    </div><!-- .cv-motivation-text-wrapper -->
  </div><!-- .row -->

  <?php if ( function_exists('the_field') ) : ?>
    <!-- Row containing education information -->
    <div class="education-wrapper">
      <div class="education-content">
        <?php the_field('cv_education', get_the_ID()); ?>
      </div><!-- .education-content -->
    </div><!-- education-wrapper -->

    <!-- Row containing IT skills -->
    <div class="it-skills-wrapper">
      <div class="it-skills-content">
        <?php the_field('cv_it_skills', get_the_ID()); ?>
      </div><!-- .it-skills-content -->
    </div><!-- .it-skills-wrapper -->

    <!-- Row containing language skills -->
    <div class="language-skills-wrapper">
      <div class="language-skills-content">
        <?php the_field('cv_language_skills', get_the_ID()); ?>
      </div><!-- .language-skills-content -->
    </div><!-- .language-skills-wrapper -->

    <!-- Row containing work experience -->
    <div class="work-experience-wrapper">
      <div class="work-experience-content">
        <?php the_field('cv_work_experience', get_the_ID()); ?>
      </div><!-- .work-experience-content -->
    </div><!-- .work-experience-wrapper -->
  <?php endif; ?>
</div><!-- .cv-wrapper-->

<?php
get_footer();
