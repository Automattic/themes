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
		<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":4,"className":"is-style-skatepark-heading-border"} -->
		<h4 class="is-style-skatepark-heading-border">' . esc_html__( 'Visiting Coaches', 'skatepark' ) . '</h4>
		<!-- /wp:heading -->
		<!-- wp:heading --><h2>' . esc_html__( 'Rodney Mullen. Paul Rodriguez. Bucky Lasek. Bob Burnquist. Tony Hawk. Ryan Sheckler. Eric Koston. Bam Margera. Chris Cole. Andrew Reynolds.', 'skatepark' ) . '</h2>
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
		<!-- /wp:columns -->'
);
