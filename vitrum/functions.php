<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Vitrum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since Vitrum 1.0
 */


if ( ! function_exists( 'vitrum_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Vitrum 1.0
	 *
	 * @return void
	 */
	function vitrum_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'vitrum_support' );

if ( ! function_exists( 'vitrum_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Vitrum 1.0
	 *
	 * @return void
	 */
	function vitrum_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'vitrum-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vitrum-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'vitrum_styles' );