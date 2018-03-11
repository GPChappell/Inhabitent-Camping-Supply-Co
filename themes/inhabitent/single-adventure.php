<?php
/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php if ( has_post_thumbnail() ) : ?>
			<img class="full-page-hero" src="<?php the_post_thumbnail_url( 'full' ); ?>"/>
		<?php endif; ?>

		<main id="main" class="site-main fixed-width-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="static-page-text-wrapper">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<span class="byline" >by <?php echo get_the_author(); ?></span>
				<p><?php echo get_the_content(); ?></p>
			
				<!-- SOCIAL BUTTONS -->
				<div class="btn btn-black uppercase">
					<a href=""><i class="fab fa-facebook-f fa-sm"></i>Like</a>
				</div>
				<div class="btn btn-black uppercase">
					<a href=""><i class="fab fa-twitter fa-sm"></i>Tweet</a>
				</div>
				<div class="btn btn-black uppercase">
					<a href=""><i class="fab fa-pinterest fa-sm"></i>Like</a>
				</div>
			</div>



			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
