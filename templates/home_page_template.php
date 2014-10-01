

<?php
/**
 * Template Name: Homepage
 *
 *
 * @package theme5280
 */
get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ): while have_posts() ) : the_post(); ?>

<!-- Begin Full Image Portfolio Collage -->
	<div class="full-width" style="background-image: url(<?php the_field('home_portfolio_image'); ?>);">
<!-- End Full Image Portfolio Collage -->

<!-- Begin Headline -->
<h1><?php the_field('home_heading'); ?><h1>
<!-- End Headline -->

<!-- Begin Portfolio Description Area -->
<?php get_template_part( 'portfolio', 'description' ); ?>
<!-- End Portfolio Description Area -->

<!-- First Row Here -->
	<div class="row">
		<!--  Begin Column One; Image Here -->
			<div class="column one"></div>
				<div class="column" style="background:url(images/izumi.jpg);"></div>
					<?php the_field('home-column-1-image'); ?>
				</div>
		<!--  End Column One; Image Here -->

		<!-- Begin Column Three; Image Here -->
			<div class="column three"></div>
				<div class="column" style="background:url(images/catalina.jpg);"></div>
				<?php the_field('home-column-3-image'); ?>
			</div>
		<!-- End Column Three; Image Here -->

		<!-- Begin Column One; No Image -->
			<div class="column one"></div>
  	<!-- End Column One; No Image -->
<!-- End First Row Here -->


<!-- Second Row Here -->
	<div class="row">
		<!-- Begin Column Three; Image Here -->
		<div class="column three"></div>
			<div class="column" style="background:url(images/theMarket.jpg);"></div>
			<?php the_field('home-column-3-image'); ?>
		</div>
		<!-- End Column Three; Image Here -->

		<!-- Begin Column One; No Image -->
			<div class="column one"></div>
		<!-- End Column One; No Image -->

		<!--  Begin Column One; Image Here -->
			<div class="column one"></div>
				<div class="column" style="background:url(images/alpine.jpg);"></div>
				<?php the_field('home-column-1-image'); ?>
			</div>
		<!--  End Column One; Image Here -->
<!-- End Second Row Here -->

<!-- Third Row Here -->
	<div class="row">
		<!--  Begin Column One; Image Here -->
		<div class="column one"></div>
			<div class="column" style="background:url(images/nita_cd.jpg);"></div>
			<?php the_field('home-column-1-image'); ?>
		</div>
		<!--  End Column One; Image Here -->

		<!-- Begin Column One; No Image -->
			<div class="column one"></div>
		<!-- End Column One; No Image -->

		<!-- Begin Column Three; Image Here -->
		<div class="column three"></div>
			<div class="column" style="background:url(images/josephinas.jpg);"></div>
			<?php the_field('home-column-3-image'); ?>
		</div>
		<!-- End Column Three; Image Here -->
<!-- End Third Row Here -->

<!-- Fourth Row Here -->
	<div class="row">
		<!-- Begin Column One; No Image -->
			<div class="column one"></div>
		<!-- End Column One; No Image -->

		<!-- Begin Column Three; Image Here -->
			<div class="column three"></div>
				<div class="column" style="background:url(images/wazee.jpg);"></div>
				<?php the_field('home-column-3-image'); ?>
			</div>
		<!-- End Column Three; Image Here -->

		<!--  Begin Column One; Image Here -->
			<div class="column one"></div>
				<div class="column" style="background:url(images/opolo.jpg);"></div>
				<?php the_field('home-column-1-image'); ?>
			</div>
		<!--  End Column One; Image Here -->
<!-- End Fourth Row Here -->

<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
