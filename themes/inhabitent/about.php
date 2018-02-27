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
				<h1><?php echo get_the_title( get_the_ID() );?></h1>
			</div>
		</div>
		<main id="main" class="site-main fixed-width-content" role="main">
			<div class="static-page-text-wrapper" >
				<?php echo CFS()->get( 'our_story' ); ?>
			</div>
			<div class="static-page-text-wrapper" >
				<?php echo CFS()->get( 'our_team' ); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
