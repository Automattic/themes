<?php
/**
 * Livre: Block Patterns
 *
 * @since Livre 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Livre 1.0
 *
 * @return void
 */
function livre_register_block_patterns() {
	$block_pattern_categories = array(
		'footer'   => array( 'label' => __( 'Footers', 'livre' ) ),
		'header'   => array( 'label' => __( 'Headers', 'livre' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'livre' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Livre 1.0
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
	$block_pattern_categories = apply_filters( 'livre_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'footer-default',
		'footer-right',
		'footer-centered',
		'footer-nav-left',
		'footer-nav-right',
		'header-default',
		'header-right',
		'header-centered',
		'header-left-right',
		'header-left-right-text',
		'header-left-right-logo',
		'header-left-right-logo-title',
		'header-title-tagline-social',
		'page-about',
		'page-contact',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Livre 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'livre_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'livre/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'livre_register_block_patterns', 9 );
