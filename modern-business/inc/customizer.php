<?php
/**
 * Modern Business: Customizer
 *
 * @package Modern_Business
 */

/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function modern_business_customize_register( $wp_customize ) {
	$wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'modern-business' );
}
add_action( 'customize_register', 'modern_business_customize_register' );