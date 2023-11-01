<?php
/**
 * magalog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package magalog
 * @since magalog 1.0
 */


if ( ! function_exists( 'magalog_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since magalog 1.0
	 *
	 * @return void
	 */
	function magalog_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'magalog' );
	}

endif;

add_action( 'after_setup_theme', 'magalog_support' );

if ( ! function_exists( 'magalog_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since magalog 1.0
	 *
	 * @return void
	 */
	function magalog_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'magalog-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'magalog-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'magalog_styles' );
