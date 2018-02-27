<?php
/**
 * The template for displaying Featured Content
 *
 * @package Shoreditch
 */
$featured_posts = shoreditch_get_featured_posts();
if ( empty( $featured_posts ) ) {
	return;
}
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-wrapper">
		<?php
		foreach ( $featured_posts as $post ) {
			setup_postdata( $post );

			 // Include the featured content template.
			get_template_part( 'template-parts/content', 'featured-post' );
		}

		wp_reset_postdata();
		?>
	</div><!-- .featured-content-wrapper -->
</div><!-- #featured-content -->
