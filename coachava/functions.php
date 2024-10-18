<?php
/**
 * CoachAva functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CoachAva
 * @since CoachAva 1.0
 */


if ( ! function_exists( 'coachava_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since CoachAva 1.0
	 *
	 * @return void
	 */
	function coachava_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'coachava' );
	}

endif;

add_action( 'after_setup_theme', 'coachava_support' );

if ( ! function_exists( 'coachava_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since CoachAva 1.0
	 *
	 * @return void
	 */
	function coachava_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'coachava-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'coachava-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'coachava_styles' );
