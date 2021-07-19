<?php
/**
 * Image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'White and Orange Squares', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/white-and-orange-squares-on-light-purple-background.png" alt=""/></figure>
	<!-- /wp:image -->',
);

