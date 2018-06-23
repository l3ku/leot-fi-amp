<?php
/**
 * Template Name: Projects page
 *
 * @package leot-fi-amp
 */

// Deny direct access
if ( ! defined('ABSPATH') ) exit;

get_header();

$wp_all_query = new WP_Query(
  array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3
  )
);

if ( $wp_all_query->have_posts() ) : ?>
<div class="center-container project-wrapper">
  <?php while ( $wp_all_query->have_posts() ) : $wp_all_query->the_post(); ?>
    <div class="project-row">
      <article class="project-preview">
        <div class="project-preview-title">
          <a class="project-preview-title-link" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </div><!-- .project-preview-title -->
        <div>
          <?php if ( has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>">
              <amp-img class="project-preview-image"
                src="<?php the_post_thumbnail_url('large'); ?>"
                alt="<?php esc_attr_e('Project preview image', 'leotoikka'); ?>"></amp-img>
            </a>
          <?php endif; ?>
        </div>

        <div>
          <p class="project-preview-excerpt">
            <?php the_excerpt(); ?>
          </p>
          <a class="project-read-more" href="<?php the_permalink(); ?>">
            Read more...
          </a>
        </div>

      </article>
    </div><!-- .row .project-row -->

    <!-- Include separator only if there are still posts remaining -->
    <?php if ( $wp_all_query->current_post + 1 < $wp_all_query->post_count ) : ?>
      <hr class="projects-hr">
    <?php endif; ?>

  <?php endwhile; ?>
</div><!-- .project-wrapper -->
<?php endif; ?>

<?php
get_footer();
