<?php
/**
 * OnyxPulse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OnyxPulse
 * @since OnyxPulse 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'onyxpulse_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since OnyxPulse 1.0
	 *
	 * @return void
	 */
	function onyxpulse_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'onyxpulse' );
	}

endif;

add_action( 'after_setup_theme', 'onyxpulse_support' );

if ( ! function_exists( 'onyxpulse_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since OnyxPulse 1.0
	 *
	 * @return void
	 */
	function onyxpulse_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'onyxpulse-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'onyxpulse-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'onyxpulse_styles' );
