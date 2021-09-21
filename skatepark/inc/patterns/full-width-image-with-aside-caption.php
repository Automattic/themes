<?php
/**
 * Full width image with aside caption.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Full width image with aside caption', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:image {"align":"full","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000","#BFF5A5"]},"border":{"radius":"0px"}},"className":"is-style-skatepark-aside-caption"} -->
	<figure class="wp-block-image alignfull size-large is-style-skatepark-aside-caption" style="border-radius:0px"><img src="' . get_stylesheet_directory_uri() . '/assets/images/skatepark.jpg" alt="' . esc_attr__( "A skateboarder does a grab trick in a bowl-shaped skate park. In the background is a watching crowd, palm trees, and the ocean.", 'skatepark' ) . '"/><figcaption>' . esc_html__( "Learn the basics of skating along with a group of your peers. More advanced at skating? Our skateboarding coaches will work with you 1:1 to advance your technique.", 'skatepark' ) . '</figcaption></figure>
	<!-- /wp:image -->',
);
