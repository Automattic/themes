<?php
/**
 * TextBook Theme Customizer.
 *
 * @package TextBook
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function textbook_customize_register( $wp_customize ) {

	// Add the 'featured_page_title' setting.
	$wp_customize->add_section( 'textbook_theme_options', array(
		'title'    => __( 'Theme Options', 'textbook' ),
		'priority' => 200,
	) );

	// Add the 'featured_page_title' setting.
	$wp_customize->add_setting(
		'featured_page_title',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field'
			)
	);

	// Add the 'featured_page_title' control.
	$wp_customize->add_control(
		'featured_page_title',
			array(
				'label'       => esc_html__( 'Featured Content Title', 'textbook' ),
				'description' => esc_html__( 'Enter a custom title for the featured content area.', 'textbook' ),
				'section'     => 'textbook_theme_options',
				'type'        => 'text',
				'priority'    => 40
			)
	);

	// Add the 'featured_page_description' setting.
	$wp_customize->add_setting(
		'featured_page_description',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field'
			)
	);

	// Add the 'featured_page_description' control.
	$wp_customize->add_control(
		'featured_page_description',
			array(
				'label'       => esc_html__( 'Featured Content Description', 'textbook' ),
				'description' => esc_html__( 'Enter a description for the featured content area.', 'textbook' ),
				'section'     => 'textbook_theme_options',
				'type'        => 'textarea',
				'priority'    => 60
			)
	);

	// Add the 'featured_page' setting.
	$wp_customize->add_setting(
		'featured_page',
			array(
				'default'           => 0,
				'sanitize_callback' => 'absint'
			)
	);

	// Add the 'featured_page' control.
	$wp_customize->add_control(
		'featured_page',
			array(
				'label'       => esc_html__( 'Select Featured Page', 'textbook' ),
				'description' => esc_html__( 'Select which page you&#700;d like to highlight above the Featured Content area.', 'textbook' ),
				'section'     => 'textbook_theme_options',
				'type'        => 'dropdown-pages',
				'priority'    => 80
			)
	);

	// Add postMessage support.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'textbook_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function textbook_customize_preview_js() {
	wp_enqueue_script( 'textbook_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'textbook_customize_preview_js' );
