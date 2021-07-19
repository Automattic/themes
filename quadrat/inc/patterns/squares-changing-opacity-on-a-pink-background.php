<?php
/**
 * Image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Squares Changing Opacity', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/squares-changing-opacity-on-a-pink-background.png" alt=""/></figure>
	<!-- /wp:image -->',
);

