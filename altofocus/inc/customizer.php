<?php
/**
 * AltoFocus Theme Customizer.
 *
 * @package AltoFocus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function altofocus_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport              = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport       = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport      = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport      = 'postMessage';
	$wp_customize->get_setting( 'background_image' )->transport      = 'postMessage';
	$wp_customize->get_setting( 'background_position_x' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_position_y' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_size' )->transport       = 'postMessage';
	$wp_customize->get_setting( 'background_repeat' )->transport     = 'postMessage';
	$wp_customize->get_setting( 'background_attachment' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector'        => '.site-title a',
		'render_callback' => 'altofocus_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector'        => '.site-description',
		'render_callback' => 'altofocus_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'altofocus_customize_register' );

/**
 * Custom background settings callback
 */
function altofocus_custom_background_cb() {

	$image = get_background_image();
	$color = get_background_color();

	if ( empty ( $image ) && empty ( $color ) ) {
		return;
	}

	$background_color = get_theme_mod( 'background_color' );
	$background_image = get_theme_mod( 'background_image' );
	$background_position_x = get_theme_mod( 'background_position_x' );
	$background_position_y = get_theme_mod( 'background_position_y' );
	$background_size = get_theme_mod( 'background_size' ) === '' || 'auto' ? 'auto' : get_theme_mod( 'background_size' );
	$background_repeat = get_theme_mod( 'background_repeat' );
	$background_attachment = get_theme_mod( 'background_attachment' );

	$background_styles = '';
	// Make sure background images with a 'scroll' background-attachment display properly
	if ( !empty( $background_image ) && $background_attachment == 'scroll' ) {
		$background_styles = 'body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-image: none !important; background-color: transparent !important; }';
		$background_styles .= 'html {';
		$background_styles .= 'background-color: #' . $background_color . '; ';
		$background_styles .= 'background-image: url("' . esc_url( $background_image ) . '"); ';
		$background_styles .= 'background-position: ' . $background_position_x . ' ' . $background_position_y . '; ';
		$background_styles .= 'background-size: ' . $background_size . '; ';
		$background_styles .= 'background-repeat: ' . $background_repeat . '; ';
		$background_styles .= 'background-attachment: ' . $background_attachment . '; ';
		$background_styles .= '}';
	} else {
		$background_styles = 'html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div {';
		$background_styles .= 'background-color: #' . $background_color . '; ';
		$background_styles .= 'background-image: url("' . esc_url( $background_image ) . '"); ';
		$background_styles .= 'background-position: ' . $background_position_x . ' ' . $background_position_y . '; ';
		$background_styles .= 'background-size: ' . $background_size . '; ';
		$background_styles .= 'background-repeat: ' . $background_repeat . '; ';
		$background_styles .= 'background-attachment: ' . $background_attachment . '; ';
		$background_styles .= '}';
	}

	wp_add_inline_style( 'altofocus-style', $background_styles );
}
add_action( 'wp_enqueue_scripts', 'altofocus_custom_background_cb' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function altofocus_customize_partial_blogname() {
	bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function altofocus_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function altofocus_customize_preview_js() {

	wp_enqueue_script( 'altofocus_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'altofocus_customize_preview_js' );

/**
 * Sets a default boolean of TRUE for Featured Content show-all setting.
 *
 * @param array $settings
 * @return array
 */
function altofocus_featured_content_default_settings( $settings ) {
	$settings['show-all'] = 1;
	return $settings;
}
add_action( 'featured_content_default_settings', 'altofocus_featured_content_default_settings' );

/**
 * Change featured content default settings after theme setup
 */
function altofocus_change_featured_content_default_settings() {
	set_theme_mod( 'featured-content[show-all]', 1 );
	update_option( 'featured-content[show-all]', 1 );
}
add_action( 'after_setup_theme', 'altofocus_change_featured_content_default_settings' );
