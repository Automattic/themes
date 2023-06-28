<?php
/**
 * tomoni functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tomoni
 * @since tomoni 1.0
 */


if ( ! function_exists( 'tomoni_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress featomonires.
	 *
	 * @since tomoni 1.0
	 *
	 * @retomonirn void
	 */
	function tomoni_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'tomoni' );
	}

endif;

add_action( 'after_setomonip_theme', 'tomoni_support' );

if ( ! function_exists( 'tomoni_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since tomoni 1.0
	 *
	 * @retomonirn void
	 */
	function tomoni_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tomoni-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tomoni-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tomoni_styles' );
