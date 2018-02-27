<?php
/**
 * WordPress.com-specific functions and definitions
 *
 * @package Twenty Fifteen
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 * @return void
 */
function twentyfifteen_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'eaeaea',
			'text'   => '333333',
			'link'   => '333333',
			'url'    => '333333',
		);
	}

	// Add theme support for Site Logo.
	add_image_size( 'twentyfifteen-logo', 1466, 272 );
	add_theme_support( 'site-logo', array( 'size' => 'twentyfifteen-logo' ) );
}
add_action( 'after_setup_theme', 'twentyfifteen_wpcom_setup' );

/**
 * Return early if Site Logo is not available.
 */
function twentyfifteen_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
 * De-queue Google fonts if custom fonts are being used instead.
 *
 * @return void
 */
function twentyfifteen_dequeue_fonts() {
	if ( class_exists( 'Jetpack_Fonts' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		if ( class_exists( 'TypekitUtil' ) ) {
			$custom_fonts = Jetpack_Fonts::get_instance()->get_fonts();
			if ( ! empty( $custom_fonts ) && TypekitUtil::any_selected_fonts( $custom_fonts ) ) {
				wp_dequeue_style( 'twentyfifteen-fonts' );
			}
		}
	}
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_dequeue_fonts' );

/**
 * Enqueue our WP.com styles for front-end.
 * Loads after style.css so we can add overrides.
 */
function twentyfifteen_wpcom_scripts() {
	wp_enqueue_style( 'twentyfifteen-wpcom-style', get_template_directory_uri() . '/css/style-wpcom.css', array( 'twentyfifteen-style' ), '20141202' );

	wp_enqueue_script( 'twentyfifteen-wpcom-js', get_template_directory_uri() . '/js/wpcom.js', array( 'jquery' ), '20141208', true );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_wpcom_scripts' );

/**
 * Remove color scheme related stuff in favor of Custom Color in WP.com.
 */
remove_action( 'wp_enqueue_scripts', 'twentyfifteen_color_scheme_css' );
remove_action( 'customize_controls_enqueue_scripts', 'twentyfifteen_customize_control_js' );
remove_action( 'customize_controls_print_footer_scripts', 'twentyfifteen_color_scheme_css_template' );
remove_action( 'wp_enqueue_scripts', 'twentyfifteen_header_background_color_css', 11 );
remove_action( 'wp_enqueue_scripts', 'twentyfifteen_sidebar_text_color_css', 11 );
