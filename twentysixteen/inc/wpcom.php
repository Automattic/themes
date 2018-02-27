<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Twenty Sixteen
 */

/**
 * Adds support for WP.com-specific theme functions.
 *
 * @global array $themecolors
 * @return void
 */
function twentysixteen_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'd1d1d1',
			'text'   => '1a1a1a',
			'link'   => '007acc',
			'url'    => '007acc',
		);
	}

	// Add theme support for Site Logo.
	add_image_size( 'twentysixteen-logo', 2400, 350 );
	add_theme_support( 'site-logo', array( 'size' => 'twentysixteen-logo' ) );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'twentysixteen-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'page'       => true,
		),
	) );
}
add_action( 'after_setup_theme', 'twentysixteen_wpcom_setup' );

/**
 * Return early if Site Logo is not available.
 */
function twentysixteen_the_site_logo() {
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
function twentysixteen_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$custom_fonts = TypekitData::get( 'families' );
		if ( $custom_fonts && $custom_fonts['headings']['id'] && $custom_fonts['body-text']['id'] )
			wp_dequeue_style( 'twentysixteen-fonts' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_dequeue_fonts' );

/**
 * Enqueue our WP.com styles for front-end.
 * Loads after style.css so we can add overrides.
 */
function twentysixteen_wpcom_scripts() {
	wp_enqueue_style( 'twentysixteen-wpcom-style', get_template_directory_uri() . '/css/style-wpcom.css', array( 'twentysixteen-style' ), '20151124' );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_wpcom_scripts' );

/**
 * Remove ratings from excerpts that are used as intro on blog index, single, and archive pages.
 */
function twentysixteen_remove_rating() {
	if ( is_single() || is_archive() || is_home() ) {
		remove_filter( 'the_excerpt', 'polldaddy_show_rating' );
	}
}
add_filter( 'loop_start', 'twentysixteen_remove_rating' );

/**
 * Remove color scheme related stuff in favor of Custom Color in WP.com.
 */
remove_action( 'wp_enqueue_scripts', 'twentysixteen_color_scheme_css' );
remove_action( 'customize_controls_enqueue_scripts', 'twentysixteen_customize_control_js' );
remove_action( 'customize_controls_print_footer_scripts', 'twentysixteen_color_scheme_css_template' );
remove_action( 'wp_enqueue_scripts', 'twentysixteen_page_background_color_css', 11 );
remove_action( 'wp_enqueue_scripts', 'twentysixteen_link_color_css', 11 );
remove_action( 'wp_enqueue_scripts', 'twentysixteen_main_text_color_css', 11 );
remove_action( 'wp_enqueue_scripts', 'twentysixteen_secondary_text_color_css', 11 );
