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
	'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
	<figure class="wp-block-image size-large"><img src="https://geologistdemo.files.wordpress.com/2021/09/gem-02.jpg?w=2048" alt=""/></figure>
	<!-- /wp:image -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":3} -->
	<h3>' . esc_html__( 'Geologist' ) .'</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"tiny"} -->
	<p class="has-tiny-font-size">' . esc_html__( "Geologist is a blog dedicated to everything buried under the earth's surface." ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
