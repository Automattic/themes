<?php
/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * 
 * @package Calm_business
 */
function calm_business_customize_register( $wp_customize ) {
    $wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'calm_business' );
}
add_action( 'customize_register', 'calm_business_customize_register' );
