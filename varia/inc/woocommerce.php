<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Varia
 */
/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function varia_woocommerce_setup() {
	add_theme_support( 'woocommerce', apply_filters( 'varia_woocommerce_args', array(
		'single_image_width'    => 750,
		'thumbnail_image_width' => 350,
		'product_grid'          => array(
			'default_columns' => 2,
			'default_rows'    => 6,
			'min_columns'     => 1,
			'max_columns'     => 6,
			'min_rows'        => 1
		)
	) ) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'varia_woocommerce_setup' );

/**
 * Add a custom wrapper for woocomerce content
 */
function varia_wrapper_start() {
  echo '<article id="woocommerce-wrapper" class="responsive-max-width">';
}
add_action('woocommerce_before_main_content', 'varia_wrapper_start', 10);

function varia_wrapper_end() {
  echo '</article>';
}
add_action('woocommerce_after_main_content', 'varia_wrapper_end', 10);

/**
 * Remove WooCommerce Sidebar
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * Enqueue scripts and styles.
 */
function varia_woocommerce_scripts() {

	// WooCommerce styles
	wp_enqueue_style( 'varia-woocommerce-style', get_template_directory_uri() . '/style-woocommerce.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'varia_woocommerce_scripts' );

