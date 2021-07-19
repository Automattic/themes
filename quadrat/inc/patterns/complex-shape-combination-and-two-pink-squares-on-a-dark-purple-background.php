<?php
/**
 * Image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Complex Shape Combination', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/complex-shape-combination-and-two-pink-squares-on-a-dark-purple-background.png" alt=""/></figure>
	<!-- /wp:image -->',
);
