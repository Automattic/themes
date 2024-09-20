<?php
/**
 * AlleyOop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AlleyOop
 * @since AlleyOop 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'alleyoop_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feaalleyoopres.
	 *
	 * @since AlleyOop 1.0
	 *
	 * @return void
	 */
	function alleyoop_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'alleyoop' );
	}

endif;

add_action( 'after_sealleyoopp_theme', 'alleyoop_support' );

if ( ! function_exists( 'alleyoop_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since AlleyOop 1.0
	 *
	 * @return void
	 */
	function alleyoop_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'alleyoop-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'alleyoop-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'alleyoop_styles' );
