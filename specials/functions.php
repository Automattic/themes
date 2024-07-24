<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Specials functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Specials
 * @since Specials 1.0
 */


if ( ! function_exists( 'specials_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Specials 1.0
	 *
	 * @return void
	 */
	function specials_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'specials' );
	}

endif;

add_action( 'after_setup_theme', 'specials_support' );

if ( ! function_exists( 'specials_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Specials 1.0
	 *
	 * @return void
	 */
	function specials_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'specials-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'specials-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'specials_styles' );
