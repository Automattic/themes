<?php
/**
 * Archeo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Archeo
 * @since Archeo 1.0
 */


if ( ! function_exists( 'archeo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Archeo 1.0
	 *
	 * @return void
	 */
	function archeo_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'archeo' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'archeo_support' );

if ( ! function_exists( 'archeo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Archeo 1.0
	 *
	 * @return void
	 */
	function archeo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'archeo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'archeo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'archeo_styles' );

/**
 * Registers block patterns and categories.
 *
 * @since Archeo 1.0
 *
 * @return void
 */
function archeo_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'images'   => array( 'label' => __( 'Images', 'archeo' ) ),
		'featured' => array( 'label' => __( 'Featured', 'archeo' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'archeo' ) ),
		'query'    => array( 'label' => __( 'Query', 'archeo' ) ),
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

}
add_action( 'init', 'archeo_register_block_pattern_categories', 9 );
