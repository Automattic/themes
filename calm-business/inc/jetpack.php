<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 * @package Calm_business
 */
/**
 * Jetpack Setup
 */
function calm_business_jetpack_setup() {
	/*
	 * The Parent theme alredy comes with Jetpack compatibility
	 *
	 * Tweaking the compatibility rules might be done here,
	 * if even necessary at all.
	 */
}
add_action( 'after_setup_theme', 'calm_business_jetpack_setup' );
/**
 * Enqueue Jetpack-specific styles
 *
 * We need to enqueue some additional CSS to override the
 * parent theme’s fonts which are pre-baked into JetPack.
 *
 * See `calm2019/style-jetpack.scss`
 * Also see: https://github.com/Automattic/jetpack/blob/master/modules/theme-tools/compat/twentynineteen.css
 */
function calm_business_jetpack_styles() {
	wp_enqueue_style( 'calm_business-jetpack', get_stylesheet_directory_uri() . '/style-jetpack.css', '20100130' );
}
add_action( 'wp_enqueue_scripts', 'calm_business_jetpack_styles' );