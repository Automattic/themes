<?php
/**
 * toujours Theme Customizer.
 *
 * @package Toujours
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function toujours_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'toujours_theme_options', array(
		'title'    => esc_html__( 'Theme Options', 'toujours' ),
		'priority' => 130,
	) );

	/* Front Page: Featured Page One */
	$wp_customize->add_setting( 'toujours_recent_posts', array(
		'default'           => '',
		'sanitize_callback' => 'toujours_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'toujours_recent_posts', array(
		'label'             => esc_html__( 'Display the three most recent posts in a special area above your other posts', 'toujours' ),
		'section'           => 'toujours_theme_options',
		'type'              => 'checkbox',
	) );

	/* General - Hide Featured Image borders */
	$wp_customize->add_setting( 'toujours_featured_image_borders', array(
		'default'           => 1,
		'sanitize_callback' => 'toujours_sanitize_checkbox',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'toujours_featured_image_borders', array(
		'label'       => esc_html__( 'Display a thin inset border on featured images', 'toujours' ),
		'section'     => 'toujours_theme_options',
		'type'        => 'checkbox',
	) );
}
add_action( 'customize_register', 'toujours_customize_register' );


/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 *
 * @return boolean true if is 1 or '1', false if anything else
 */
function toujours_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function toujours_customize_preview_js() {
	wp_enqueue_script( 'toujours_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'toujours_customize_preview_js' );
