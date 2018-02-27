<?php
/**
 * @package Canard
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="post-link" href="<?php echo esc_url( canard_get_link_url() ); ?>" target="_blank"><span class="genericon genericon-link"><span class="screen-reader-text"><?php printf( __( 'External link to %s', 'canard' ), the_title( '', '', false ) ); ?></span></span></a>

	<header class="entry-header">
		<?php
			canard_entry_categories();
			the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( canard_get_link_url() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<div class="entry-meta">
		<?php canard_entry_meta(); ?>
	</div><!-- .entry-meta -->
</article><!-- #post-## -->
