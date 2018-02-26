<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area fixed-width-content">
		<main id="main" class="site-main" role="main">

		<?php /*Get page slug */ ?>
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

		<div class="archive-title-wrapper">
			<h1><?php echo $term->slug; ?></h1>
			<p class="product-type-description"><?php echo $term->description; ?></p>
		</div>

		<?php if ( have_posts() ) : ?>

			<div class="product-type-product-display-area flex-area">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article class="product-type-product-block flex-block">

						<?php if ( has_post_thumbnail() ) : ?>

						<div class="product-type-product-image-wrapper">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php the_post_thumbnail_url(); ?>"/>
							</a>
						</div>
						
						<?php endif; ?>

						<div class="product-type-product-text border-box-thick-top">
							<div class="label">
								<p><?php the_title(); ?></p>
								<p><?php echo '$' . CFS()->get( 'price' ); ?></p>
							</div>
						</div>

					</article><!-- #post-## -->

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

		<?php else : ?>		

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			</div>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
