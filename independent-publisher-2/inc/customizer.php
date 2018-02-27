<?php
/**
 * Independent Publisher 2 Theme Customizer
 *
 * @package Independent_Publisher_2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function independent_publisher_2_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'independent_publisher_2_theme_options', array(
		'title'    => esc_html__( 'Theme Options', 'independent-publisher-2' ),
		'priority' => 130,
	) );

    $wp_customize->add_setting( 'independent_publisher_2_gravatar_email', array(
		'default'           => get_option( 'admin_email' ),
		'sanitize_callback' => 'independent_publisher_2_sanitize_email',
    ) );

    $wp_customize->add_control( 'independent_publisher_2_gravatar_email', array(
		'label'       => esc_html__( 'Header Gravatar', 'independent-publisher-2' ),
		'description' => sprintf( esc_html_x( 'Enter the email address associated with your %1$s, or Globally Recognized Avatar, to be displayed in the header.', 'independent-publisher-2' ),'<a href="https://gravatar.com" target="_blank">Gravatar</a>', 'Gravatar URL' ),
		'section'     => 'independent_publisher_2_theme_options',
		'type'        => 'text',
    ) );

	$wp_customize->add_setting( 'independent_publisher_2_display_reading_time', array(
		'default'           => 1,
		'sanitize_callback' => 'independent_publisher_2_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'independent_publisher_2_display_reading_time', array(
		'label'       => esc_html__( 'Display estimated reading time on posts', 'independent-publisher-2' ),
		'section'     => 'independent_publisher_2_theme_options',
		'type'        => 'checkbox',
    ) );
}
add_action( 'customize_register', 'independent_publisher_2_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function independent_publisher_2_customize_preview_js() {
	wp_enqueue_script( 'independent-publisher-2-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'independent_publisher_2_customize_preview_js' );

/**
 * Sanitizes customizer email inputs.
 *
 * @return bool
 */
function independent_publisher_2_sanitize_email( $value ) {
	if ( '' != $value && is_email( $value ) )
		$value = sanitize_email( $value );
	else
		$value = '';

	return $value;
}

/**
 * Sanitize the checkbox.
 *
 * @param int $input.
 * @return boolean|string
 */
function independent_publisher_2_sanitize_checkbox( $input ) {
	return ( 1 == $input ) ? 1 : '';
}
