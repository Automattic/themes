<?php
/**
 * Hey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hey
 * @since Hey 1.0
 */


if ( ! function_exists( 'hey_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Hey 1.0
	 *
	 * @return void
	 */
	function hey_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'hey' );
	}

endif;

add_action( 'after_setup_theme', 'hey_support' );

if ( ! function_exists( 'hey_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Hey 1.0
	 *
	 * @return void
	 */
	function hey_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'hey-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hey-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'hey_styles' );
