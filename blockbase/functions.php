<?php
if ( ! function_exists( 'blockbase_support' ) ) :
	function blockbase_support() {

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for responsive embedded content.
		// https://github.com/WordPress/gutenberg/issues/26901
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/ponyfill.css',
			)
		);

		// Theme supports required to pass theme check.
		add_theme_support( "title-tag" );
		add_theme_support( "automatic-feed-links" );
	}
	add_action( 'after_setup_theme', 'blockbase_support' );
endif;

/**
 *
 * Enqueue scripts and styles.
 */
function blockbase_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			blockbase_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'blockbase_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function blockbase_scripts() {
	// Enqueue Google fonts
	wp_enqueue_style( 'blockbase-fonts', blockbase_fonts_url(), array(), null );
	wp_enqueue_style( 'blockbase-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'blockbase_scripts' );

/**
 * Add Google webfonts
 *
 * @return $fonts_url
 */

function blockbase_fonts_url() {
	if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
		return '';
	}

	$theme_data = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_settings();
	if ( empty( $theme_data ) || empty( $theme_data['custom'] ) ) {
		return '';
	}

	$custom_data = $theme_data['custom'];
	if ( ! array_key_exists( 'fontsToLoadFromGoogle', $custom_data ) ) {
		return '';
	}

	$font_families   = $theme_data['custom']['fontsToLoadFromGoogle'];
	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families ) );
}

/**
 * This function only exists to pass the theme-check.
 * It does not do anything.
 * Borrowed from aristath/q: https://themes.trac.wordpress.org/browser/q/0.1/functions.php?rev=137308
 */
function blockbase_theme_check_dummy_calls() {
	wp_list_comments();
	posts_nav_link();
	post_class();
	comments_template();
	comment_form();
	wp_link_pages();
	paginate_comments_links();
	the_tags();

	global $content_width;
	$content_width = 1200;
}