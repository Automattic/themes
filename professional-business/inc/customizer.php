<?php
/**
 * Professional Business: Customizer
 *
 * @package WordPress
 * @subpackage Professional_Business
 * @since 1.0.0
 */

/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function professional_business_customize_register( $wp_customize ) {
    $wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'professional-business' );
}
add_action( 'customize_register', 'professional_business_customize_register' );