<?php
/**
 * The template used for displaying testimonials.
 *
 * @package Ixion
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'widget' ); ?>>
	<div class="testimonial-entry">
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

		<?php the_title( '<header class="entry-header"><h2 class="entry-title">', '</h2></header>' ); ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'ixion-avatar' ); ?>
			</div>
		<?php else : ?>
			<span class="quote"></span>
		<?php endif; ?>

		<?php edit_post_link( esc_html__( 'Edit', 'ixion' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	</div>
</article>
