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
		'pages'    => array( 'label' => __( 'Pages', 'archeo' ) ),
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
		'headline-over-dark-image',
		'image-with-headline-on-dark-background',
		'image-with-headline-description',
		'image-with-headline-and-description',
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
