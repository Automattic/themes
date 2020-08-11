<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Seedlet
 */

/**
 * Add setting for hiding page title on the homepage.
 */
function seedlet_wpcom_customize_update( $wp_customize ) {
	$wp_customize->add_setting( 'hide_front_page_title', array(
		'default'              => false,
		'type'                 => 'theme_mod',
		'transport'            => 'postMessage',
		'sanitize_callback'    => 'seedlet_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'hide_front_page_title', array(
		'label'		  => esc_html__( 'Hide Homepage Title', 'seedlet' ),
		'description' => esc_html__( 'Check to hide the page title, if your homepage is set to display a static page.', 'seedlet' ),
		'section'	  => 'static_front_page',
		'priority'	  => 10,
		'type'		  => 'checkbox',
		'settings'	  => 'hide_front_page_title',
	) );
}
add_action( 'customize_register', 'seedlet_wpcom_customize_update' );

/**
* Sanitize the checkbox.
*
* @param boolean $input.
*
* @return boolean true if is 1 or '1', false if anything else
*/
function seedlet_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function seedlet_wpcom_customize_preview_js() {
	wp_enqueue_script( 'seedlet_wpcom_customize_preview', get_theme_file_uri( '/inc/wpcom-customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'seedlet_wpcom_customize_preview_js' );

/**
 * Enqueue our WP.com styles for front-end.
 * Loads after style.css so we can add overrides.
 */
function seedlet_wpcom_scripts() {
	wp_enqueue_style( 'seedlet-wpcom-style', get_template_directory_uri() . '/inc/wpcom-style.css', array( 'seedlet-style' ), '20200629' );
}
add_action( 'wp_enqueue_scripts', 'seedlet_wpcom_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function seedlet_wpcom_body_classes( $classes ) {

	$hide = get_theme_mod( 'hide_front_page_title', false );

	if ( true === $hide ) {
		$classes[] = 'hide-homepage-title';
	}

	$credit_option = get_option( 'footercredit' );

	if ( 'hidden' == $credit_option ) {
		$classes[] = 'hide-footer-credit';
	}

	return $classes;
}
add_filter( 'body_class', 'seedlet_wpcom_body_classes' );

/**
 * Adds custom classes to the admin body classes.
 *
 * @param string $classes Classes for the body element.
 * @return string
 */
function seedlet_wpcom_admin_body_classes( $classes ) {
	global $post;
	$is_block_editor_screen = ( function_exists( 'get_current_screen' ) && get_current_screen() && get_current_screen()->is_block_editor() );
	$hide = get_theme_mod( 'hide_front_page_title', false );
	$front_page = (int) get_option( 'page_on_front' );

	if ( $is_block_editor_screen && $front_page === $post->ID && true === $hide ) {
		$classes .= ' hide-homepage-title';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'seedlet_wpcom_admin_body_classes' );

/**
 * Enqueue our WP.com styles for the block editor.
 */
function seedlet_wpcom_editor_scripts() {
	wp_enqueue_style( 'seedlet-wpcom-editor-style', get_template_directory_uri() . '/inc/wpcom-style-editor.css', array(), '20200629' );
}
add_action( 'enqueue_block_editor_assets', 'seedlet_wpcom_editor_scripts' );
