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

	$legacy_fonts = blockbase_get_legacy_fonts();
	wp_enqueue_style( 'global-styles-legacy-fonts', ' ', array( 'global-styles' ) ); // This needs to load after global_styles, hence the dependency
	$css  = 'body {';

	// TODO: escape font data
	if ( isset( $legacy_fonts['body'] ) && is_legacy_font_used( 'body' ) ) {
		$css .= "--wp--preset--font-family--{$legacy_fonts['body']['fontSlug']}:{$legacy_fonts['body']['fontFamily']};";
	}

	// TODO: escape font data
	if ( isset( $legacy_fonts['heading'] ) && is_legacy_font_used( 'heading' ) ) {
		$css .= "--wp--preset--font-family--{$legacy_fonts['heading']['fontSlug']}:{$legacy_fonts['heading']['fontFamily']};";
	}
	$css .= '}';
	wp_add_inline_style( 'global-styles-legacy-fonts', $css );
}
add_action( 'wp_enqueue_scripts', 'blockbase_scripts' );

/**
 * Retrieve blockbase legacy fonts data
 *
 * @return array
 */
function blockbase_get_legacy_fonts() {
	$legacy_settings_array = json_decode( get_option('blockbase_legacy_font_settings', '[]' ), true );

	$fonts = array();

	// Group by heading and body fonts
	foreach( $legacy_settings_array as $setting ) {
		if ( $setting['slug'] === 'body-font' ) {
			$fonts['body'] = $setting;
		}

		if ( $setting['slug'] === 'heading-font' ) {
			$fonts['heading'] = $setting;
		}
	}

	return $fonts;
}

/**
 * Compares legacy fonts and global styles fonts to determine if legacy fonts are still being used
 *
 * @return bool
 */
function is_legacy_font_used( $type = 'body' ) {
	$legacy_fonts = blockbase_get_legacy_fonts();

	$body_font = wp_get_global_styles( array( 'typography', 'fontFamily' ) );
	preg_match( '/font-family\|(?P<slug>.+)$/', $body_font, $matches );
	$body_font_slug = $matches['slug'] ?? '';

	if (
		isset( $legacy_fonts['body'] ) &&
		$body_font_slug &&
		$legacy_fonts['body']['fontSlug'] === $body_font_slug
	) {
		return true;
	}

	return false;
}

/**
 * Add Google webfonts
 *
 * @return $fonts_url
 */
function blockbase_fonts_url() {
	if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
		return '';
	}

	$legacy_font_settings = blockbase_get_legacy_fonts();
	if ( empty( $legacy_font_settings ) ) {
		return '';
	}

	$font_families = [];

	foreach( $legacy_font_settings as $font_type => $font ) {
		// $font_type = array_slice( $font['slug'], 0, strpos( $font['slug'], '-' ) + 1 );
		if ( ! empty( $font['google'] ) && is_legacy_font_used( $font_type ) ) {
			$font_families[] = $font['google'];
		}
	}

	if ( empty( $font_families ) ) {
		return '';
	}

	// Make a single request for the theme or user fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $font_families ) ) . '&display=swap' );
}

/**
 * Customize Global Styles
 */
if ( class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
	require get_template_directory() . '/inc/customizer/wp-customize-colors.php';
	require get_template_directory() . '/inc/customizer/wp-customize-color-palettes.php';
	require get_template_directory() . '/inc/customizer/wp-customize-fonts.php';
	require get_template_directory() . '/inc/social-navigation.php';
}

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
