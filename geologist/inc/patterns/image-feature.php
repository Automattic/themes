<?php
/**
 * Two posts with features images in a query block.
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Image feature', 'geologist' ),
	'categories' => array( 'geologist' ),
	'blockTypes' => array( 'core/image', 'core/columns' ),
	'content'    => '<!-- wp:image {"align":"wide","sizeSlug":"large"} -->
	<figure class="wp-block-image alignwide size-large"><img src="/assets/images/gem.jpeg" alt=""/></figure>
	<!-- /wp:image -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":3} -->
	<h3>' . esc_html__( 'Geologist', 'geologist' ) . '</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph -->
	<p>' . esc_html__( "Geologist is a blog dedicated to everything buried under the earth's surface.", 'geologist' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
