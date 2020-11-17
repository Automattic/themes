<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'monticello',
		array( 'label' => esc_html__( 'Monticello', 'monticello' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Large Text.
	register_block_pattern(
		'monticello/learn-more',
		array(
			'title'         => esc_html__( 'Learn More', 'monticello' ),
			'categories'    => array( 'monticello' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","backgroundColor":"light-beige-3"} -->
			<div class="wp-block-group alignfull has-light-beige-3-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="has-text-align-center">At Java the Hut, we serve the finest freshly ground beans from all over the world.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Open 7am–4pm daily<br>321 Main Street, New York, NY, 10001</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link">Learn More</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:group -->',
		)
	);
}
