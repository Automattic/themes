<?php
/**
 * An image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Orange Triangle in Purple Background', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/orange-triangle-in-purple-background.png" alt=""/></figure>
	<!-- /wp:image -->',
);
