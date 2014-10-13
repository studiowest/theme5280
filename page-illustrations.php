<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
						<!--  Begin Column One; Image Here -->
						<div class="column one" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
							<?php echo the_title(); ?>
					</div>
						<!--  End Column One; Image Here -->
				<!-- End First Row Here -->

				<!-- Second Row Here -->
					<div class="row">
						<!--  Begin Column one-third; Image Here -->
						<div class="column one" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
							<?php echo the_title(); ?>
						</div>
						<!--  End Column one-third; Image Here -->

						<!--  Begin Column two-thirds; Image Here -->
						<div class="column two" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
							<?php echo the_title(); ?>
						</div>
						<!--  End Column two-thirds; Image Here -->
				<!-- End Second Row Here -->

				<!-- Third Row Here -->
				<div class="row">
					<!--  Begin Column third; Image Here -->
					<div class="column one" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column third; Image Here -->

					<!--  Begin Column two-thirds; Image Here -->
					<div class="column two" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column two-thirds; Image Here -->
				<!-- End Third Row Here -->

				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
