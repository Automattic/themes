<?php declare( strict_types = 1 ); ?>
<?php
/**
 * LeanCV functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LeanCV
 * @since LeanCV 1.0
 */


if ( ! function_exists( 'leancv_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since LeanCV 1.0
	 *
	 * @return void
	 */
	function leancv_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'leancv' );
	}

endif;

add_action( 'after_setup_theme', 'leancv_support' );

if ( ! function_exists( 'leancv_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since LeanCV 1.0
	 *
	 * @return void
	 */
	function leancv_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'leancv-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'leancv-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'leancv_styles' );
