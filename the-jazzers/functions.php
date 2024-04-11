<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Jazzers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jazzers
 * @since Jazzers 1.0
 */


if ( ! function_exists( 'jazzers_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Jazzers 1.0
	 *
	 * @return void
	 */
	function jazzers_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'jazzers' );
	}

endif;

add_action( 'after_setup_theme', 'jazzers_support' );

if ( ! function_exists( 'jazzers_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Jazzers 1.0
	 *
	 * @return void
	 */
	function jazzers_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'jazzers-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'jazzers-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'jazzers_styles' );
