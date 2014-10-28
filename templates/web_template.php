<?php
/**
* Template Name: Web
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
					<div class="column one logo-page" style="background:url(<?php the_field('work_web_image-1'); ?>);">
						<span>Web</span>
					</div>
					<!--  End Column One; Image Here -->

				</div>
<!-- End First Row Here -->

					
<!-- Second Row Here -->
				<div class="row">

					<!--  Begin Column One; Image Here -->
					<div class="column one logo-page" style="background:url(<?php the_field('work_web_image-4'); ?>);">
						<span>Web</span>
					</div>
					<!--  End Column One; Image Here -->

				</div>
<!-- End Second Row Here -->			

<!-- Third Row Here -->
				<div class="row">

					<!--  Begin Column One; Image Here -->
					<div class="column one logo-page" style="background:url(<?php the_field('work_web_image-7'); ?>);">
						<span>Web</span>
					</div>
					<!--  End Column One; Image Here -->

				</div>
<!-- End Third Row Here -->



				<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
