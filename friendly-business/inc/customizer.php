<?php
/**
 * Friendly Business: Customizer
 *
 * @package WordPress
 * @subpackage Friendly Business
 * @since 1.0.0
 */

/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function friendly_business_customize_register( $wp_customize ) {
    $wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'friendly-business' );
}
add_action( 'customize_register', 'friendly_business_customize_register' );