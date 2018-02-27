<?php
/**
 * Template part for displaying video format posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toujours
 */

?>

<?php
	/* translators: %s: Name of current post */
	$content_text = sprintf(
		wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'toujours' ), array( 'span' => array( 'class' => array() ) ) ),
		the_title( '<span class="screen-reader-text">"', '"</span>', false )
	);


	$content = apply_filters( 'the_content', get_the_content( $content_text ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );

		if ( ! empty( $video ) ) {
			foreach ( $video as $video_html ) {
				$content = str_replace( $video_html, '', $content );
				?>
				<div class="entry-video jetpack-video-wrapper">
					<?php echo $video_html; ?>
				</div><!-- .entry-video.jetpack-video-wrapper -->
				<?php
			} // endforeach
		} // endif !empty ( $media )
	?>

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

			<?php echo $content; ?>

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
