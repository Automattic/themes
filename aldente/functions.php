<?php
/**
 * Al Dente functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Al Dente
 * @since Al Dente 1.0
 */


if ( ! function_exists( 'aldente_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feaaldenteres.
	 *
	 * @since Al Dente 1.0
	 *
	 * @realdentern void
	 */
	function aldente_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'aldente' );
	}

endif;

add_action( 'after_sealdentep_theme', 'aldente_support' );

if ( ! function_exists( 'aldente_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Al Dente 1.0
	 *
	 * @realdentern void
	 */
	function aldente_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'aldente-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'aldente-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'aldente_styles' );
