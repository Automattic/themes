<?php
/**
 * Paragraph with quote.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Paragraph with quote', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:columns {"align":"wide","className":"paragraph-with-quote"} -->
	<div class="wp-block-columns alignwide paragraph-with-quote"><!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Another Heading', 'skatepark' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Add your company history here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet eros eget justo elementum interdum. Cras vestibulum nulla id aliquam rutrum. Vestibulum aliquet mauris ut augue ultrices facilisis. Vestibulum pretium ligula sed ipsum dapibus, tempus iaculis felis ornare. Morbi pretium sed est tincidunt hendrerit. Curabitur id elit scelerisque, pharetra tellus sit amet.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Aliquam consectetur tristique metus non pulvinar. Donec luctus magna quis justo tincidunt, eu euismod lacus faucibus. Cras eros risus, venenatis ut ante eu.', 'skatepark' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"><!-- wp:quote {"className":"is-style-side-quote"} -->
	<blockquote class="wp-block-quote is-style-side-quote"><p>' . esc_html__( 'A quote that is aligned right next to some normal paragraphs and headings', 'skatepark' ) . '</p><cite>' . esc_html__( '– Jane Doe', 'skatepark' ) . '</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);