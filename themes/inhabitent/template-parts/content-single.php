<?php
/**
 * Template part for displaying single posts.
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
				<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		</div>

</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?php echo wp_strip_all_tags( get_the_content() ) ?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
