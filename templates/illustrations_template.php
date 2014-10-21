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




			<!-- First Row Here -->
				<div class="row">

					<!--  Begin Column One; Image Here -->
					<div class="column one" style="height: 100px; background:url(<?php the_field('work_logo_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One; Image Here -->
			<!-- End First Row Here -->
				</div>

			<!-- Second row Here -->
			<div class="row">
					<!--  Begin Column One Third; Image Here -->
					<div class="column one third" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column One Third; Image Here -->

					<!--  Begin Column Two Thirds; Image Here -->
					<div class="column two thirds" style="height: 100px; background:url(<?php the_field('work_square_image'); ?>);">
						<?php echo the_title(); ?>
					</div>
					<!--  End Column Two Thirds; Image Here -->
			<!-- End Second row Here -->
		</div>

		<!-- Third row Here -->
		<div class="row">
				<!--  Begin Column One Third; Image Here -->
				<div class="column one third" style="height: 100px; background:url(<?php the_field('work_illustration_image'); ?>);">
					<?php echo the_title(); ?>
				</div>
				<!--  End Column One Third; Image Here -->

				<!--  Begin Column Two Thirds; Image Here -->
				<div class="column two thirds" style="height: 100px; background:url(<?php the_field('work_square_image'); ?>);">
					<?php echo the_title(); ?>
				</div>
				<!--  End Column Two Thirds; Image Here -->
		<!-- End Third row Here -->
	</div>





			

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
