<?php
/**
 * malog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package malog
 * @since malog 1.0
 */


if ( ! function_exists( 'malog_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since malog 1.0
	 *
	 * @return void
	 */
	function malog_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'malog' );
	}

endif;

add_action( 'after_setup_theme', 'malog_support' );

if ( ! function_exists( 'malog_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since malog 1.0
	 *
	 * @return void
	 */
	function malog_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'malog-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'malog-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'malog_styles' );
