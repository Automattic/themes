<?php
/**
 * @package Publication
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<a class="post-thumbnail" href="<?php echo esc_url( get_permalink() ); ?>">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) ); ?>
		</a>
	<?php endif; ?>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php publication_categories(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
	    <?php
	        if ( strpos( $post->post_content, '<!--more' ) ) {
	            the_content( sprintf(
	                /* translators: %s: Name of current post. */
	                wp_kses( __( 'Continue reading %s', 'publication' ), array( 'span' => array( 'class' => array() ) ) ),
	                the_title( '<span class="screen-reader-text">"', '"</span>', false )
	            ) );
	        } else {
	            the_excerpt();
	        }
	    ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->