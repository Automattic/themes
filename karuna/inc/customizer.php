<?php
/**
 * Karuna Theme Customizer.
 *
 * @package Karuna
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function karuna_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'karuna_theme_options', array(
		'title'    => esc_html__( 'Theme Options', 'karuna' ),
	) );

	$wp_customize->add_setting( 'karuna_display_recent_posts', array(
		'default'           => 1,
		'sanitize_callback' => 'karuna_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'karuna_display_recent_posts', array(
		'label'       => esc_html__( 'Display up to four Recent Posts on the static front page.', 'karuna' ),
		'section'     => 'karuna_theme_options',
		'type'        => 'checkbox',
	) );

}
add_action( 'customize_register', 'karuna_customize_register' );

/**
 * Sanitize the checkbox.
 *
 * @param int $input.
 * @return boolean|string
 */
function karuna_sanitize_checkbox( $input ) {
	return ( 1 == $input ) ? 1 : '';
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function karuna_customize_preview_js() {
	wp_enqueue_script( 'karuna_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'karuna_customize_preview_js' );
