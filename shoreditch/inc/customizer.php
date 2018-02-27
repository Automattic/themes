<?php
/**
 * Shoreditch Theme Customizer.
 *
 * @package Shoreditch
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function shoreditch_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'shoreditch_theme_options', array(
		'title'             => esc_html__( 'Theme Options', 'shoreditch' ),
		'priority'          => 130,
	) );

	$wp_customize->add_setting( 'shoreditch_sticky_header', array(
		'default'           => '',
		'sanitize_callback' => 'shoreditch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'shoreditch_sticky_header', array(
		'label'             => esc_html__( 'Fixed header when scrolling down.', 'shoreditch' ),
		'section'           => 'shoreditch_theme_options',
		'type'              => 'checkbox',
	) );

	$wp_customize->add_setting( 'shoreditch_footer_top_column', array(
		'default'           => 'column-1',
		'sanitize_callback' => 'shoreditch_sanitize_column',
	) );

	$wp_customize->add_control( 'shoreditch_footer_top_column', array(
		'label'             => esc_html__( 'Top Footer Area Layout', 'shoreditch' ),
		'section'           => 'shoreditch_theme_options',
		'type'              => 'radio',
		'choices'           => array(
			'column-1' => esc_html__( '1 Column', 'shoreditch' ),
			'column-2' => esc_html__( '2 Columns', 'shoreditch' ),
			'column-3' => esc_html__( '3 Columns', 'shoreditch' ),
		),
	) );

	$wp_customize->add_setting( 'shoreditch_footer_bottom_column', array(
		'default'           => 'column-3',
		'sanitize_callback' => 'shoreditch_sanitize_column',
	) );

	$wp_customize->add_control( 'shoreditch_footer_bottom_column', array(
		'label'             => esc_html__( 'Bottom Footer Area Layout', 'shoreditch' ),
		'section'           => 'shoreditch_theme_options',
		'type'              => 'radio',
		'choices'           => array(
			'column-1' => esc_html__( '1 Column', 'shoreditch' ),
			'column-2' => esc_html__( '2 Columns', 'shoreditch' ),
			'column-3' => esc_html__( '3 Columns', 'shoreditch' ),
		),
	) );
}
add_action( 'customize_register', 'shoreditch_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shoreditch_customize_preview_js() {
	wp_enqueue_script( 'shoreditch_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'shoreditch_customize_preview_js' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean true if portfolio page template displays title and content.
 */
function shoreditch_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Sanitize the Column value.
 *
 * @param string $column.
 * @return string (column-1|column-2|column-3).
 */
function shoreditch_sanitize_column( $column ) {
	if ( ! in_array( $column, array( 'column-1', 'column-2', 'column-3' ) ) ) {
		$column = 'column-1';
	}
	return $column;
}