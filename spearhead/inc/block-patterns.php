<?php
/**
 * Spearhead Theme: Block Patterns
 *
 * @package Spearhead
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	unregister_block_pattern_category( 'seedlet' );

	register_block_pattern_category(
		'spearhead',
		array( 'label' => __( 'Spearhead', 'spearhead' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	unregister_block_pattern( 'seedlet/group-split-background' );
	unregister_block_pattern( 'seedlet/group-image-overlap' );
	unregister_block_pattern( 'seedlet/latest-posts-alternating-grid' );

	register_block_pattern(
		'spearhead/related-posts',
		array(
			'title'      => __( 'Related Posts', 'spearhead' ),
			'categories' => array( 'spearhead' ),
			'content'    => '<!-- wp:separator {"className":"is-style-wide"} --><hr class="wp-block-separator is-style-wide"/><!-- /wp:separator --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Related</p><!-- /wp:paragraph --><!-- wp:jetpack/related-posts /-->',
		)
	);
}
