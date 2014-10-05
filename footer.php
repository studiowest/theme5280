<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class= row >
		<div class= row >

			<img src goes here>

			add nav footer (social) from function.php

			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

			<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>

			<p>Copyright &copy; <?php echo date("2014"); ?> <?php bloginfo('swedesign.co'); ?> All Rights Reserved.</p>

	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
