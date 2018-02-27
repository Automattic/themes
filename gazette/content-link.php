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

		<a class="post-link" href="<?php echo esc_url( gazette_get_link_url() ); ?>" target="_blank"><span class="genericon genericon-link"><span class="screen-reader-text"><?php printf( __( 'External link to %s', 'gazette' ), the_title( '', '', false ) ); ?></span></span></a>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark" target="_blank">', esc_url( gazette_get_link_url() ) ), '</a></h1>' ); ?>

		<div class="entry-meta">
			<?php gazette_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
