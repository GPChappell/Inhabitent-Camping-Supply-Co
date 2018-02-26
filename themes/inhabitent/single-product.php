<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area fixed-width-content">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="product-image-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
						<img src="<?php the_post_thumbnail_url(); ?>"/>
					<?php endif; ?>
				</div>

				<div class="product-text-wrapper">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="product-price"><?php echo '$' . CFS()->get( 'price' ); ?></p>
					<p><?php echo wp_strip_all_tags( get_the_content() ); ?></p>
					
					<div class="btn btn-black uppercase">
							<a href=""><i class="fab fa-facebook-f fa-sm"></i>Like</a>
					</div>
					<div class="btn btn-black uppercase">
							<a href=""><i class="fab fa-twitter fa-sm"></i>Tweet</a>
					</div>
					<div class="btn btn-black uppercase">
							<a href=""><i class="fab fa-pinterest fa-sm"></i>Like</a>
					</div>

				</div><!-- .product-text-wrapper -->

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
