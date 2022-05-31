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
	wp_enqueue_style( 'blockbase-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' ) );

	// Add the child theme CSS if it exists.
	if ( file_exists( get_stylesheet_directory() . '/assets/theme.css' ) ) {
		wp_enqueue_style( 'blockbase-child-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('blockbase-ponyfill'), wp_get_theme()->get( 'Version' ) );
	}

	blockbase_enqueue_default_fonts();
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

// ---------- Custom Fonts ---------- //
// This code is adapted directly from Jetpack's Google Fonts module, which depends on the Webfonts API from Gutenberg (and eventually Core)
// https://github.com/Automattic/jetpack/blob/master/projects/plugins/jetpack/modules/google-fonts.php
const BLOCKBASE_GOOGLE_FONTS_LIST = array(
	'arvo' => array( 'font_family' => 'Arvo'),
	'bodoni-moda' => array( 'font_family' => 'Bodoni Moda'),
	'cabin' => array( 'font_family' => 'Cabin'),
	'chivo' => array( 'font_family' => 'Chivo'),
	'courier-prime' => array( 'font_family' => 'Courier Prime'),
	'dm-sans' => array( 'font_family' => 'DM Sans' ),
	'domine' => array( 'font_family' => 'Domine'),
	'eb-garamond' => array( 'font_family' => 'EB Garamond'),
	'fira-sans' => array( 'font_family' => 'Fira Sans'),
	'ibm-plex-sans' => array( 'font_family' => 'IBM Plex Sans'),
	'ibm-plex-mono' => array( 'font_family' => 'IBM Plex Mono'),
	'inter' => array( 'font_family' => 'Inter'),
	'josefin-sans' => array( 'font_family' => 'Josefin Sans'),
	'jost' => array( 'font_family' => 'Jost'),
	'libre-baskerville' => array( 'font_family' => 'Libre Baskerville'),
	'libre-franklin' => array( 'font_family' => 'Libre Franklin'),
	'literata' => array( 'font_family' => 'Literata'),
	'lora' => array( 'font_family' => 'Lora'),
	'merriweather' => array( 'font_family' => 'Merriweather'),
	'montserrat' => array( 'font_family' => 'Montserrat'),
	'newsreader' => array( 'font_family' => 'Newsreader'),
	'nunito' => array( 'font_family' => 'Nunito'),
	'open-sans' => array( 'font_family' => 'Open Sans'),
	'overpass' => array( 'font_family' => 'Overpass'),
	'playfair-display' => array( 'font_family' => 'Playfair Display'),
	'poppins' => array( 'font_family' => 'Poppins'),
	'raleway' => array( 'font_family' => 'Raleway'),
	'red-hat-display' => array( 'font_family' => 'Red Hat Display'),
	'roboto' => array( 'font_family' => 'Roboto'),
	'roboto-slab' => array( 'font_family' => 'Roboto Slab'),
	'rubik' => array( 'font_family' => 'Rubik'),
	'source-sans-pro' => array( 'font_family' => 'Source Sans Pro'),
	'source-serif-pro' => array( 'font_family' => 'Source Serif Pro'),
	'space-mono' => array( 'font_family' => 'Space Mono'),
	'texturina' => array( 'font_family' => 'Texturina'),
	'work-sans' => array( 'font_family' => 'Work Sans'),
);

/**
 * Register a curated selection of Google Fonts.
 *
 * @return void
 */
function blockbase_register_google_fonts() {
	// Use jetpack's implementation of custom google fonts if it is already active
	if ( method_exists( 'Jetpack', 'is_module_active' ) && Jetpack::is_module_active( 'google-fonts' ) ) {
		return;
	}

	if ( ! function_exists( 'wp_register_webfont_provider' ) || ! function_exists( 'wp_register_webfonts' ) ) {
		return;
	}

	wp_register_webfont_provider( 'blockbase-google-fonts', '\Automattic\Jetpack\Fonts\Google_Fonts_Provider' );

	/**
	 * Curated list of Google Fonts.
	 *
	 * @module google-fonts
	 *
	 * @since 10.8
	 *
	 * @param array $fonts_to_register Array of Google Font names to register.
	 */
	$fonts_to_register = apply_filters( 'blockbase_google_fonts_list', BLOCKBASE_GOOGLE_FONTS_LIST );

	foreach ( $fonts_to_register as $font_settings ) {
		$font_family = $font_settings['font_family'];

		wp_register_webfonts(
			array(
				array(
					'font-family'  => $font_family,
					'font-weight'  => '100 900',
					'font-style'   => 'normal',
					'font-display' => 'swap',
					'provider'     => 'blockbase-google-fonts',
				),
				array(
					'font-family'  => $font_family,
					'font-weight'  => '100 900',
					'font-style'   => 'italic',
					'font-display' => 'swap',
					'provider'     => 'blockbase-google-fonts',
				),
			)
		);
	}

	add_filter( 'wp_resource_hints', '\Automattic\Jetpack\Fonts\Utils::font_source_resource_hint', 10, 2 );
	add_filter( 'pre_render_block', '\Automattic\Jetpack\Fonts\Introspectors\Blocks::enqueue_block_fonts', 10, 2 );
	add_action( 'init', '\Automattic\Jetpack\Fonts\Introspectors\Global_Styles::enqueue_global_styles_fonts' );
}
add_action( 'after_setup_theme', 'blockbase_register_google_fonts' );

/**
 * Automatically enqueues default blockbase theme google fonts
 *
 * @return void
 */
function blockbase_enqueue_default_fonts() {
	if ( ! function_exists( 'wp_enqueue_webfont' ) ) {
		return;
	}

	$font_settings = wp_get_global_settings( array( 'typography', 'fontFamilies' ), 'base' );

	if ( ! isset( $font_settings['theme'] ) ) {
		return;
	}

	foreach( $font_settings['theme'] as $font_setting ) {
		if ( ! isset( $font_setting['fontSlug'] ) ) {
			continue;
		}

		$font_slug = $font_setting['fontSlug'];

		if ( $font_slug && isset( BLOCKBASE_GOOGLE_FONTS_LIST[$font_slug] ) ) {
			$font_family = BLOCKBASE_GOOGLE_FONTS_LIST[$font_slug]['font_family'];
			wp_enqueue_webfont( $font_family );
		}
	}
}
