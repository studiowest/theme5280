<?php
/**
 * Template Name: Homepage
 *
 *
 * @package theme5280
 */
get_header(); ?>

<p>This is the front-page.php file.<p/>

<?php if ( have_posts() ): while have_posts() ) : the_post(); ?>

		<h3><?php the_title(); ?><h3>
		<?php the_content(); ?>
		<hr>

<?php endwhile;  else:?>
	<p>There are no posts or pages here</P>


<?php endif; ?>