<?php
/**
 * archeo: Block Patterns
 *
 * @since archeo 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since archeo 1.0
 *
 * @return void
 */
function archeo_register_block_patterns() {
	$block_pattern_categories = array(
		'images' => array( 'label' => __( 'Images', 'archeo' ) ),
		'featured' => array( 'label' => __( 'Featured', 'archeo' ) ),
		'footer' => array( 'label' => __( 'Footers', 'archeo' ) ),
		'query' => array( 'label' => __( 'Query', 'archeo' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since archeo 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'archeo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'footer',
		'headline-over-dark-image',
		'hidden-404',
		'image-with-headline-on-dark-background',
		'image-with-headline-description',
		'image-with-headline-separate-description',
		'image-with-description',
		'layered-images-with-headline',
		'image-with-description-and-right-aligned-headline',
		'simple-list-of-posts',
		'simple-list-of-posts-with-background',
		'layout-with-two-images-and-text',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since archeo 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'archeo_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'archeo/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'archeo_register_block_patterns', 9 );
