<?php
/**
 * Disco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Disco
 * @since Disco 1.0
 */


if ( ! function_exists( 'disco_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Disco 1.0
	 *
	 * @return void
	 */
	function disco_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'disco' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'disco_support' );

if ( ! function_exists( 'disco_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Disco 1.0
	 *
	 * @return void
	 */
	function disco_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'disco-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'disco-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'disco_styles' );
