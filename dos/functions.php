<?php
/**
 * DOS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DOS
 * @since DOS 1.0
 */


if ( ! function_exists( 'dos_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since DOS 1.0
	 *
	 * @return void
	 */
	function dos_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'dos' );
	}

endif;

add_action( 'after_setup_theme', 'dos_support' );

if ( ! function_exists( 'dos_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since DOS 1.0
	 *
	 * @return void
	 */
	function dos_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'dos-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dos-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'dos_styles' );
