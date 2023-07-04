<?php
/**
 * Entry functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Entry
 * @since Entry 1.0
 */


if ( ! function_exists( 'entry_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Entry 1.0
	 *
	 * @return void
	 */
	function entry_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'entry' );
	}

endif;

add_action( 'after_setup_theme', 'entry_support' );

if ( ! function_exists( 'entry_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Entry 1.0
	 *
	 * @return void
	 */
	function entry_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'entry-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'entry-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'entry_styles' );
