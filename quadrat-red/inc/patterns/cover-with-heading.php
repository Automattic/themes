<?php
/**
 * Cover block with heading.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Cover block with heading', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":700,"align":"wide","className":"is-style-quadrat-cover-diamond"} -->
	<div class="wp-block-cover alignwide has-background-background-color has-background-dim is-style-quadrat-cover-diamond" style="min-height:700px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","textColor":"primary"} -->
	<h2 class="has-text-align-center has-primary-color has-text-color">' . esc_html__( 'Episode 3: A Cycle of Emotions', 'quadrat' ) . '</h2>
	<!-- /wp:heading --></div></div>
	<!-- /wp:cover -->',
);
