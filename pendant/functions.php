<?php
/**
 * Pendant functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pendant
 * @since Pendant 1.0
 */


if ( ! function_exists( 'pendant_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Block Canvas 1.0
	 *
	 * @return void
	 */
	function pendant_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'pendant' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'pendant_support' );

if ( ! function_exists( 'pendant_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Block Canvas 1.0
	 *
	 * @return void
	 */
	function pendant_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'pendant-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'pendant-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'pendant_styles' );

function pendant_register_block_pattern_categories() {
	register_block_pattern_category( 'featured', array( 'label' => __( 'Featured', 'pendant' ) ) );
	register_block_pattern_category( 'query', array( 'label' => __( 'Query', 'pendant' ) ) );
	register_block_pattern_category( 'call-to-action', array( 'label' => __( 'Call to Action', 'pendant' ) ) );
	register_block_pattern_category( 'media', array( 'label' => __( 'Media', 'pendant' ) ) );
	register_block_pattern_category( 'quotes', array( 'label' => __( 'Quotes', 'pendant' ) ) );
	register_block_pattern_category( 'list', array( 'label' => __( 'List', 'pendant' ) ) );
	register_block_pattern_category( 'images', array( 'label' => __( 'Images', 'pendant' ) ) );
	register_block_pattern_category( 'gallery', array( 'label' => __( 'Gallery', 'pendant' ) ) );
}

add_action( 'init', 'pendant_register_block_pattern_categories', 9 );

/**
 * Jetpack may attempt to register fonts for the Google Font Provider.
 * If Jetpack registeres fonts in the same family as what this theme offers
 * then those are included instead (and may be different typeface choices
 * than what are expressed here.)
 * This filter eliminates the fonts that Pendant natively supplies.
 *
 * This will no longer be needed once this Jetpack issue has been resolved:
 * https://github.com/Automattic/jetpack/issues/25987
 */
function pendant_filter_jetpack_google_fonts_list( $list_to_filter ) {
	$filtered = array_filter(
		$list_to_filter,
		function( $font_family ) {
			return 'Jost' !== $font_family && 'Literata' !== $font_family;
		}
	);
	return $filtered;
}

add_filter( 'jetpack_google_fonts_list', 'pendant_filter_jetpack_google_fonts_list' );

