<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area fixed-width-content header-offset">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-title-wrapper">
				<h1>Latest Adventures</h1>
			</header>

			<?php /* Start the Loop */ ?>

			<section class="adventure-flex">
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="adventure-item">

						<div class="adventure-item-image">
							<?php if ( has_post_thumbnail() ) : ?>
								<img class="full-page-hero" src="<?php the_post_thumbnail_url(); ?>"/>
							<?php endif; ?>
						</div>
						<div class="adventure-item-text-wrapper">
							<h2><?php the_title(); ?></h2>
							<div class="btn btn-white uppercase">
									<a href="<?php echo get_the_permalink();?>">Read More</a>
							</div>
						</div>
						
					</div>

				<?php endwhile; ?> <!-- End Post Loop -->
			</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
