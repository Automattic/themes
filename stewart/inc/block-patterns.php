<?php
/**
 * Stewart: Block Patterns
 *
 * @since Stewart 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Stewart 1.0
 *
 * @return void
 */
function stewart_register_block_patterns() {
	$block_pattern_categories = array(
		'footer'     => array( 'label' => __( 'Footers', 'stewart' ) ),
		'header'     => array( 'label' => __( 'Headers', 'stewart' ) ),
		'pages'      => array( 'label' => __( 'Pages', 'stewart' ) ),
		'sidebar'    => array( 'label' => __( 'Sidebars', 'stewart' ) ),
		'query'      => array( 'label' => __( 'Query', 'stewart' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Stewart 1.0
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
	$block_pattern_categories = apply_filters( 'stewart_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'footer-default',
		'footer-left',
		'footer-right',
		'footer-nav-left',
		'footer-nav-right',
		'header-image',
		'header-traditional-background',
		'header-traditional',
		'page-about',
		'page-contact',
		'sidebar-default',
		'sidebar-border',
		'sidebar-background',
		'sidebar-introduction',
		'sidebar-blogging',
		'sidebar-categories-tags',
		'posts-list',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Stewart 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'stewart_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'stewart/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'stewart_register_block_patterns', 9 );
