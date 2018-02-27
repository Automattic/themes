<?php
/**
 * Gazette Theme Customizer
 *
 * @package Gazette
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gazette_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/* Theme Options */
	$wp_customize->add_section( 'gazette_theme_options', array(
		'title'    => __( 'Theme Options', 'gazette' ),
		'priority' => 130,
	) );

	/* Header Image */
	$wp_customize->add_setting( 'gazette_header_image', array(
		'sanitize_callback' => 'gazette_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'gazette_header_image', array(
		'label'             => __( 'Display header image on blog index only.', 'gazette' ),
		'section'           => 'gazette_theme_options',
		'priority'          => 10,
		'type'              => 'checkbox',
	) );

	/* Unfixed header */
	$wp_customize->add_setting( 'gazette_unfixed_header', array(
		'sanitize_callback' => 'gazette_sanitize_checkbox',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( 'gazette_unfixed_header', array(
		'label'             => __( 'Unfixed header when scrolling down.', 'gazette' ),
		'section'           => 'gazette_theme_options',
		'priority'          => 20,
		'type'              => 'checkbox',
	) );

	/* Author Bio */
	$wp_customize->add_setting( 'gazette_author_bio', array(
		'sanitize_callback' => 'gazette_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'gazette_author_bio', array(
		'label'             => __( 'Show author bio on single posts.', 'gazette' ),
		'section'           => 'gazette_theme_options',
		'priority'          => 30,
		'type'              => 'checkbox',
	) );

	/* Footer Content */
	$wp_customize->add_setting( 'gazette_footer_content', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'gazette_footer_content', array(
		'label'             => __( 'Footer Content', 'gazette' ),
		'section'           => 'gazette_theme_options',
		'priority'          => 40,
		'type'              => 'textarea',
	) );
}
add_action( 'customize_register', 'gazette_customize_register' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean (true|false).
 */
function gazette_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gazette_customize_preview_js() {
	wp_enqueue_script( 'gazette-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'gazette_customize_preview_js' );
