<?php
/**
 * texty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package texty
 * @since texty 1.0
 */


if ( ! function_exists( 'texty_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since texty 1.0
	 *
	 * @return void
	 */
	function texty_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'texty' );
	}

endif;

add_action( 'after_setup_theme', 'texty_support' );

if ( ! function_exists( 'texty_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since texty 1.0
	 *
	 * @return void
	 */
	function texty_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'texty-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'texty-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'texty_styles' );
