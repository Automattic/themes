<?php
/**
 * Radcliffe 2 Theme Customizer
 *
 * @package Radcliffe 2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function radcliffe_2_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_text' )->transport      = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector'          => '.site-title a',
		'render_callback'   => 'radcliffe_2_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector'          => '.site-description',
		'render_callback'   => 'radcliffe_2_customize_partial_blogdescription',
	) );

	// Set placeholders for Site Title and Tagline
	$wp_customize->get_control( 'blogname' )->input_attrs = array(
		'placeholder' => esc_attr__( 'Enter a name for your site', 'radcliffe-2' ),
	);
	$wp_customize->get_control( 'blogdescription' )->input_attrs = array(
		'placeholder' => esc_attr__( 'A short phrase describing your site', 'radcliffe-2' ),
	);

	// Reorder Radcliffe 2 Customizer Panels
	$wp_customize->get_section( 'title_tagline' )->priority = 11;
	$wp_customize->get_section( 'style_pack_theme_options' )->priority = 14;

}
add_action( 'customize_register', 'radcliffe_2_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function radcliffe_2_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function radcliffe_2_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function radcliffe_2_customize_preview_js() {
	wp_enqueue_script( 'radcliffe-2-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'radcliffe_2_customize_preview_js' );

/**
 * Logo Resizer Awesomeness - Bringing logo resizing to the Customizer since 2017
 */
require get_template_directory() . '/inc/logo-resizer.php';
