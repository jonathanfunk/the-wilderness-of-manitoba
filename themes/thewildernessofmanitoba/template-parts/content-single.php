<?php
/**
 * Template part for displaying single posts.
 *
 * @package The_Wilderness_Of_Manitoba
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php the_wilderness_of_manitoba_posted_on(); ?> / <?php the_wilderness_of_manitoba_comment_count(); ?> / <?php the_wilderness_of_manitoba_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php the_wilderness_of_manitoba_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
