<?php declare( strict_types = 1 ); ?>
<?php
/**
 * brightblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brightblog
 * @since brightblog 1.0
 */


if ( ! function_exists( 'brightblog_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since brightblog 1.0
	 *
	 * @return void
	 */
	function brightblog_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'brightblog' );
	}

endif;

add_action( 'after_setup_theme', 'brightblog_support' );

if ( ! function_exists( 'brightblog_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since brightblog 1.0
	 *
	 * @return void
	 */
	function brightblog_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'brightblog-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'brightblog-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'brightblog_styles' );
