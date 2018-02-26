<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area fixed-width-content header-offset">
		<main id="main" class="site-main" role="main">

			<div class="archive-title-wrapper">
				<h1>Shop Stuff</h1>

					<?php /* Retrieve Product Type Loop */ ?>
					<?php
						$args = array(
											'taxonomy' => 'product_type',
											'hide_empty' => 0
											);
						$terms = get_terms( $args );
					?>
					<ul class="nav">
						<?php foreach ( $terms as $term ) : ?>
							<li><p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name?></a></p></li>
						<?php endforeach; wp_reset_postdata(); ?>
				</div>			

		<?php if ( have_posts() ) : ?>

			<div class="product-display-area flex-area">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article class="product-block flex-block">

						<?php if ( has_post_thumbnail() ) : ?>

						<div class="product-image-wrapper">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php the_post_thumbnail_url(); ?>"/>
							</a>
						</div>
						
						<?php endif; ?>

						<div class="product-text border-box-thick-top">
							<div class="label">
								<p><?php the_title(); ?></p>
								<p><?php echo '$' . CFS()->get( 'price' ); ?></p>
							</div>
						</div>

					</article><!-- #post-## -->

				<?php endwhile; ?>

			<?php else : ?>		

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			</div>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
