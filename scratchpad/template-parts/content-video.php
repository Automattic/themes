<?php
/**
 * Template part for displaying posts with the video format.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scratchpad
 */

/* translators: %s: Name of current post */
$content_text = sprintf(
	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'scratchpad' ), array( 'span' => array( 'class' => array() ) ) ),
	the_title( '<span class="screen-reader-text">"', '"</span>', false )
);
$content = apply_filters( 'the_content', get_the_content( $content_text ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php scratchpad_sticky(); ?>

	<?php
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );

		if ( ! empty( $video ) ) {
			foreach ( $video as $video_html ) {
				$content = str_replace( $video_html, '', $content );
				?>
				<div class="entry-video jetpack-video-wrapper">
					<?php echo $video_html; ?>
					<div class="movie-tickets">
						<?php get_template_part( 'images/inline', 'movie-ticket.svg' ); ?>
						<?php get_template_part( 'images/inline', 'movie-ticket.svg' ); ?>
					</div><!-- .movie-tickets -->
				</div><!-- .entry-video.jetpack-video-wrapper -->
			<?php
			} // endforeach
		} // endif !empty ( $media )
	?>

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php scratchpad_post_format(); ?>
			<?php scratchpad_posted_on(); ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'scratchpad' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link"><span class="sep">&bull;</span>',
					'</span>'
				);
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php if ( post_password_required() ) {
		the_content();
	} ?>
</article><!-- #post-## -->
