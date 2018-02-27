<?php
/**
 * Libretto Theme Customizer
 *
 * @package Libretto
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 */
function libretto_theme_customizer( $wp_customize ) {

	// Set various built-in site settings to be previewed live in the customizer
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

} // libretto_theme_customizer()
add_action( 'customize_register', 'libretto_theme_customizer' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function libretto_customize_preview_js() {
	wp_enqueue_script( 'libretto_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'libretto_customize_preview_js' );
