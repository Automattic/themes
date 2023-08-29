<?php
/**
 * StartFit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StartFit
 * @since StartFit 1.0
 */


if ( ! function_exists( 'startfit_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since StartFit 1.0
	 *
	 * @return void
	 */
	function startfit_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'startfit' );
	}

endif;

add_action( 'after_setup_theme', 'startfit_support' );

if ( ! function_exists( 'startfit_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since StartFit 1.0
	 *
	 * @return void
	 */
	function startfit_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'startfit-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'startfit-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'startfit_styles' );
