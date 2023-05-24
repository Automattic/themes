<?php
/**
 * George Lois functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package George Lois
 * @since George Lois 1.0
 */


if ( ! function_exists( 'georgelois_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since George Lois 1.0
	 *
	 * @return void
	 */
	function georgelois_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'georgelois' );
	}

endif;

add_action( 'after_setup_theme', 'georgelois_support' );

if ( ! function_exists( 'georgelois_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since George Lois 1.0
	 *
	 * @return void
	 */
	function georgelois_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'georgelois-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'georgelois-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'georgelois_styles' );
