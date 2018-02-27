<?php
/**
 * Illustratr Theme Customizer
 *
 * @package Illustratr
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function illustratr_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'illustratr_hide_portfolio_page_content', array(
		'default'           => '',
		'sanitize_callback' => 'illustratr_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'illustratr_hide_portfolio_page_content', array(
		'label'             => __( 'Hide title and content on Portfolio Page Template', 'illustratr' ),
		'section'           => 'jetpack_portfolio',
		'type'              => 'checkbox',
	) );
}
add_action( 'customize_register', 'illustratr_customize_register' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean true if portfolio page template displays title and content.
 */
function illustratr_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function illustratr_customize_preview_js() {
	wp_enqueue_script( 'illustratr_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'illustratr_customize_preview_js' );
