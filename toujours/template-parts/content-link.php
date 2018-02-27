<?php
/**
 * Template part for displaying link format posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toujours
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="featured-image">
			<span>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'toujours-featured' ); ?></a>
			</span>
		</div>
	<?php } ?>

	<header class="entry-header">
		<?php if ( is_sticky() && is_home() ) { ?>
			<span class="featured-post"><?php esc_html_e( 'Featured', 'toujours' ); ?></span>
		<?php } ?>

		<?php if ( ! is_single() ) {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				toujours_posted_on();
				toujours_comment_link();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


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
		<?php toujours_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
