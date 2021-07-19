<?php
/**
 * Cover block with heading.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Many Pink Squares Overlapped', 'quadrat' ),
	'categories' => array( 'theme-images' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/many-pink-squares-overlapped.png" alt=""/></figure>
	<!-- /wp:image -->',
);
