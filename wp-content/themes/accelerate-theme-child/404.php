<?php
/**
 * The template for 404 page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

<div id="primary" class="for-04error">
  <div class="main-content" role="main">
    <h1>404 Error</h1>

    <div class="error-page"
    <?php while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>

  </div><!-- .main-content -->
  </div><!-- #primary -->

<?php get_footer(); ?>
