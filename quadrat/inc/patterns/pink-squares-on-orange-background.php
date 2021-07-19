<?php
/**
 * Image block pattern.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Pink Squares on Orange Background', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/pink-squares-on-orange-background.png" alt=""/></figure>
	<!-- /wp:image -->',
);

