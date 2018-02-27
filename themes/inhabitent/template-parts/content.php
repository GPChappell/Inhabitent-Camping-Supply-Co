<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="single-image-wrapper">
			<?php if ( has_post_thumbnail() ) : ?>
				<img src="<?php the_post_thumbnail_url(); ?>"/>
			<?php endif; ?>
			<?php the_title( '<h1>', '</h1>' ); ?>
			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' );?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<div class="btn btn-black uppercase">
		<a href="<?php echo get_post_permalink() ; ?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
	</div>



</article><!-- #post-## -->
