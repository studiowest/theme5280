<?php
/**
* Template Name: Illustrations
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
					<div class="column one illustration-page" style="background:url(<?php the_field('work_illustration_image-1'); ?>);">
						<span>Illustrations</span>
					</div>
					<!--  End Column One; Image Here -->
				</div>
<!-- End First Row Here -->

					
<!-- Second Row Here -->
				<div class="row">

					<!--  Begin Column One Third; Image Here -->
					<div class="column one-third illustration-page" style="background:url(<?php the_field('work_illustration_image-2'); ?>);">
						<span>Illustrations</span>
				    </div>
					<!--  End Column One Third; Image Here -->

					<!--  Begin Column Two Thirds; Image Here -->
					<div class="column two-thirds illustration-page" style="background:url(<?php the_field('work_illustration_image-3'); ?>);">
						<span>Illustrations</span>
					</div>	
					<!--  End Column Two Thirds; Image Here -->
				</div>
<!-- End Second Row Here -->			

<!-- Third Row Here -->
				<div class="row">

					<!--  Begin Column One Third; Image Here -->
					<div class="column one-third illustration-page" style="background:url(<?php the_field('work_illustration_image-4'); ?>);">
						<span>Illustrations</span>
					</div>
					<!--  End Column One Third; Image Here -->

					<!--  Begin Column Two Thirds; Image Here -->
					<div class="column two-thirds illustration-page"></div>
						<span>Illustrations</span>
					</div>	
					<!--  End Column Two Thirds; Image Here -->
				</div>
<!-- End Third Row Here -->



				<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
