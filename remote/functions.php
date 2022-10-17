<?php
/**
 * Remote functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Remote
 * @since Remote 1.0
 */


if ( ! function_exists( 'remote_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'remote' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'remote_support' );

if ( ! function_exists( 'remote_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'remote-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'remote-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'remote_styles' );


/**
 * Registers block patterns and categories.
 *
 * @since Remote 1.0
 *
 * @return void
 */
function remote_register_block_pattern_categories() {

	//Needed until https://github.com/WordPress/gutenberg/issues/39500 is fixed.
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'remote' ) ),
		'columns'  => array( 'label' => __( 'Columns', 'remote' ) ),
		'text'     => array( 'label' => __( 'Text', 'remote' ) ),
		'query'    => array( 'label' => __( 'Query', 'remote' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since remote 1.0
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
	$block_pattern_categories = apply_filters( 'remote_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

}
add_action( 'init', 'remote_register_block_pattern_categories', 9 );
