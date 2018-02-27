<?php
/**
 * @package Canard
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && 'post' == get_post_type() && ( ! has_post_format() || has_post_format( 'image' ) || has_post_format( 'gallery' ) ) ) : ?>

		<?php
			if ( ! has_post_format() ) {
				echo '<a class="post-thumbnail" href="' . esc_url( get_permalink() ) . '">';
			} elseif ( has_post_format( 'image' ) || has_post_format( 'gallery' ) ) {
				echo '<div class="post-thumbnail">';
			}
			the_post_thumbnail( 'canard-post-thumbnail' );
		?>

		<?php if ( is_sticky() ) : ?>
			<span class="sticky-post"><span class="genericon genericon-pinned"><span class="screen-reader-text"><?php _e( 'Sticky post', 'canard' ); ?></span></span></span>
		<?php endif; ?>

		<?php
			if ( ! has_post_format() ) {
				echo '</a>';
			} elseif ( has_post_format( 'image' ) || has_post_format( 'gallery' ) ) {
				echo '</div>';
			}
		?>

	<?php endif; ?>

	<header class="entry-header">
		<?php
			canard_entry_categories();
			the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
	    <?php
	        if ( strpos( $post->post_content, '<!--more' ) ) {
	            the_content( sprintf(
	                /* translators: %s: Name of current post. */
	                wp_kses( __( 'Continue reading %s', 'canard' ), array( 'span' => array( 'class' => array() ) ) ),
	                the_title( '<span class="screen-reader-text">"', '"</span>', false )
	            ) );
	        } else {
	            the_excerpt();
	        }
	    ?>
	</div><!-- .entry-summary -->

	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php canard_entry_meta(); ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>
</article><!-- #post-## -->