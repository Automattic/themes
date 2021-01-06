<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Varia
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function varia_wpcom_setup() {
	global $themecolors;

	// Disable automatically generated color palettes.
	add_theme_support( 'wpcom-colors', array(
	        'only-featured-palettes' => true,
	) );

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => '767676',
			'text'   => '111111',
			'link'   => '0073aa',
			'url'    => '0073aa',
		);
	}
}
add_action( 'after_setup_theme', 'varia_wpcom_setup' );

/**
 * Add setting for hiding page title on the homepage.
 */
function varia_wpcom_customize_update( $wp_customize ) {
	$wp_customize->add_setting( 'hide_front_page_title', array(
		'default'              => false,
		'type'                 => 'theme_mod',
		'transport'            => 'postMessage',
		'sanitize_callback'    => 'varia_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'hide_front_page_title', array(
		'label'		  => esc_html__( 'Hide Homepage Title', 'varia' ),
		'description' => esc_html__( 'Check to hide the page title, if your homepage is set to display a static page.', 'varia' ),
		'section'	  => 'static_front_page',
		'priority'	  => 10,
		'type'		  => 'checkbox',
		'settings'	  => 'hide_front_page_title',
	) );

	$wp_customize->add_setting( 'hide_site_header', array(
		'default'              => false,
		'type'                 => 'theme_mod',
		'transport'            => 'postMessage',
		'sanitize_callback'    => 'varia_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'hide_site_header', array(
		'label'		  => esc_html__( 'Hide the Site Header', 'varia' ),
		'description' => esc_html__( 'Check to hide the site header, if your homepage is set to display a static page.', 'varia' ),
		'section'	  => 'static_front_page',
		'priority'	  => 10,
		'type'		  => 'checkbox',
		'settings'	  => 'hide_site_header',
	) );

	$wp_customize->add_setting( 'hide_site_footer', array(
		'default'              => false,
		'type'                 => 'theme_mod',
		'transport'            => 'postMessage',
		'sanitize_callback'    => 'varia_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'hide_site_footer', array(
		'label'		  => esc_html__( 'Hide the Site Footer Menu & Widgets', 'varia' ),
		'description' => esc_html__( 'Check to hide the site menu & widgets in the footer, if your homepage is set to display a static page.', 'varia' ),
		'section'	  => 'static_front_page',
		'priority'	  => 10,
		'type'		  => 'checkbox',
		'settings'	  => 'hide_site_footer',
	) );

    $wp_customize->add_setting( 'color_a11y_warning' );
    $wp_customize->add_control( 'color_a11y_warning', array(
        'id'          => 'id',
        'label'       => esc_html__( 'Color Accessibility Warning', 'varia' ),
		'description' => sprintf(
							__( 'In order to ensure people can read your site, try to maintain a strong contrast ratio between the colors you choose here. <a href="%s" target="_blank">Learn more about color contrast</a>.', 'varia' ),
							esc_url( 'https://a11yproject.com/posts/what-is-color-contrast/' )
						 ),
        'section'     => 'colors_manager_tool',
		'priority'	  => 10,
		'type'		  => 'hidden',
    ) );

}
add_action( 'customize_register', 'varia_wpcom_customize_update' );

/**
* Sanitize the checkbox.
*
* @param boolean $input.
*
* @return boolean true if is 1 or '1', false if anything else
*/
function varia_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function varia_wpcom_customize_preview_js() {
	wp_enqueue_script( 'varia_wpcom_customize_preview', get_theme_file_uri( '/inc/customize-preview-wpcom.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'varia_wpcom_customize_preview_js' );

/**
 * Enqueue our WP.com styles for front-end.
 * Loads after style.css so we can add overrides.
 */
function varia_wpcom_scripts() {
	wp_enqueue_style( 'varia-wpcom-style', get_template_directory_uri() . '/inc/style-wpcom.css', array( 'varia-style' ), '20181218' );
}
add_action( 'wp_enqueue_scripts', 'varia_wpcom_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function varia_wpcom_body_classes( $classes ) {

	$hide = get_theme_mod( 'hide_front_page_title', false );

	if ( true === $hide ) {
		$classes[] = 'hide-homepage-title';
	}

	$hide_page_header = get_theme_mod( 'hide_page_header', false );

	if ( true === $hide_page_header ) {
		$classes[] = 'hide-homepage-header';
	}

	$hide_page_footer = get_theme_mod( 'hide_page_footer', false );

	if ( true === $hide_page_footer ) {
		$classes[] = 'hide-homepage-footer';
	}

	$credit_option = get_option( 'footercredit' );

	if ( 'hidden' == $credit_option ) {
		$classes[] = 'hide-footer-credit';
	}

	return $classes;
}
add_filter( 'body_class', 'varia_wpcom_body_classes' );

/**
 * Adds custom classes to the admin body classes.
 *
 * @param string $classes Classes for the body element.
 * @return string
 */
function varia_wpcom_admin_body_classes( $classes ) {
	global $post;
	$is_block_editor_screen = ( function_exists( 'get_current_screen' ) && get_current_screen() && get_current_screen()->is_block_editor() );
	$hide = get_theme_mod( 'hide_front_page_title', false );
	$front_page = (int) get_option( 'page_on_front' );

	if ( $is_block_editor_screen && $front_page === $post->ID && true === $hide ) {
		$classes .= ' hide-homepage-title';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'varia_wpcom_admin_body_classes' );

/**
 * Enqueue our WP.com styles for the block editor.
 */
function varia_wpcom_editor_scripts() {
	wp_enqueue_style( 'varia-wpcom-editor-style', get_template_directory_uri() . '/inc/style-editor-wpcom.css', array(), '20190906' );
}
add_action( 'enqueue_block_editor_assets', 'varia_wpcom_editor_scripts' );

/**
 * Enqueue CSS for customizer a11y warning.
 */
function varia_enqueue_message_scripts() {
	wp_enqueue_style( 'varia-customize-message-wpcom-style', get_template_directory_uri() . '/inc/customize-message-wpcom.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'customize_controls_enqueue_scripts', 'varia_enqueue_message_scripts' );
