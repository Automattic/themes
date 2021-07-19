<?php
/**
 * Image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Pink Square with Dark Shadow on Orange Background', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/pink-square-with-dark-shadow-on-orange-background.png" alt=""/></figure>
	<!-- /wp:image -->',
);

