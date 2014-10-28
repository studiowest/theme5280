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
			<div class="row homepage-feature" style="background-image: url(<?php the_field('home_portfolio_image'); ?>);"></div>
			<!-- End Full Image Portfolio Collage -->

			<div class="row">
				<!-- Begin Headline -->
				<h1><?php the_field('home_heading'); ?><h1>
				<!-- End Headline -->

				<!-- Begin Portfolio Description Area -->
				<p><?php the_field('home_description'); ?></p>
				<!-- End Portfolio Description Area -->
			</div>

<!-- First Row Here -->
				<div class="row">

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth portfolio-preview" style="background:url(<?php the_field('work_logo_image-1'); ?>);">
						<span>Logos</span>
					</div>
					<!--  End Column One Fifth; Image Here -->

					<!--  Begin Column Three Fifths; Image Here -->
					<div class="column three-fifths portfolio-preview" style="background:url(<?php the_field('work_illustration_image-1'); ?>);">
						<span>Illustrations</span>
					</div>
					<!--  End Column Three Fifths; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth portfolio-preview"></div>
					<!--  End Column One Fifth; Image Here -->

				</div>
<!-- End First Row Here -->

<!-- Second Row Here -->
				<div class="row">

					<!--  Begin Column Three Fifths; Image Here -->
					<div class="column three-fifths portfolio-preview" style="background:url(<?php the_field('work_illustration_image-2'); ?>);">
						<span>Illustrations</span>
					</div>
					<!--  End Column Three Fifths; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth portfolio-preview"></div>
					<!--  End Column One Fifth; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth portfolio-preview" style="background:url(<?php the_field('work_logo_image-2'); ?>);">
						<span>Logos</span>
					</div>
					<!--  End Column One Fifth; Image Here -->

				</div>
<!-- End Second Row Here -->

<!-- Begin Third Row Here -->
			<div class="row">

				<!--  Begin Column One Fifth; Image Here -->

				<div class="column fifth portfolio-preview" style="background:url(<?php the_field('work_print_image-1'); ?>);">
						<span>Print</span>
				</div>
				<!--  End Column One Fifth; Image Here -->

				<!--  Begin Column One Fifth; Image Here -->

				<div class="column fifth portfolio-preview"></div>
				<!--  End Column One Fifth; Image Here -->

				<!--  Begin Column Three Fifths; Image Here -->
				<div class="column three-fifths portfolio-preview" style="background:url(<?php the_field('work_illustration_image-3'); ?>);">
						<span>Illustrations</span>
				</div>
				<!--  End Column Three Fifths; Image Here -->
			</div>
<!-- End Third Row Here -->

<!-- Begin Fourth Row Here -->
				<div class="row">

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth portfolio-preview"></div>
					<!--  End Column One Fifth; Image Here -->

					<!--  Begin Column Three Fifths; Image Here -->
					<div class="column three-fifths portfolio-preview" style="background:url(<?php the_field('work_illustration_image-4'); ?>);">
						<span>Illustrations</span>
					</div>
					<!--  End Column Three Fifths; Image Here -->

					<!--  Begin Column One Fifth; Image Here -->
					<div class="column fifth portfolio-preview" style="background:url(<?php the_field('work_web_image-1'); ?>);">
						<span>Web</span>
					</div>
					<!--  End Column One Fifth; Image Here -->

				</div>
<!-- End Fourth Row Here -->

				<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
