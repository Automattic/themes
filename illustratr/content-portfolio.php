<?php
/**
 * The template used for displaying projects on index view
 *
 * @package Illustratr
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="portfolio-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'illustratr-portfolio-featured-image' ); ?>
			</a>
		</div><!-- .portfolio-thumbnail -->
	<?php endif; ?>

	<header class="portfolio-entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>

		<?php echo get_the_term_list( get_the_ID(), 'jetpack-portfolio-type', '<span class="portfolio-entry-meta">', _x(', ', 'Used between list items, there is a space after the comma.', 'illustratr' ), '</span>' ); ?>
	</header><!-- .portfolio-entry-header -->
</article><!-- #post-## -->
