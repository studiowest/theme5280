<?php
/**
* Template Name: Homepage
*
*
* @package _s
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>



			<!-- Begin Full Image Portfolio Collage -->
				<div class="full-width" style="background-image: url(<?php the_field('home_portfolio_image'); ?>);">
			<!-- End Full Image Portfolio Collage -->

			<!-- Begin Headline -->
			<h1><?php the_field('home_heading'); ?><h1>
			<!-- End Headline -->

			<!-- Begin Portfolio Description Area -->
			<p><?php the_field('home_description'); ?></p>
			<!-- End Portfolio Description Area -->

			<!-- First Row Here -->
				<div class="row">

					<?php
					// The Arguments
					$args = array(
					    'post_type' => '5280_portfolio',
					    // 'posts_per_page' => 10
					);
					// Start Loop
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<!--  Begin Column One; Image Here -->
					<div class="column" style="height: 100px; background:url(<?php the_field('work_main_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One; Image Here -->

					<?php
					// End Loop
						endwhile;
						wp_reset_postdata();
					?>

				</div>
			<!-- End First Row Here -->



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
