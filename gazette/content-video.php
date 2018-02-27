<?php
/**
 * @package Gazette
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php gazette_entry_meta(); ?>
		</div><!-- .entry-meta -->

		<?php
			$content = apply_filters( 'the_content', get_the_content() );
			$media = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
			if ( ! empty( $media ) ) {
				printf( '<div class="post-media jetpack-video-wrapper">%s</div>', $media[0] );
			}
		?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<div class="entry-meta">
			<?php gazette_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
