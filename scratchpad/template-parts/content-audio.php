<?php
/**
 * Template part for displaying posts with the audio format.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scratchpad
 */

$content = apply_filters( 'the_content', get_the_content() );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php scratchpad_sticky(); ?>

	<?php
		$audio = get_media_embedded_in_content( $content, array( 'audio' ) );

		if ( ! empty( $audio ) ) {
			foreach ( $audio as $audio_html ) {
				$content = str_replace( $audio_html, '', $content );
				?>

				<div class="entry-audio">
					<?php echo $audio_html; ?>
				</div><!-- .entry-audio -->

			<?php
				break;
			 } //foreach
		} // endif !empty ( $media )
	?>

	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
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
	</header><!-- .entry-header -->
</article><!-- #post-## -->
