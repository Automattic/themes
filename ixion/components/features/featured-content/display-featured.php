<?php
/**
 * The template for displaying featured content
 *
 * @package Ixion
 */

$featured_posts = ixion_get_featured_posts();

if ( empty( $featured_posts ) ) {
	return;
} ?>

<div id="featured-content" class="featured-content">
	<?php

		foreach ( $featured_posts as $post ) {

			setup_postdata( $post );

			get_template_part( 'components/features/featured-content/content', 'featured' );
		}

		wp_reset_postdata();
	?>
</div><!-- #featured-content -->
