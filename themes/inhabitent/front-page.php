<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="home-hero hero-image-full-page">
			<div class="header-title-wrapper">
				<img><img src="<?php echo get_template_directory_uri() . '/images/' ?>inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co Logo"/></img>
			</div>
		</div>

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<!-- SHOP -->
			<section class="shop">
				<h1>Shop Stuff</h1>
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
						<div class="shop-category border-box-thick-top" >

							<div class="shop-category-image">
								<img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name . ' category'; ?>"/>
							</div>

							<p class="shop-category-description"><?php echo $term->description ?></p>

							<div class="btn btn-green">
								<!-- <p> -->
									<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name . ' Stuff'; ?></a>
								<!-- </p> -->
							</div> <!-- shop-category-link -->

						</div> <!-- shop-category -->
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
											
			<!-- JOURNAL -->
			<section class="journal">
				<h1>Inhabitent Journal</h1>
				<?php /* Retrieve Journal Posts Loop */ ?>
				<?php
					$args = array( 
										'post_type' => 'post',
										'order' => 'DESC',
										'posts_per_page' => '3' );
					$journal_posts = new WP_Query( $args ); // instantiate our object
				?>

				<?php if ( $journal_posts->have_posts() ) : ?>
					
					<div class="journal-posts-area">

						<?php /* Process Posts */ ?>
						<?php while ( $journal_posts->have_posts() ) : $journal_posts->the_post(); ?>

								<div class="journal-post-block">
										<?php if( has_post_thumbnail() ) : ?>
											<div class="journal-post-block__thumbnail">
												<?php the_post_thumbnail('large'); ?>
											</div>
										<?php endif; ?>

										<div class="journal-post-block__text border-box-thick-top">
											<div class="entry-meta">
												<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
											</div><!-- .entry-meta -->
											<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

											<div class="btn btn-black uppercase">
												<!-- <p> -->
													<a href="<?php echo get_post_permalink( $journal_posts->id) ; ?>">Read Entry</a>
												<!-- </p> -->
											</div>

										</div>
								 </div> <!--journal-post-block -->

						<?php endwhile; ?>
					</div>

			</section> <!-- END OF JOURNAL -->
						
			<!-- ADVENTURES -->
			<section class="adventures">
				<h1>Latest Adventures</h1>


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
