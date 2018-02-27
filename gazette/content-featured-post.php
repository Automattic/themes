<?php
/**
 * The template for displaying featured posts on the front page
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
	<?php
		// Output the featured image.
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'gazette-featured-content-thumbnail' );
		}
	?>
	</a>

	<header class="entry-header">

		<div class="entry-meta">
			<?php gazette_entry_meta(); ?>
		</div><!-- .entry-meta -->

		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h1>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
