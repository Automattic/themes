<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function stewart_support() {
	// Make theme available for translation.
	load_theme_textdomain( 'stewart' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'stewart_support' );


/**
 * Enqueue styles.
 */
function stewart_styles() {

	// Register theme stylesheet.
	wp_register_style(
		'stewart-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'stewart-style' );
}
add_action( 'wp_enqueue_scripts', 'stewart_styles' );


/**
 * Registers block patterns and categories.
 *
 * @since Stewart 1.7
 *
 * @return void
 */
function stewart_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'images'   => array( 'label' => __( 'Images', 'stewart' ) ),
		'featured' => array( 'label' => __( 'Featured', 'stewart' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'stewart' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'stewart' ) ),
		'sidebar'  => array( 'label' => __( 'Sidebar', 'stewart' ) ),
		'query'    => array( 'label' => __( 'Query', 'stewart' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since stewart 1.7
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

}
add_action( 'init', 'stewart_register_block_pattern_categories', 9 );
