<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Foam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Foam
 * @since Foam 1.0
 */


if ( ! function_exists( 'foam_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Foam 1.0
	 *
	 * @return void
	 */
	function foam_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'foam' );
	}

endif;

add_action( 'after_setup_theme', 'foam_support' );

if ( ! function_exists( 'foam_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Foam 1.0
	 *
	 * @return void
	 */
	function foam_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'foam-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'foam-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'foam_styles' );
