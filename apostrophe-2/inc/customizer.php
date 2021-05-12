<?php
/**
 * Apostrophe 2 Theme Customizer
 *
 * @package Apostrophe 2 2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function apostrophe_2_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	function apostrophe_2_sanitize_checkbox( $checked ){ 
            return ( ( isset( $checked ) && true == $checked ) ? true : false );
        }
	
	if ( function_exists( 'jetpack_social_menu' ) ) {
		$wp_customize->add_setting( 'apostrophe_2_mobile_social', array(
  			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'sanitize_callback'  => 'apostrophe_2_sanitize_checkbox',
		) );

		$wp_customize->add_control( 'apostrophe_2_mobile_social', array(
  			'type' => 'checkbox',
  			'section' => 'jetpack_content_options',
  			'label' => __( 'Display social menu on mobile devices', 'apostrophe-2' ),
		) );
	}	
}
add_action( 'customize_register', 'apostrophe_2_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function apostrophe_2_customize_preview_js() {
	wp_enqueue_script( 'apostrophe-2-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'apostrophe_2_customize_preview_js' );
