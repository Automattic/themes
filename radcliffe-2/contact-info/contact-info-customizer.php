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
	$wp_customize->add_setting( 'site_contact_info[address]', array(
		'type'                 => 'option',
		'sanitize_callback'    => 'radcliffe_2_contact_info_sanitize_address',
		'sanitize_js_callback' => radcliffe_2_generate_contact_compat_callback( 'address' ),
		'transport'            => 'postMessage',
	) );

	$wp_customize->add_control( 'site_contact_info[address]', array(
		'label'             => esc_html__( 'Address', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_contact_info',
		'type'              => 'textarea',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( '123 Main St, Somewhere XY, 98765', 'radcliffe-2' ),
		),
	) );

	/* Phone */
	$wp_customize->add_setting( 'site_contact_info[phone]', array(
		'type'                 => 'option',
		'sanitize_callback'    => 'radcliffe_2_contact_info_sanitize_phone',
		'sanitize_js_callback' => radcliffe_2_generate_contact_compat_callback( 'phone' ),
		'transport'            => 'postMessage',
	) );

	$wp_customize->add_control( 'site_contact_info[phone]', array(
		'label'             => esc_html__( 'Phone', 'radcliffe-2' ),
		'section'           => 'radcliffe_2_contact_info',
		'type'              => 'text',
		'input_attrs'	    => array(
			'placeholder' => esc_attr__( '(555) 123-4567', 'radcliffe-2' ),
		),
	) );

	/* Email */
	$wp_customize->add_setting( 'site_contact_info[email]', array(
		'type'                 => 'option',
		'sanitize_callback'    => 'radcliffe_2_contact_info_sanitize_email',
		'sanitize_js_callback' => radcliffe_2_generate_contact_compat_callback( 'email' ),
		'transport'            => 'postMessage',
	) );

	$wp_customize->add_control( 'site_contact_info[email]', array(
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
 * For use in `sanitize_js_callback` params to filter in our old,
 * theme-mod based options. Using a generator because repetition is boring.
 *
 * @param  string $name The field we're maybe filtering in
 * @return function     A function for use in `sanitize_js_callback`
 */
function radcliffe_2_generate_contact_compat_callback( $name ) {
	return function( $value ) use ( $name ) {
		// if there's a value, we're fine
		if ( ! empty( $value ) ) {
			return $value;
		}
		// pull from the old theme mod value
		$option = get_theme_mod( 'radcliffe_2_contact_info_' . $name );
		if ( ! empty( $option ) ) {
			return $option;
		}
		// nothing to see here
		return $value;
	};
}

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
 * Sanitize the Contact Info address value and remove legacy theme_mod value,
 * since we're saving the values in blog options as of r52410.
 *
 * @param string $value.
 * @return string.
 */
function radcliffe_2_contact_info_sanitize_address( $value ) {
	if ( ! empty( get_theme_mod( 'radcliffe_2_contact_info_address' ) ) ) {
		remove_theme_mod( 'radcliffe_2_contact_info_address' );
	}
	return sanitize_text_field( $value );
}

/**
 * Sanitize the Contact Info phone value and remove legacy theme_mod value,
 * since we're saving the values in blog options as of r52410.
 *
 * @param string $value.
 * @return string.
 */
function radcliffe_2_contact_info_sanitize_phone( $value ) {
	if ( ! empty( get_theme_mod( 'radcliffe_2_contact_info_phone' ) ) ) {
		remove_theme_mod( 'radcliffe_2_contact_info_phone' );
	}
	return sanitize_text_field( $value );
}

/**
 * Sanitize the Contact Info email value and remove legacy theme_mod value,
 * since we're saving the values in blog options as of r52410.
 *
 * @param string $value.
 * @return string.
 */
function radcliffe_2_contact_info_sanitize_email( $value ) {
	if ( ! empty( get_theme_mod( 'radcliffe_2_contact_info_email' ) ) ) {
		remove_theme_mod( 'radcliffe_2_contact_info_email' );
	}
	return sanitize_email( $value );
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

