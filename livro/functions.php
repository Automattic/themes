<?php
/**
 * Livro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Livro
 * @since Livro 1.0
 */


if ( ! function_exists( 'livro_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function livro_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'livro' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Support the "Aside" post format.
		add_theme_support( 'post-formats', array( 'aside' ) );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'livro_support' );

if ( ! function_exists( 'livro_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function livro_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'livro-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'livro-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'livro_styles' );

require get_template_directory() . '/inc/gutenberg-dependency-check.php';

/**
 * Registers block patterns and categories.
 *
 * @since Livro 1.0
 *
 * @return void
 */
function livro_register_block_pattern_categories() {

	//Needed until https://github.com/WordPress/gutenberg/issues/39500 is fixed.
	$block_pattern_categories = array(
		'pages'  => array( 'label' => __( 'Pages', 'livro' ) ),
		'footer' => array( 'label' => __( 'Footers', 'livro' ) ),
		'header' => array( 'label' => __( 'Headers', 'livro' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Livro 1.0
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
	$block_pattern_categories = apply_filters( 'livro_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

}
add_action( 'init', 'livro_register_block_pattern_categories', 9 );
