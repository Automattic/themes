<?php
/**
 * _Dsgnsystm: Customizer
 *
 * @package WordPress
 * @subpackage _Dsgnsystm
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _dsgnsystm_customize_register( $wp_customize ) {
	$wp_customize->remove_setting( 'blogname' );
	$wp_customize->remove_setting( 'blogdescription' );
	$wp_customize->remove_control( 'blogname' );
	$wp_customize->remove_control( 'blogdescription' );

	/**
	 * Primary color.
	 */
	$wp_customize->add_setting(
		'primary_color',
		array(
			'default'           => 'default',
			'transport'         => 'postMessage',
			'sanitize_callback' => '_dsgnsystm_sanitize_color_option',
		)
	);

	$wp_customize->add_control(
		'primary_color',
		array(
			'type'     => 'radio',
			'label'    => __( 'Primary Color', '_dsgnsystm' ),
			'choices'  => array(
				'default' => _x( 'Default', 'primary color', '_dsgnsystm' ),
				'custom'  => _x( 'Custom', 'primary color', '_dsgnsystm' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);

	// Add primary color hue setting and control.
	$wp_customize->add_setting(
		'primary_color_hue',
		array(
			'default'           => _dsgnsystm_get_default_hue(),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color_hue',
			array(
				'description' => __( 'Apply a custom color for buttons, links, featured images, etc.', '_dsgnsystm' ),
				'section'     => 'colors',
				'mode'        => 'hue',
			)
		)
	);

	// Add image filter setting and control.
	$wp_customize->add_setting(
		'image_filter',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'image_filter',
		array(
			'label'   => __( 'Apply a filter to featured images using the primary color', '_dsgnsystm' ),
			'section' => 'colors',
			'type'    => 'checkbox',
		)
	);
}
add_action( 'customize_register', '_dsgnsystm_customize_register', 11 );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function _dsgnsystm_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function _dsgnsystm_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function _dsgnsystm_customize_preview_js() {
	wp_enqueue_script( '_dsgnsystm-customize-preview', get_theme_file_uri( '/js/customize-preview.js' ), array( 'customize-preview' ), '20181231', true );
	wp_localize_script( '_dsgnsystm-customize-preview', '_DsgnsystmPreviewData', array(
		'default_hue' => _dsgnsystm_get_default_hue()
	));
}
add_action( 'customize_preview_init', '_dsgnsystm_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function _dsgnsystm_panels_js() {
	wp_enqueue_script( '_dsgnsystm-customize-controls', get_theme_file_uri( '/js/customize-controls.js' ), array(), '20181231', true );
}
add_action( 'customize_controls_enqueue_scripts', '_dsgnsystm_panels_js' );

/**
 * Sanitize custom color choice.
 *
 * @param string $choice Whether image filter is active.
 *
 * @return string
 */
function _dsgnsystm_sanitize_color_option( $choice ) {
	$valid = array(
		'default',
		'custom',
	);

	if ( in_array( $choice, $valid, true ) ) {
		return $choice;
	}

	return 'default';
}
