<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Radcliffe 2
 */

?>

<?php if ( radcliffe_2_has_post_thumbnail() ) : ?>
	<div class="entry-thumbnail" <?php radcliffe_2_background_image(); ?>></div>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php radcliffe_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;

		the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'radcliffe-2' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'radcliffe-2' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php radcliffe_2_author_bio(); ?>

		<div class="entry-links">
			<?php radcliffe_2_entry_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
