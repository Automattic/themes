<?php
/**
 * negai functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package negai
 * @since negai 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'negai_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feanegaires.
	 *
	 * @since negai 1.0
	 *
	 * @renegairn void
	 */
	function negai_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'negai' );
	}

endif;

add_action( 'after_senegaip_theme', 'negai_support' );

if ( ! function_exists( 'negai_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since negai 1.0
	 *
	 * @renegairn void
	 */
	function negai_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'negai-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'negai-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'negai_styles' );
