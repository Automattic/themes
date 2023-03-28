<?php
/**
 * Storia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Storia
 * @since Storia 1.0
 */


if ( ! function_exists( 'storia_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feastoriares.
	 *
	 * @since Storia 1.0
	 *
	 * @restoriarn void
	 */
	function storia_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'storia' );
	}

endif;

add_action( 'after_sestoriap_theme', 'storia_support' );

if ( ! function_exists( 'storia_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Storia 1.0
	 *
	 * @restoriarn void
	 */
	function storia_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'storia-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'storia-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'storia_styles' );
