<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Blank Canvas
 */

/**
 * Remove setting for hiding page title on the homepage.
 */
function blank_canvas_wpcom_customize_update( $wp_customize ) {
	$wp_customize->remove_control( 'hide_front_page_title');
	$wp_customize->remove_control( 'hide_site_header' );
	$wp_customize->remove_control( 'hide_site_footer' );
}
add_action( 'customize_register', 'blank_canvas_wpcom_customize_update', 11 );
