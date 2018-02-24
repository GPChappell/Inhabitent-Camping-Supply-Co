<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<div class="home-hero hero-image-full-page">
				<div class="header-title-wrapper">
					<img><img src="<?php echo get_template_directory_uri() . '/images/' ?>inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co Logo"/></img>
				</div>
			</div>

			<?php /* SHOP CATEGORY */ ?>
			<h2>Shop Stuff</h2>
			<div class="shop-category-area">
				<?php /* Retrieve Product Type Loop */ ?>
				<?php
					$args = array(
										'taxonomy' => 'product_type',
										'hide_empty' => 0
										);
					$terms = get_terms( $args );
				?>
				<?php foreach ( $terms as $term ) : ?>
					<div class="shop-category" >

						<div class="shop-category-image">
							<img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name . ' category'; ?>"/>
						</div>

						<p class="shop-category-description"><?php echo $term->description ?></p>

						<div class="btn btn-green">
							<p>
								<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name . ' Stuff'; ?></a>
							</p>
						</div> <!-- shop-category-link -->

					</div> <!-- shop-category -->
				<?php endforeach; wp_reset_postdata(); ?>
			</div>


			<h2>Inhabitent Journal</h2>
			<?php /* Retrieve Journal Loop */ ?>
			<?php
				$args = array( 
									'post_type' => 'post',
									'order' => 'DESC',
									'posts_per_page' => '3' );
				$journal_posts = new WP_Query( $args ); // instantiate our object
			?>

			<?php if ( $journal_posts->have_posts() ) : ?>

				<section class="journal-posts-area">

					<?php while ( $journal_posts->have_posts() ) : $journal_posts->the_post(); ?>
							<div class="journal-post">
									<?php if( has_post_thumbnail() ) : ?>
										<div class="journal-post__thumbnail">
											<?php the_post_thumbnail('large'); ?>
										</div>
									<?php endif; ?>
									<div class="entry-meta">
										<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
									</div><!-- .entry-meta -->
									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							</div>	
					<?php endwhile; ?>

				</section>

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
						<h2>No Journal posts found!</h2>
			<?php endif; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
