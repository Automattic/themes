<?php
/**
 * Lodestar Theme Customizer.
 *
 * @package Lodestar
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lodestar_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	 * Add the Theme Options section
	 */
	$wp_customize->add_panel( 'lodestar_options_panel', array(
		'title'          => esc_html__( 'Theme Options', 'lodestar' ),
		'description'    => esc_html__( 'Configure your theme settings', 'lodestar' ),
	) );

	// Top of site content
	$wp_customize->add_section( 'lodestar_top_of_site', array(
		'title'           => esc_html__( 'Header Top Text', 'lodestar' ),
		'panel'           => 'lodestar_options_panel',
		'description'	  => esc_html__( 'Add a short bit of content to the top of your website.', 'lodestar' ),
	) );

	$wp_customize->add_setting( 'lodestar_header_top_text_1', array(
		'sanitize_callback'	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( 'lodestar_header_top_text_1', array(
		'section'		=> 'lodestar_top_of_site',
		'type'			=> 'textarea',
		'priority'		=> 1,
		'label'         => esc_html__( 'Header Top Text 1', 'lodestar' ),
	) );

	$wp_customize->add_setting( 'lodestar_header_top_text_2', array(
		'sanitize_callback'	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( 'lodestar_header_top_text_2', array(
		'section'		=> 'lodestar_top_of_site',
		'type'			=> 'textarea',
		'priority'		=> 1,
		'label'			=> esc_html__( 'Header Top Text 2', 'lodestar' ),
	) );

	// Panel 1
	$wp_customize->add_section( 'lodestar_panel1', array(
		'title'           => esc_html__( 'Panel 1', 'lodestar' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'lodestar_options_panel',
		'description'     => esc_html__( 'Add an image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'lodestar' ),
	) );

	$wp_customize->add_setting( 'lodestar_panel1', array(
		'default'           => false,
		'sanitize_callback' => 'lodestar_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'lodestar_panel1', array(
		'label'   => esc_html__( 'Panel Content', 'lodestar' ),
		'section' => 'lodestar_panel1',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'lodestar_panel1_layout', array(
		'default'           => 'one-column',
		'sanitize_callback' => 'lodestar_sanitize_layout',
	) );

	$wp_customize->add_control( 'lodestar_panel1_layout', array(
		'label'   => esc_html__( 'Panel Layout', 'lodestar' ),
		'section' => 'lodestar_panel1',
		'type'    => 'radio',
		'choices' => array(
			'one-column' => esc_html__( 'One Column', 'lodestar' ),
			'two-column' => esc_html__( 'Two Column', 'lodestar' ),
		),
	) );

	// Panel 2
	$wp_customize->add_section( 'lodestar_panel2', array(
		'title'           => esc_html__( 'Panel 2', 'lodestar' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'lodestar_options_panel',
		'description'     => esc_html__( 'Add an image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'lodestar' ),
	) );

	$wp_customize->add_setting( 'lodestar_panel2', array(
		'default'           => false,
		'sanitize_callback' => 'lodestar_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'lodestar_panel2', array(
		'label'   => esc_html__( 'Panel Content', 'lodestar' ),
		'section' => 'lodestar_panel2',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'lodestar_panel2_layout', array(
		'default'           => 'one-column',
		'sanitize_callback' => 'lodestar_sanitize_layout',
	) );

	$wp_customize->add_control( 'lodestar_panel2_layout', array(
		'label'   => esc_html__( 'Panel Layout', 'lodestar' ),
		'section' => 'lodestar_panel2',
		'type'    => 'radio',
		'choices' => array(
			'one-column' => esc_html__( 'One Column', 'lodestar' ),
			'two-column' => esc_html__( 'Two Column', 'lodestar' ),
		),
	) );

	// Panel 3
	$wp_customize->add_section( 'lodestar_panel3', array(
		'title'           => esc_html__( 'Panel 3', 'lodestar' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'lodestar_options_panel',
		'description'     => esc_html__( 'Add an image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'lodestar' ),
	) );

	$wp_customize->add_setting( 'lodestar_panel3', array(
		'default'           => false,
		'sanitize_callback' => 'lodestar_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'lodestar_panel3', array(
		'label'   => esc_html__( 'Panel Content', 'lodestar' ),
		'section' => 'lodestar_panel3',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'lodestar_panel3_layout', array(
		'default'           => 'one-column',
		'sanitize_callback' => 'lodestar_sanitize_layout',
	) );

	$wp_customize->add_control( 'lodestar_panel3_layout', array(
		'label'   => esc_html__( 'Panel Layout', 'lodestar' ),
		'section' => 'lodestar_panel3',
		'type'    => 'radio',
		'choices' => array(
			'one-column' => esc_html__( 'One Column', 'lodestar' ),
			'two-column' => esc_html__( 'Two Column', 'lodestar' ),
		),
	) );

	// Panel 4
	$wp_customize->add_section( 'lodestar_panel4', array(
		'title'           => esc_html__( 'Panel 4', 'lodestar' ),
		'active_callback' => 'is_front_page',
		'panel'           => 'lodestar_options_panel',
		'description'     => esc_html__( 'Add an image to your panel by setting a featured image in the page editor. If you don&rsquo;t select a page, this panel will not be displayed.', 'lodestar' ),
	) );

	$wp_customize->add_setting( 'lodestar_panel4', array(
		'default'           => false,
		'sanitize_callback' => 'lodestar_sanitize_numeric_value',
	) );

	$wp_customize->add_control( 'lodestar_panel4', array(
		'label'   => esc_html__( 'Panel Content', 'lodestar' ),
		'section' => 'lodestar_panel4',
		'type'    => 'dropdown-pages',
	) );

	$wp_customize->add_setting( 'lodestar_panel4_layout', array(
		'default'           => 'one-column',
		'sanitize_callback' => 'lodestar_sanitize_layout',
	) );

	$wp_customize->add_control( 'lodestar_panel4_layout', array(
		'label'   => esc_html__( 'Panel Layout', 'lodestar' ),
		'section' => 'lodestar_panel4',
		'type'    => 'radio',
		'choices' => array(
			'one-column' => esc_html__( 'One Column', 'lodestar' ),
			'two-column' => esc_html__( 'Two Column', 'lodestar' ),
		),
	) );

	// Footer Image
	$wp_customize->add_section( 'lodestar_footer_settings', array(
		'title'	  => esc_html__( 'Footer Image', 'lodestar' ),
		'panel'	  => 'lodestar_options_panel',
		'default' => '',
	) );

	$wp_customize->add_setting('lodestar_footer_image', array(
		'transport'			=> 'refresh',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		'lodestar_footer_image', array(
		'label'		=> esc_html__( 'Footer Image', 'lodestar' ),
		'section'	=> 'lodestar_footer_settings',
		'description' => esc_html__( 'Add an image to be displayed at the bottom of the Front Page template, above the footer.', 'lodestar' ),
	) ) );
}
add_action( 'customize_register', 'lodestar_customize_register' );


/**
 * Sanitize a numeric value
 */
function lodestar_sanitize_numeric_value( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	} else {
		return 0;
	}
}

/**
 * Sanitize a radio button
 */
function lodestar_sanitize_layout( $input ) {
    $valid = array(
        'one-column' => esc_html__( 'One Column', 'lodestar' ),
        'two-column' => esc_html__( 'Two Column', 'lodestar' ),
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lodestar_customize_preview_js() {
	wp_enqueue_script( 'lodestar_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'lodestar_customize_preview_js' );

/**
 * Some extra JavaScript to improve the user experience in the Customizer for this theme.
 */
function lodestar_panels_js() {
	wp_enqueue_script( 'lodestar_extra_js', get_template_directory_uri() . '/assets/js/panel-customizer.js', array(), '20151116', true );
}
add_action( 'customize_controls_enqueue_scripts', 'lodestar_panels_js' );
