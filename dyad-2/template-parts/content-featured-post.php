<?php
/**
 * Banner / Featured content
 *
 * @package Dyad
 */

?>


<article data-id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * Post media
	 */
	?>

	<div class="site-banner-media">
		<?php $thumb = dyad_2_get_attachment_image_src( $post->ID, get_post_thumbnail_id( $post->ID ), 'dyad-2-banner' ); ?>

		<div class="site-banner-thumbnail" title="<?php the_title_attribute(); ?>" <?php if ( dyad_2_has_post_thumbnail() ) { echo 'style="background-image: url(' . esc_url( $thumb ) . ');"'; } ?>></div>
	</div><!-- .site-banner-media -->

	<?php
	/**
	 * Post title
	 */
	?>

	<div class="site-banner-header">
		<span class="banner-featured"><?php esc_html_e( 'Featured', 'dyad-2' ); ?></span>
		<h1 class="entry-title">
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
		<?php the_excerpt() ?>
	</div><!-- .site-banner-header -->
</article>