<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Elegant_Business
 */

/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function elegant_business_customize_register( $wp_customize ) {
    $wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'elegant-business' );
}
add_action( 'customize_register', 'elegant_business_customize_register' );