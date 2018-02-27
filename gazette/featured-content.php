<?php
/**
 * The template for displaying featured content
 */
$featured_posts = gazette_get_featured_posts();
if ( empty( $featured_posts ) ) {
	return;
}
?>

<div id="featured-content" class="featured-content">
	<?php
		foreach ( $featured_posts as $post ) {
			setup_postdata( $post );

			 // Include the featured content template.
			get_template_part( 'content', 'featured-post' );
		}

		wp_reset_postdata();
	?>
</div><!-- #featured-content -->
