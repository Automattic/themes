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
	'content'    => '<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:heading {"level":4,"className":"is-style-skatepark-heading-border"} -->
		<h4 class="is-style-skatepark-heading-border">' . esc_html__( 'Visiting Coaches', 'skatepark' ) . '</h4>
		<!-- /wp:heading -->
		<!-- wp:heading --><h2>' . esc_html__( 'Rodney Mullen. Paul Rodriguez. Bucky Lasek. Bob Burnquist. Tony Hawk. Ryan Sheckler. Eric Koston. Bam Margera. Chris Cole. Andrew Reynolds.', 'skatepark' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'See All Faculty', 'skatepark' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group -->'
);
