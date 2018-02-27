<?php
/**
 * _s Theme Customizer.
 *
 * @package Affinity
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function affinity_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	 * Add the Theme Options section
	 */
	$wp_customize->add_panel( 'affinity_theme_options', array(
		'title' => esc_html__( 'Theme Options', 'affinity' ),
	) );

	// Panel 1
	$wp_customize->add_section( 'affinity_panel1', array(
		'title'           => esc_html__( 'Panel 1', 'affinity' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'affinity_theme_options',
		'description'     => esc_html__( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'affinity' ),
	) );

	$wp_customize->add_setting( 'affinity_panel1', array(
		'default'           => false,
		'sanitize_callback' => 'affinity_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'affinity_panel1', array(
		'label'   => esc_html__( 'Panel Content', 'affinity' ),
		'section' => 'affinity_panel1',
		'type'    => 'dropdown-pages',
	) );

	// Panel 2
	$wp_customize->add_section( 'affinity_panel2', array(
		'title'           => esc_html__( 'Panel 2', 'affinity' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'affinity_theme_options',
		'description'     => esc_html__( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'affinity' ),
	) );

	$wp_customize->add_setting( 'affinity_panel2', array(
		'default'           => false,
		'sanitize_callback' => 'affinity_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'affinity_panel2', array(
		'label'   => esc_html__( 'Panel Content', 'affinity' ),
		'section' => 'affinity_panel2',
		'type'    => 'dropdown-pages',
	) );


	// Panel 3
	$wp_customize->add_section( 'affinity_panel3', array(
		'title'           => esc_html__( 'Panel 3', 'affinity' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'affinity_theme_options',
		'description'     => esc_html__( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'affinity' ),
	) );

	$wp_customize->add_setting( 'affinity_panel3', array(
		'default'           => false,
		'sanitize_callback' => 'affinity_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'affinity_panel3', array(
		'label'   => esc_html__( 'Panel Content', 'affinity' ),
		'section' => 'affinity_panel3',
		'type'    => 'dropdown-pages',
	) );


	// Panel 4
	$wp_customize->add_section( 'affinity_panel4', array(
		'title'           => esc_html__( 'Panel 4', 'affinity' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'affinity_theme_options',
		'description'     => esc_html__( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'affinity' ),
	) );

	$wp_customize->add_setting( 'affinity_panel4', array(
		'default'           => false,
		'sanitize_callback' => 'affinity_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'affinity_panel4', array(
		'label'   => esc_html__( 'Panel Content', 'affinity' ),
		'section' => 'affinity_panel4',
		'type'    => 'dropdown-pages',
	) );


	// Panel 5
	$wp_customize->add_section( 'affinity_panel5', array(
		'title'           => esc_html__( 'Panel 5', 'affinity' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'affinity_theme_options',
		'description'     => esc_html__( 'Add a background image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'affinity' ),
	) );

	$wp_customize->add_setting( 'affinity_panel5', array(
		'default'           => false,
		'sanitize_callback' => 'affinity_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'affinity_panel5', array(
		'label'   => esc_html__( 'Panel Content', 'affinity' ),
		'section' => 'affinity_panel5',
		'type'    => 'dropdown-pages',
	) );

	//General Options

	$wp_customize->add_section( 'affinity_general_options', array(
		'title'    => esc_html__( 'General', 'affinity' ),
		'panel'    => 'affinity_theme_options',
		'priority' => 1,
	) );

	$wp_customize->add_setting( 'affinity_overlay', array(
		'default'           => '0.7',
		'sanitize_callback' => 'affinity_sanitize_overlay',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'affinity_overlay', array(
		'label'   => esc_html__( 'Header Image Opacity', 'affinity' ),
		'section' => 'affinity_general_options',
		'type'    => 'select',
		'choices' => array(
						'0.1' => '10%',
						'0.2' => '20%',
						'0.3' => '30%',
						'0.4' => '40%',
						'0.5' => '50%',
						'0.6' => '60%',
						'0.7' => '70%',
						'0.8' => '80%',
						'0.9' => '90%',
						'1.0' => '100%',
					),
	) );

	$wp_customize->add_setting( 'affinity_scrolling', array(
		'default'           => 1,
		'sanitize_callback' => 'affinity_sanitize_boolean',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'affinity_scrolling', array(
		'label'   => esc_html__( 'Allow Featured Images to scroll in the background on large screens', 'affinity' ),
		'section' => 'affinity_general_options',
		'type'    => 'checkbox',
	) );

}

add_action( 'customize_register', 'affinity_customize_register' );

/**
 * Sanitize a numeric value
 */
function affinity_sanitize_numeric_value( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	} else {
		return 0;
	}
}

/*
 * Sanitize a boolean value
 */

function affinity_sanitize_boolean( $input ) {
	if ( is_bool( $input ) ) {
		return $input;
	} else {
		return true;
	}
}

/* Sanitize overlay setting */
function affinity_sanitize_overlay( $input ) {

	$choices = array(
					'0.1',
					'0.2',
					'0.3',
					'0.4',
					'0.5',
					'0.6',
					'0.7',
					'0.8',
					'0.9',
					'1.0',
				);

	if ( ! in_array( $input, $choices ) ) {
		$input = '0.7';
	}

	return $input;
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function affinity_customize_preview_js() {
	wp_enqueue_script( 'affinity-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'affinity_customize_preview_js' );

/**
 * Allow users to scroll to the section they're editing
 */
function affinity_panels_js() {

	wp_enqueue_script( 'affinity-customizer-panels', get_template_directory_uri() . '/assets/js/customizer-panels.js', array(), '20160328', true );
}
add_action( 'customize_controls_enqueue_scripts', 'affinity_panels_js' );
