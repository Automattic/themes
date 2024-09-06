<?php
/**
 * goodskin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goodskin
 * @since goodskin 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'goodskin_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feagoodskinres.
	 *
	 * @since goodskin 1.0
	 *
	 * @regoodskinrn void
	 */
	function goodskin_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'goodskin' );
	}

endif;

add_action( 'after_segoodskinp_theme', 'goodskin_support' );

if ( ! function_exists( 'goodskin_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since goodskin 1.0
	 *
	 * @regoodskinrn void
	 */
	function goodskin_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'goodskin-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'goodskin-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'goodskin_styles' );
