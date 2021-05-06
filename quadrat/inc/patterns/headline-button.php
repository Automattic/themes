<?php
/**
 * Headline and button.
 *
 * @package Quadrat
 */

return array(
	'title'       => __( 'Headline and button', 'quadrat' ),
	'categories'  => array( 'quadrat' ),
	'content'     => '<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph -->
	<p>' . esc_html__( 'The Hosts', 'quadrat' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2>' . esc_html__( 'Samantha and Olivia are both writers and activists.', 'quadrat' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":36} -->
	<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'quadrat' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->',
);
