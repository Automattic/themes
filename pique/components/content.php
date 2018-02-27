<?php
/**
 * Template part for displaying posts.
 *
 * @package Pique
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	// Set the post thumbnail as the background of the panel
	if ( pique_has_post_thumbnail() ) :
		$thumbnail = pique_get_attachment_image_src( $post->ID, get_post_thumbnail_id( $post->ID ), 'pique-hero' ); ?>
		<div class="pique-panel-background" style="background-image:url(<?php echo esc_url( $thumbnail ); ?>)"></div>
	<?php endif; ?>

	<?php //echo get_post_format(); ?>
	<div class="pique-panel-content">
		<?php

		$show_title = array( 'image', 'gallery', 'audio', 'video', 'aside', 'status', 'link', 'quote' );
		if ( in_array( get_post_format(), $show_title ) ) :
		endif;
		?>
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="'. esc_url( get_the_permalink() ) .'">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			// For certain post types, we're going to display the excerpt
			if ( ! get_post_format() || 'chat' === get_post_format() ) :
				the_excerpt();
			else : // Otherwise, it makes more sense to show the full content
				the_content();
			endif;
			?>

			<div class="entry-meta">
				<?php pique_posted_on(); ?>
			</div><!-- .entry-meta -->

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pique' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php pique_edit_link( get_the_ID() ); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .pique-panel-content -->
</article><!-- #post-## -->
