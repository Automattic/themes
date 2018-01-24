<?php
/**
 * Radcliffe 2 Theme Customizer - Hero Area
 *
 * @package Radcliffe 2
 */

function radcliffe_2_hero_area_customize_register( $wp_customize ) {
	/* Add Section for Hero Area */
	$wp_customize->add_section( 'radcliffe_2_hero_area', array(
		'title'             => esc_html__( 'Featured Prompt', 'radcliffe-2' ),
		'description'       => esc_html__( 'Use this area to promote your most important message to site visitors. You can use a headline, a brief description and prominent link to help drive visitors where you’d like them to go.', 'radcliffe-2' ),
		'priority'          => 12,
	) );

	/* Display on Front Page */
	$wp_customize->add_setting( 'radcliffe_2_hero_area_display', array(
		'sanitize_callback' => 'radcliffe_2_hero_area_sanitize_checkbox',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_hero_area_display', array(
		'label'             => esc_html__( 'Display on the Front Page', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_hero_area',
		'type'              => 'checkbox',
	) );

	/* Title */
	$wp_customize->add_setting( 'radcliffe_2_hero_area_title', array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_hero_area_title', array(
		'label'             => esc_html__( 'Title', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_hero_area',
		'type'              => 'text',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( 'Write a headline', 'radcliffe-2' ),
		),
	) );

	/* Content */
	$wp_customize->add_setting( 'radcliffe_2_hero_area_content', array(
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_hero_area_content', array(
		'label'             => esc_html__( 'Description', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_hero_area',
		'type'              => 'textarea',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( 'Write some compelling text to encourage people to click the button below', 'radcliffe-2' ),
		),
	) );

	/* Button Text */
	$wp_customize->add_setting( 'radcliffe_2_hero_area_button_text', array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_hero_area_button_text', array(
		'label'             => esc_html__( 'Button Text', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_hero_area',
		'type'              => 'text',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( 'Click Me!', 'radcliffe-2' ),
		),
	) );

	/* Button URL */
	$wp_customize->add_setting( 'radcliffe_2_hero_area_button_url', array(
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_hero_area_button_url', array(
		'label'             => esc_html__( 'Button URL Link', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_hero_area',
		'type'              => 'url',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( 'http://www.example.com/', 'radcliffe-2' ),
		),

	) );

	/* Background Image */
	$wp_customize->add_setting( 'radcliffe_2_hero_area_background', array(
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'radcliffe_2_hero_area_background', array(
		'label'             => esc_html__( 'Background Image', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_hero_area',
	) ) );

	/* Background Image Overlay Opacity */
	$wp_customize->add_setting( 'radcliffe_2_hero_overlay_opacity', array(
		'default'              => 40,
		'type'                 => 'theme_mod',
		'transport'            => 'postMessage',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );

	$wp_customize->add_control( 'radcliffe_2_hero_overlay_opacity', array(
		'label'       => esc_html__( 'Background Overlay', 'radcliffe-2' ),
		'description' => esc_html__( 'Adjust the darkness of the overlay over the background image.', 'radcliffe-2' ),
		'section'     => 'radcliffe_2_hero_area',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 10,
			'min'              => 0,
			'max'              => 90,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 90,
			'aria-valuenow'    => 40,
			'aria-orientation' => 'horizontal',
		),
	) );
}
add_action( 'customize_register', 'radcliffe_2_hero_area_customize_register' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean
 */
function radcliffe_2_hero_area_sanitize_checkbox( $input ) {
	return ( 1 == $input ? true : false );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function radcliffe_2_hero_customize_preview_js() {
	wp_enqueue_script( 'radcliffe-2-hero-customizer', get_template_directory_uri() . '/hero-area/hero-area-customize-preview.js', array( 'jquery', 'customize-preview' ), '20170823', true );
}
add_action( 'customize_preview_init', 'radcliffe_2_hero_customize_preview_js' );

