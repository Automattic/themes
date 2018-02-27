<?php
/**
 * Sketch Theme Customizer
 *
 * @package Sketch
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sketch_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'sketch_portfolio_thumbnail', array(
		'default'           => 'landscape',
		'sanitize_callback' => 'sketch_sanitize_ratio',
	) );

	$wp_customize->add_control( 'sketch_portfolio_thumbnail', array(
		'label'   => __( 'Portfolio Thumbnail Aspect Ratio', 'sketch' ),
		'section' => 'jetpack_portfolio',
		'type'    => 'select',
		'choices' => array(
			'landscape' => __( 'Landscape (4:3)', 'sketch' ),
			'portrait'  => __( 'Portrait (3:4)', 'sketch' ),
			'square'    => __( 'Square (1:1)', 'sketch' ),
		),
	) );

	$wp_customize->add_setting( 'sketch_hide_portfolio_page_content', array(
		'default' => '',
		'sanitize_callback' => 'sketch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'sketch_hide_portfolio_page_content', array(
		'label'   => __( 'Hide title and content on Portfolio Page Template', 'sketch' ),
		'section' => 'jetpack_portfolio',
		'type'    => 'checkbox',
	) );
}
add_action( 'customize_register', 'sketch_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sketch_customize_preview_js() {
	wp_enqueue_script( 'sketch_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'sketch_customize_preview_js' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean true if portfolio page template displays title and content.
 */
function sketch_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Sanitize the Portfolio Thumbnail Aspect Ratio value.
 *
 * @param string $ratio Aspect ratio.
 * @return string Filtered ratio (landscape|portrait|square).
 */
function sketch_sanitize_ratio( $ratio ) {
	if ( ! in_array( $ratio, array( 'landscape', 'portrait', 'square' ) ) ) {
		$ratio = 'landscape';
	}

	return $ratio;
}