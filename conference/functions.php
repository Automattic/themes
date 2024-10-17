<?php
/**
 * Conference functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Conference
 * @since Conference 1.0
 */


if ( ! function_exists( 'conference_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Conference 1.0
	 *
	 * @return void
	 */
	function conference_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'conference' );
	}

endif;

add_action( 'after_setup_theme', 'conference_support' );

if ( ! function_exists( 'conference_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Conference 1.0
	 *
	 * @return void
	 */
	function conference_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'conference-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'conference-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'conference_styles' );
