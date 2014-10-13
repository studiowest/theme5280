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

				<<?php
    // The Arguments
    $args = array(
        'post_type' => 'logos',
        'posts_per_page' => 3
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>
<!-- Begin Column One -->
<div class="column one">
    <img src="<?php the_field('web_image'); ?>" />
    <img src="<?php the_field('web_image'); ?>" />
    <img src="<?php the_field('web_image'); ?>" />
</div>
<!-- End Column One -->
<?php
    endwhile;
    wp_reset_postdata();
?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
