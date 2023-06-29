<?php
/**
 * MENU functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The MENU
 * @since The MENU 1.0
 */


if ( ! function_exists( 'menu_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since MENU 1.0
	 *
	 * @return void
	 */
	function menu_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'the-menu' );
	}

endif;

add_action( 'after_setup_theme', 'menu_support' );

if ( ! function_exists( 'menu_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since MENU 1.0
	 *
	 * @return void
	 */
	function menu_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'menu-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'menu-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'menu_styles' );
