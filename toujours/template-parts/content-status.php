<?php
/**
 * Template part for displaying status format posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toujours
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_sticky() && is_home() ) { ?>
		<span class="featured-post"><?php esc_html_e( 'Featured', 'toujours' ); ?></span>
	<?php } ?>

	<?php if ( '' !== $post->post_content ) { ?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'toujours' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'toujours' ) . '</span>',
					'after'  => '</div>',
					'pagelink' => '<span class="page-links-num">%</span>'
				) );
			?>

		</div><!-- .entry-content -->
	<?php } ?>

	<footer class="entry-footer">

		<?php if ( ! is_single() ) {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} ?>

		<div class="entry-meta">
			<?php
				toujours_post_format();
				toujours_posted_on();
				toujours_comment_link();
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'toujours' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link"><span class="sep">&bull;</span>','</span>'
				);
			?>
		</div><!-- .entry-meta -->

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
