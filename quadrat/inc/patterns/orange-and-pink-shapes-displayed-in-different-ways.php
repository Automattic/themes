<?php
/**
 * An image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Orange and Pink Shapes', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/orange-and-pink-shapes-displayed-in-different-ways.png" alt=""/></figure>
	<!-- /wp:image -->',
);
