<?php
/**
 * podbase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package podbase
 * @since podbase 1.0
 */


if ( ! function_exists( 'podbase_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since podbase 1.0
	 *
	 * @return void
	 */
	function podbase_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'podbase' );
	}

endif;

add_action( 'after_setup_theme', 'podbase_support' );

if ( ! function_exists( 'podbase_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since podbase 1.0
	 *
	 * @return void
	 */
	function podbase_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'podbase-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'podbase-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'podbase_styles' );
