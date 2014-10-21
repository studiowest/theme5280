<?php
/**
* Template Name: Logo
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

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column one" style="height: 100px; background:url(<?php the_field('work_logo_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One Fifth; Image Here -->

					<!--  Begin Column Three Fifths; Image Here -->
					<div class="column three" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column Three Fifths; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column one" style="height: 100px; background:url(<?php the_field('work_square_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One Fifth; Image Here -->

				</div>
			<!-- End First Row Here -->

			<!-- Second Row Here -->
				<div class="row">

					<!--  Begin Column Three Fifths; Image Here -->
					<div class="column three" style="height: 100px; background:url(<?php the_field('work_ilustration_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column Three Fifths; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column one" style="height: 100px; background:url(<?php the_field('work_square_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One Fifth; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column one" style="height: 100px; background:url(<?php the_field('work_logo_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One Fifth; Image Here -->

				</div>
<!-- End Second Row Here -->

<!-- Begin Third Row Here -->
			<div class="row">

				<!--  Begin Column One Fifth; Image Here -->

				<div class="column one" style="height: 100px; background:url(<?php the_field('work_print_image'); ?>);">
					<?php echo the_title(); ?>
				</div>
				<!--  End Column One Fifth; Image Here -->

				<!--  Begin Column One Fifth; Image Here -->

				<div class="column one" style="height: 100px; background:url(<?php the_field('work_print_image'); ?>);">
					<?php echo the_title(); ?>
				</div>
				<!--  End Column One Fifth; Image Here -->

				<!--  Begin Column Three Fifths; Image Here -->
				<div class="column three" style="height: 100px; background:url(<?php the_field('work_ilustration_image'); ?>);">
					<?php echo the_title(); ?>
				</div>
				<!--  End Column Three Fifths; Image Here -->
			</div>
<!-- End Third Row Here -->

<!-- Begin Fourth Row Here -->
				<div class="row">

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth" style="height: 100px; background:url(<?php the_field('work_square_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One Fifth; Image Here -->

					<!--  Begin Column Three Fifths; Image Here -->
					<div class="column three-fifths" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column Three Fifths; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth" style="height: 100px; background:url(<?php the_field('work_logo_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One Fifth; Image Here -->

				</div>
<!-- End Fourth Row Here -->

<!-- Blog Post Area -->
				<div class="row"></div>
				<div class="row">
					<?php
					// The Arguments
					$args = array(
									'post_type' => 'post',
									'category_name' => 'blog',
									'posts_per_page' => 3
					);
					// Start Loop
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

					<div class="blog-post">
						<h3><?php the_title(); ?></h3>
						<p><?php the_date(); ?> - <?php the_author(); ?></p>
						<?php echo wp_trim_words( get_the_content(), 40 ); ?>
						<a href="<?php the_permalink(); ?>">Read More <span class="genericon genericon-next"></span></a>
					</div>

					<?php
						// Reset Loop
						endwhile;
						wp_reset_postdata();
					?>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>categories/blog/">View More <span class="genericon genericon-next"></span></a>
				</div>
 				<!-- End Blog Post Area -->
					<a href="/portfolio">View More<span class="genericon genericon-next"></span></a>


				<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
