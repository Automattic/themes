<?php
/**
 * The template used for displaying testimonials.
 *
 * @package Pique
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

  <footer class="entry-footer">
  	<?php if ( has_post_thumbnail() ) : ?>
  		<?php the_post_thumbnail( 'pique-thumbnail-avatar' ); ?>
  	<?php endif; ?>

    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
  </footer>

	<?php edit_post_link( __( 'Edit', 'pique' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
