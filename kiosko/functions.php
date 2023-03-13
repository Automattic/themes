<?php
/**
 * Kiosko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kiosko
 * @since Kiosko 1.0
 */


if ( ! function_exists( 'kiosko_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Kiosko 1.0
	 *
	 * @return void
	 */
	function kiosko_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'kiosko' );
	}

endif;

add_action( 'after_setup_theme', 'kiosko_support' );

if ( ! function_exists( 'kiosko_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kiosko 1.0
	 *
	 * @return void
	 */
	function kiosko_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'kiosko-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kiosko-style' );

		// Enqueue the additional stylesheet for Twenty Twenty Three.
		if ( class_exists( 'WooCommerce' ) && function_exists( 'WC' ) && defined( 'WC_ABSPATH' ) && file_exists( WC_ABSPATH . 'assets/css/twenty-twenty-three.css' ) ) {

			wp_enqueue_style( 'woocommerce-twenty-twenty-three', WC()->plugin_url() . '/assets/css/twenty-twenty-three.css' );

			wp_dequeue_style( 'woocommerce-general' );
		}
	}

endif;

add_action( 'wp_enqueue_scripts', 'kiosko_styles' );

if ( ! function_exists( 'kiosko_woocommerce_init' ) ) :
	/**
	 * Initialize WooCommerce compatibility.
	 *
	 * @since Kiosko 1.0
	 * @return void
	 */
	function kiosko_woocommerce_init() {
		if ( ! class_exists( 'WooCommerce' ) || ! defined( 'WC_ABSPATH' ) || ! file_exists( WC_ABSPATH . 'includes/theme-support/class-wc-twenty-twenty-three.php' ) ) {
			return;
		}

		// Load WooCommerce compatibility file if WooCommerce is loaded and the compatibility file exists.
		include_once WC_ABSPATH . 'includes/theme-support/class-wc-twenty-twenty-three.php';
	}
endif;

add_action( 'after_setup_theme', 'kiosko_woocommerce_init' );
