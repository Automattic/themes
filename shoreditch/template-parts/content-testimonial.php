<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="testimonial-entry-content">
		<?php the_content(); ?>
	</div><!-- .testimonial-entry-content -->

	<?php if ( is_single() ) : ?>

		<?php the_title( '<span class="testimonial-entry-title">&#8213; ', '</span>' ); ?>

		<span class="testimonial-featured-image" aria-hidden="true">
			<?php the_post_thumbnail( 'thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
		</span>

	<?php else : ?>

		<?php the_title( '<span class="testimonial-entry-title">&#8213; <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></span>' ); ?>

		<a class="testimonial-featured-image" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php the_post_thumbnail( 'thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
		</a>

	<?php endif; ?>
</article><!-- #post-## -->
