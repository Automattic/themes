<?php
/**
 * @package Gazette
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php gazette_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php if ( gazette_has_post_thumbnail() && ( ! has_post_format() || has_post_format( 'aside' ) || has_post_format( 'image' ) || has_post_format( 'gallery' ) ) ) : ?>
			<a class="post-thumbnail" href="<?php echo esc_url( get_permalink() ); ?>">
				<?php
					if ( has_post_format( 'image' ) || has_post_format( 'gallery' ) ) {
						the_post_thumbnail( 'gazette-post-thumbnail-square' );
					} else {
						the_post_thumbnail( 'gazette-post-thumbnail' );
					}
				?>
				<?php if ( is_sticky() ) : ?>
					<span class="sticky-post"><span class="genericon genericon-pinned"><span class="screen-reader-text"><?php _e( 'Sticky post', 'gazette' ); ?></span></span></span>
				<?php endif; ?>
			</a>
		<?php endif; ?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php gazette_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
	    <?php
	        if ( strpos( $post->post_content, '<!--more' ) ) {
	            the_content( sprintf(
	                /* translators: %s: Name of current post. */
	                wp_kses( __( 'Continue reading %s', 'gazette' ), array( 'span' => array( 'class' => array() ) ) ),
	                the_title( '<span class="screen-reader-text">"', '"</span>', false )
	            ) );
	        } else {
	            the_excerpt();
	        }
	    ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
