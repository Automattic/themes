<?php
/**
 * About.
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'About', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"300"}},"fontSize":"large"} -->
		<h3 class="has-large-font-size" style="font-weight:300">' . esc_html__( 'Mary Han is a award-winning creative director, designer, photographer and visual artist based in Singapore.', 'videomaker' ) . '</h3>
		<!-- /wp:heading --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/images/team-1-edited.jpg" alt="' . esc_attr__( 'Photograph of a person holding a camera', 'videomaker' ) . '" /></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size"><a href="#">' . esc_html__( 'The Crew', 'videomaker' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/images/philosophy-1-edited.jpg" alt="' . esc_attr__( 'Photograph of a man holding a camera', 'videomaker' ) . '" /></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size"><a href="#">' . esc_html__( 'Our Philosophy', 'videomaker' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/images/blog-edited.jpg" alt="' . esc_attr__( 'Photograph of a person standing and holding a camera in a city', 'videomaker' ) . '" /></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size"><a href="#">' . esc_html__( 'Blog', 'videomaker' ) . '</a></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->',
);
