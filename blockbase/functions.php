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

// Opt-in to separate styles loading.
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Attach extra styles to multiple blocks.
 */
function blockbase_enqueue_block_styles() {
	$files = glob( get_template_directory() . '/assets/blocks/*.css' );

	$styled_blocks = array();
	foreach ( $files as $filename ) {
		$styled_blocks[] = str_replace(
			[ get_template_directory() . '/assets/blocks/', '.css', '.css' ],
			'',
			$filename
		);
	}

	foreach ( $styled_blocks as $block_name ) {
		// Get the stylesheet handle. This is backwards-compatible and checks the
		// availability of the `wp_should_load_separate_core_block_assets` function,
		// and whether we want to load separate styles per-block or not.
		$handle = (
			function_exists( 'wp_should_load_separate_core_block_assets' ) &&
			wp_should_load_separate_core_block_assets()
		) ? "wp-block-$block_name" : 'wp-block-library';

		// Get the styles.
		$styles = file_get_contents( get_theme_file_path( "assets/blocks/$block_name.css" ) );

		// Add frontend styles.
		wp_add_inline_style( $handle, $styles );

		// Add editor styles.
		add_editor_style( "styles/blocks/$block_name.css" );
		if ( file_exists( get_theme_file_path( "assets/blocks/$block_name-editor.css" ) ) ) {
			add_editor_style( "styles/blocks/$block_name-editor.css" );
		}
	}
}
// Add frontend styles.
add_action( 'wp_enqueue_scripts', 'blockbase_enqueue_block_styles' );
// Add editor styles.
add_action( 'admin_init', 'blockbase_enqueue_block_styles' );
