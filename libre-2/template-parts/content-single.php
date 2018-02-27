<?php
/**
 * Template part for displaying single posts.
 *
 * @package Libre 2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( libre_2_has_post_thumbnail() ) { ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'libre-2-post-thumbnail' ); ?>
		</div>
	<?php } ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php libre_2_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'libre-2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php libre_2_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php libre_2_author_bio(); ?>
</article><!-- #post-## -->
