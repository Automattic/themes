<?php
/**
 * Radcliffe 2 Theme Customizer - Contact Info
 *
 * @package Radcliffe 2
 */

function radcliffe_2_contact_info_customize_register( $wp_customize ) {
	/* Add Section for Contact Info */
	$wp_customize->add_section( 'radcliffe_2_contact_info', array(
		'title'             => esc_html__( 'Contact Info', 'radcliffe-2' ),
		'description'       => esc_html__( 'Display your location, hours, and contact information.', 'radcliffe-2' ),
		'priority'          => 13,
	) );

	/* Display in Header */
	$wp_customize->add_setting( 'radcliffe_2_contact_info_location', array(
		'default' 			=> 'header',
		'sanitize_callback' => 'radcliffe_2_contact_info_sanitize_location',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_contact_info_location', array(
		'label'             => esc_html__( 'Where would you like to display your contact information?', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_contact_info',
		'type'              => 'radio',
		'choices'			=> array(
									'header' => esc_html__( 'In the header', 'radcliffe-2' ),
									'footer' => esc_html__( 'In the footer', 'radcliffe-2' ),
								),
	) );

	/* Address */
	$wp_customize->add_setting( 'radcliffe_2_contact_info_address', array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_contact_info_address', array(
		'label'             => esc_html__( 'Address', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_contact_info',
		'type'              => 'textarea',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( '123 Main St, Somewhere XY, 98765', 'radcliffe-2' ),
		),
	) );

	/* Phone */
	$wp_customize->add_setting( 'radcliffe_2_contact_info_phone', array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_contact_info_phone', array(
		'label'             => esc_html__( 'Phone', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_contact_info',
		'type'              => 'text',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( '(555) 123-4567', 'radcliffe-2' ),
		),
	) );

	/* Email */
	$wp_customize->add_setting( 'radcliffe_2_contact_info_email', array(
		'sanitize_callback' => 'sanitize_email',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_contact_info_email', array(
		'label'             => esc_html__( 'Email', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_contact_info',
		'type'              => 'email',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( 'email@example.com', 'radcliffe-2' ),
		),
	) );

	/* Hours */
	$wp_customize->add_setting( 'radcliffe_2_contact_info_hours', array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'radcliffe_2_contact_info_hours', array(
		'label'             => esc_html__( 'Hours', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_contact_info',
		'type'              => 'textarea',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( 'M-F: 9-5pm - Weekends: 10-4pm', 'radcliffe-2' ),
		),
	) );
}
add_action( 'customize_register', 'radcliffe_2_contact_info_customize_register' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean
 */
function radcliffe_2_contact_info_sanitize_checkbox( $input ) {
	return ( 1 == $input ? true : false );
}

/**
 * Sanitize the Contact Info location value.
 *
 * @param string $display.
 * @return string.
 */
function radcliffe_2_contact_info_sanitize_location( $display ) {
	if ( ! in_array( $display, array( 'header', 'footer' ) ) ) {
		$display = 'header';
	}
	return $display;
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function radcliffe_2_contact_info_customize_preview_js() {
	wp_enqueue_script( 'radcliffe-2-contact-info-customizer', get_template_directory_uri() . '/contact-info/contact-info-customize-preview.js', array( 'jquery', 'customize-preview' ), '20170907', true );
}
add_action( 'customize_preview_init', 'radcliffe_2_contact_info_customize_preview_js' );

