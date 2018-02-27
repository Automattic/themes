<?php
/**
 * Template part for displaying posts.
 *
 * @package Dyad
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
			$thumb = dyad_2_get_attachment_image_src( $post->ID, get_post_thumbnail_id( $post->ID ), 'dyad-2-thumbnails' );
			$thumb2 = dyad_2_get_attachment_image_src( $post->ID, get_post_thumbnail_id( $post->ID ), 'dyad-2-thumbnails-horz' );
		?>
		<div class="entry-media" style="background-image: url(<?php echo esc_url( $thumb ); ?>);">
			<div class="entry-media-thumb" style="background-image: url(<?php echo esc_url( $thumb2 ); ?>); "></div>
		</div>

	<div class="entry-inner">
		<div class="entry-inner-content">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</div><!-- .entry-inner-content -->
	</div><!-- .entry-inner -->

	<a class="cover-link" href="<?php the_permalink(); ?>"></a>
	<?php edit_post_link( esc_html__( 'Edit', 'dyad-2'), '<div class="edit-link">', '</div>' ); ?>
</article><!-- #post-## -->
