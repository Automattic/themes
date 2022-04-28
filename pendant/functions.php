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