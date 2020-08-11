<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Seedlet
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function seedlet_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFFFF',
			'txt'    => '333333',
			'link'   => '000000',
			'fg1'    => '3C8067',
			'fg2'    => 'FAFBF6',
		);
	}

	// Disable automatically generated color palettes.
	add_theme_support( 'wpcom-colors', array(
		'only-featured-palettes' => true,
	) );

	/**
	 * De-register original editor color palette in favor of the wpcom implementation
	 */
	remove_theme_support( 'editor-color-palette' );
	remove_theme_support( 'editor-gradient-presets' );

	$wpcom_colors_array = get_theme_mod( 'colors_manager' );
	if ( ! empty( $wpcom_colors_array ) ) {
		$primary    = $wpcom_colors_array['colors']['link'];
		$secondary  = $wpcom_colors_array['colors']['fg1'];
		$foreground = $wpcom_colors_array['colors']['txt'];
		$tertiary   = $wpcom_colors_array['colors']['fg2'];
		$background = $wpcom_colors_array['colors']['bg'];

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'seedlet' ),
					'slug'  => 'primary',
					'color' => $primary
				),
				array(
					'name'  => __( 'Secondary', 'seedlet' ),
					'slug'  => 'secondary',
					'color' => $secondary
				),
				array(
					'name'  => __( 'Foreground', 'seedlet' ),
					'slug'  => 'foreground',
					'color' => $foreground
				),
				array(
					'name'  => __( 'Tertiary', 'seedlet' ),
					'slug'  => 'tertiary',
					'color' => $tertiary
				),
				array(
					'name'  => __( 'Background', 'seedlet' ),
					'slug'  => 'background',
					'color' => $background
				),
			)
		);

		$gradient_color_a = $secondary;
		$gradient_color_b = $tertiary;

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => __( 'Diagonal', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom right, ' . $gradient_color_a . ' 49.9%, ' . $gradient_color_b  . ' 50%)',
					'slug'     => 'hard-diagonal',
				),
				array(
					'name'     => __( 'Diagonal inverted', 'seedlet' ),
					'gradient' => 'linear-gradient(to top left, ' . $gradient_color_a . ' 49.9%, ' . $gradient_color_b . ' 50%)',
					'slug'     => 'hard-diagonal-inverted',
				),
				array(
					'name'     => __( 'Horizontal', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom, ' . $gradient_color_a . ' 50%, ' . $gradient_color_b . ' 50%)',
					'slug'     => 'hard-horizontal',
				),
				array(
					'name'     => __( 'Horizontal inverted', 'seedlet' ),
					'gradient' => 'linear-gradient(to top, ' . $gradient_color_a . ' 50%, ' . $gradient_color_b . ' 50%)',
					'slug'     => 'hard-horizontal-inverted',
				),
				array(
					'name'     => __( 'Diagonal gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom right, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'diagonal',
				),
				array(
					'name'     => __( 'Diagonal inverted gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to top left, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'diagonal-inverted',
				),
				array(
					'name'     => __( 'Horizontal gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'horizontal',
				),
				array(
					'name'     => __( 'Horizontal inverted gradient', 'seedlet' ),
					'gradient' => 'linear-gradient(to top, ' . $gradient_color_a . ', ' . $gradient_color_b . ')',
					'slug'     => 'horizontal-inverted',
				),
				array(
					'name'     => __( 'Stripe', 'seedlet' ),
					'gradient' => 'linear-gradient(to bottom, transparent 20%, ' . $gradient_color_a . ' 20%, ' . $gradient_color_a . ' 80%, transparent 80%)',
					'slug'     => 'stripe',
				),
			)
		);
	}
}
add_action( 'after_setup_theme', 'seedlet_wpcom_setup' );

/**
 * Add settings for hiding page title on the homepage 
 * and a customizer message about contrast.
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

	$wp_customize->add_setting( 'color_a11y_warning' );
    $wp_customize->add_control( 'color_a11y_warning', array(
        'id'          => 'id',
        'label'       => esc_html__( 'Color Accessibility Warning', 'seedlet' ),
		'description' => sprintf(
							__( 'In order to ensure people can read your site, try to maintain a strong contrast ratio between the colors you choose here. <a href="%s" target="_blank">Learn more about color contrast</a>.', 'seedlet' ),
							esc_url( 'https://a11yproject.com/posts/what-is-color-contrast/' )
						 ),
        'section'     => 'colors_manager_tool',
		'priority'	  => 10,
		'type'		  => 'hidden',
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

/**
 * Enqueue CSS for customizer pane.
 */
function seedlet_enqueue_message_scripts() {
	wp_enqueue_style( 'seedlet-customize-message-wpcom-style', get_template_directory_uri() . '/inc/wpcom-customize-message.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'customize_controls_enqueue_scripts', 'seedlet_enqueue_message_scripts' );