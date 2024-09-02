<?php
/**
 * The Shore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The Shore
 * @since The Shore 1.0
 */


if ( ! function_exists( 'the_shore_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since The Shore 1.0
	 *
	 * @return void
	 */
	function the_shore_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'the-shore' );
	}

endif;

add_action( 'after_setup_theme', 'the_shore_support' );

if ( ! function_exists( 'the_shore_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since The Shore 1.0
	 *
	 * @return void
	 */
	function the_shore_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'block_canvas-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'block_canvas-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'the_shore_styles' );
