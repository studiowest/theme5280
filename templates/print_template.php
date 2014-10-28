<?php
/**
* Template Name: Print
*
*
* @package _s
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>




<!-- First Row Here -->
				<div class="row">

					<!--  Begin Column One; Image Here -->
					<div class="column one logo-page" style="background:url(<?php the_field('work_logo_image-1'); ?>);">
						<span>Print</span>
					</div>
					<!--  End Column One; Image Here -->

					<!--  Begin Column Two; Image Here -->
					<div class="column two logo-page" style="background:url(<?php the_field('work_logo_image-2'); ?>);">
						<span>Logos</span>

					<div class="column two logo-page" style="background:url(<?php the_field('work_logo_image-2'); ?>);">
						<span>Logos</span>	

					</div>
					<!--  End Column Two; Image Here -->

				</div>
<!-- End First Row Here -->

					
<!-- Second Row Here -->
				<div class="row">

					<!--  Begin Column One; Image Here -->
					<div class="column two logo-page" style="background:url(<?php the_field('work_logo_image-2'); ?>);">
						<span>Logos</span>

					<div class="column two logo-page" style="background:url(<?php the_field('work_logo_image-2'); ?>);">
						<span>Logos</span>	

					</div>
					<!--  End Column One; Image Here -->

					<!--  Begin Column Two; Image Here -->
					<div class="column one logo-page" style="background:url(<?php the_field('work_logo_image-1'); ?>);">
						<span>Print</span>
					</div>
					<!--  End Column Two; Image Here -->	

				</div>
<!-- End Second Row Here -->			





				<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
