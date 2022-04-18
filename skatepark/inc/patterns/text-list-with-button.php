<?php
/**
 * Text list with Button.
 *
 * @package Skatepark
 * @since 1.0.0
 *
 */

return array(
	'title'      => __( 'Text List with Button', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group"><!-- wp:group -->
		<div class="wp-block-group"><!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator is-style-wide"/>
		<!-- /wp:separator -->
		
		<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"1em"}}}} -->
		<h4 id="visiting-coaches" style="margin-top:1em">' . esc_html__( 'Visiting Coaches', 'skatepark' ) . '</h4>
		<!-- /wp:heading --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- wp:heading --><h2>' . esc_html__( 'Steph Harper. Buddy Sellers. Mehmet Farrow. Bob Lopez. Tammy Habich. Tye Barclay. Kaden Price. Lily Rivera. Chris Wright. Sammy Sanchez.', 'skatepark' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'See All Faculty', 'skatepark' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->',
);
