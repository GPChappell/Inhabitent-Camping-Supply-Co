<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area fixed-width-content primary-sidebar">
		<main id="main" class="site-main main-sidebar header-offset static-page" role="main">

		<h1>Find Us</h2>
		<iframe src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;q=1490%20W%20Broadway+(Inhabitent%20Camping%20Supply%20Co.)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" width="100%" height="300" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe>
		<h2>We take camping very seriously</h2>
		<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we've got your covered. Please contact us below with any questions comments or suggestions.</p>
		<h2>Send us mail!</h2>
		<?php echo do_shortcode('[contact-form-7 id="210" title="Contact"]'); ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
