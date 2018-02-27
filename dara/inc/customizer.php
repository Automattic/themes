<?php
/**
 * Dara Theme Customizer.
 *
 * @package Dara
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dara_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'dara_theme_options', array(
		'title'    => esc_html__( 'Theme Options', 'dara' ),
		'priority' => 130,
	) );

	/* Randomize Testimonials */
	$wp_customize->add_setting( 'dara_testimonials', array(
		'default'           => 0,
		'sanitize_callback' => 'dara_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'dara_testimonials', array(
		'label'             => esc_html__( 'Randomize Front Page Testimonials', 'dara' ),
		'section'           => 'dara_theme_options',
		'priority'          => 2,
		'type'              => 'checkbox',
	) );

	/* Front Page: Featured Page One */
	$wp_customize->add_setting( 'dara_featured_page_one_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'dara_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'dara_featured_page_one_front_page', array(
		'label'             => esc_html__( 'Front Page: Featured Page One', 'dara' ),
		'section'           => 'dara_theme_options',
		'priority'          => 8,
		'type'              => 'dropdown-pages',
	) );

	/* Front Page: Featured Page Two */
	$wp_customize->add_setting( 'dara_featured_page_two_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'dara_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'dara_featured_page_two_front_page', array(
		'label'             => esc_html__( 'Front Page: Featured Page Two', 'dara' ),
		'section'           => 'dara_theme_options',
		'priority'          => 9,
		'type'              => 'dropdown-pages',
	) );

	/* Front Page: Featured Page Three */
	$wp_customize->add_setting( 'dara_featured_page_three_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'dara_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'dara_featured_page_three_front_page', array(
		'label'             => esc_html__( 'Front Page: Featured Page Three', 'dara' ),
		'section'           => 'dara_theme_options',
		'priority'          => 10,
		'type'              => 'dropdown-pages',
	) );
}
add_action( 'customize_register', 'dara_customize_register' );

/**
 * Sanitize the dropdown pages.
 *
 * @param interger $input.
 * @return interger.
 */
function dara_sanitize_dropdown_pages( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}

/**
 * Sanitize the checkbox.
 *
 * @param interger $input.
 * @return interger.
 */
function dara_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dara_customize_preview_js() {
	wp_enqueue_script( 'dara_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'dara_customize_preview_js' );
