<?php
/**
 * Cover block with heading.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Circle Rolling Over a Triangle', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/circle-rolling-over-a-triangle.png" alt=""/></figure>
	<!-- /wp:image -->',
);
