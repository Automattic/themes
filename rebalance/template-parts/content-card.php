<?php
/**
 * Template part for displaying projects and posts in a grid display for masonry and infinite-scroll
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rebalance
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( rebalance_has_post_thumbnail() ) { ?>
	<div class="entry-image-section">
		<a href="<?php the_permalink() ?>" class="entry-image-link">
			<figure class="entry-image">
				<?php the_post_thumbnail( 'rebalance-archive' ); ?>
			</figure>
		</a>
	</div>
	<?php } ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<?php // Only show excerpts and meta data for blog posts
		if ( 'jetpack-portfolio' != get_post_type() ) { ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<?php } ?>

	<footer class="entry-meta">
		<?php rebalance_entry_footer(); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
