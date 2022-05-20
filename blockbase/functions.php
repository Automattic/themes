<?php

// Load Jetpack packages included with theme (Jetpack plugin is not required).
// Run `composer update --no-dev` to update packages and commit the changes.
require_once 'vendor/autoload.php';

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

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/ponyfill.css',
			)
		);

		// Register two nav menus
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'blockbase' ),
				'social' => __( 'Social Navigation', 'blockbase' )
			)
		);

		add_filter(
			'block_editor_settings_all',
			function( $settings ) {
				$settings['defaultBlockTemplate'] = '<!-- wp:group {"layout":{"inherit":true}} --><div class="wp-block-group"><!-- wp:post-content /--></div><!-- /wp:group -->';
				return $settings;
			}
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'blockbase_support', 9 );

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

	// Add the child theme CSS if it exists.
	if ( file_exists( get_stylesheet_directory() . '/assets/theme.css' ) ) {
		add_editor_style(
			'/assets/theme.css'
		);
	}
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

	// Add the child theme CSS if it exists.
	if ( file_exists( get_stylesheet_directory() . '/assets/theme.css' ) ) {
		wp_enqueue_style( 'blockbase-child-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('blockbase-ponyfill'), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'blockbase_scripts' );

/**
 * Customize Global Styles
 */
if ( class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
	require get_template_directory() . '/inc/customizer/wp-customize-colors.php';
	require get_template_directory() . '/inc/customizer/wp-customize-color-palettes.php';
	require get_template_directory() . '/inc/social-navigation.php';
}

// Font settings migration and deprecation message. Fonts now set in Global Styles.
require get_template_directory() . '/inc/customizer/wp-customize-fonts.php';

// Force menus to reload
add_action(
	'customize_controls_enqueue_scripts',
	static function () {
		wp_enqueue_script(
			'wp-customize-nav-menu-refresh',
			get_template_directory_uri() . '/inc/customizer/wp-customize-nav-menu-refresh.js',
			[ 'customize-nav-menus' ],
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
);

/**
 * Disable the fallback for the core/navigation block.
 */
function blockbase_core_navigation_render_fallback() {
	return null;
}
add_filter( 'block_core_navigation_render_fallback', 'blockbase_core_navigation_render_fallback' );

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

// Add the child theme patterns if they exist.
if ( file_exists( get_stylesheet_directory() . '/inc/block-patterns.php' ) ) {
	require_once get_stylesheet_directory() . '/inc/block-patterns.php';
}


// ----------	Custom Fonts ---------- //

/**
 * Font families used in block settings.
 *
 * @var array
 */
$blockbase_block_font_families = array();

/**
 * Generate url used to load font-face css from Google.
 *
 * @return string
 */
function blockbase_fonts_url() {
	global $blockbase_block_font_families;

	$font_families = [];
	$global_styles_fonts = \Automattic\Jetpack\Fonts\Introspectors\Global_Styles::collect_fonts_from_global_styles();
	$fonts_to_load = array_merge( $blockbase_block_font_families, $global_styles_fonts );
	$fonts_to_load = array_unique( $fonts_to_load );
	$font_settings = blockbase_get_font_settings();

	foreach( $fonts_to_load as $font_slug ) {
		if ( isset( $font_settings[ $font_slug ]['google'] ) ) {
			$font_families[] = $font_settings[ $font_slug ]['google'];
		}
	}

	if ( empty( $font_families ) ) {
		return '';
	}

	// Make a single request for the theme or user fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $font_families ) ) . '&display=swap' );
}

/**
 * Get an array of the fonts from theme.json, with font slug as the key.
 *
 * @return array
 */
function blockbase_get_font_settings() {
	$font_settings = wp_get_global_settings( array( 'typography', 'fontFamilies' ) );
	$remapped_font_settings = array();

	foreach( $font_settings['theme'] as $font ) {
		$remapped_font_settings[ $font['slug'] ] = $font;
	}

	return $remapped_font_settings;
}

/**
 * Gather fonts set in block settings.
 *
 * @filter pre_render_block
 *
 * @param string|null $content The pre-rendered content. Default null.
 * @param array       $parsed_block The block being rendered.
 * @return string|null
 */
function blockbase_enqueue_block_fonts( $content, $parsed_block ) {
	global $blockbase_block_font_families;

	if ( ! is_admin() && isset( $parsed_block['attrs']['fontFamily'] ) ) {
		$block_font_family  = $parsed_block['attrs']['fontFamily'];
		$blockbase_block_font_families[] = $block_font_family;
	}

	return $content;
}
add_filter( 'pre_render_block', 'blockbase_enqueue_block_fonts', 20, 2 );

/**
 * Disable the Jetpack Google Fonts module, since Blockbase provids it's own font loading.
 *
 * Prevents duplicate fonts in font family settings.
 *
 * @return void
 */
function blockbase_disable_jetpack_google_fonts() {
	if ( method_exists( 'Jetpack', 'is_module_active' ) && Jetpack::is_module_active( 'google-fonts' ) ) {
		Jetpack::deactivate_module( 'google-fonts' );
	}
}
add_action( 'init', 'blockbase_disable_jetpack_google_fonts', 0 );
remove_action( 'init', 'wpcomsh_activate_google_fonts_module', 0 );
