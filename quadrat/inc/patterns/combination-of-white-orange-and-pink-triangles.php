<?php
/**
 * Image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Combination of White Orange and Pink Triangles', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/combination-of-white-orange-and-pink-triangles.png" alt=""/></figure>
	<!-- /wp:image -->',
);
