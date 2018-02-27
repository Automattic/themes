<?php
/**
 * The template used for displaying testimonials.
 *
 * @package Components
 */
?>
<div id="post-<?php the_ID(); ?>" class="hentry testimonial carousel-cell">
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail"><?php the_post_thumbnail( 'textbook-thumbnail-avatar' ); ?></div>
		<?php endif; ?>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<?php edit_post_link( esc_html__( 'Edit', 'textbook' ), '<span class="edit-link">', '</span>' ); ?>
	</header>
</div><!-- #post-## -->
