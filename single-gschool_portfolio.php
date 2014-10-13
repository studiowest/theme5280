<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <!-- our code -->

      <h2></php the_title(); ?></h2>

<!--add -->
      categories
      feature image
      feature header
<!--end add -->


      <!-- end our code -->





      <?php _s_post_nav(); ?>

      

    <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>
