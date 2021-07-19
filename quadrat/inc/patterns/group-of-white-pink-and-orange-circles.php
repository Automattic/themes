<?php
/**
 * Image block pattern. 
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Group of White, Pink, and Orange Circles', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/group-of-white-pink-and-orange-circles.png" alt=""/></figure>
	<!-- /wp:image -->',
);
