<?php
/**
 * Template Name: About
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="hero-image-full-page">
			<div class="header-title-wrapper">
				<h1><?php echo get_the_title(16);?></h1>
			</div>
		</div>
		<main id="main" class="site-main" role="main">
			<div>
				<p><?php echo CFS()->get( 'our_story' ); ?></p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
