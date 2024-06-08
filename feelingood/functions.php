<?php
/**
 * Feelin'Good functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Feelin'Good
 * @since Feelin'Good 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'feelingood_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since Feelin'Good 1.0
	 *
	 * @return void
	 */
	function feelingood_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'feelingood' );
	}

endif;

add_action( 'after_setup_theme', 'feelingood_support' );

if ( ! function_exists( 'feelingood_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Feelin'Good 1.0
	 *
	 * @return void
	 */
	function feelingood_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'feelingood-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'feelingood-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'feelingood_styles' );

/**
 * Temporaly fix for disabling the default font sizes.
 * https://github.com/WordPress/gutenberg/issues/52200
 *
 * @since Feelin'Good 1.0
 *
 * @return void
 */
add_filter( 'wp_theme_json_data_default', function( $theme_json ) {
	$data = [
		'version'  => 2,
		'settings' => [
			'typography' => [
				'fontSizes' => []
			]
		]
	];

	return $theme_json->update_with( $data );
} );
