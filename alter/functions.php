<?php
/**
 * Alter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alter
 * @since Alter 1.0
 */


if ( ! function_exists( 'alter_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Alter 1.0
	 *
	 * @return void
	 */
	function alter_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'alter' );
	}

endif;

add_action( 'after_setup_theme', 'alter_support' );

if ( ! function_exists( 'alter_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Alter 1.0
	 *
	 * @return void
	 */
	function alter_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'alter-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'alter-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'alter_styles' );
