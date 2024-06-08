<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Didone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Didone
 * @since Didone 1.0
 */


if ( ! function_exists( 'didone_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Didone 1.0
	 *
	 * @return void
	 */
	function didone_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'didone' );
	}

endif;

add_action( 'after_setup_theme', 'didone_support' );

if ( ! function_exists( 'didone_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Didone 1.0
	 *
	 * @return void
	 */
	function didone_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'didone-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'didone-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'didone_styles' );
