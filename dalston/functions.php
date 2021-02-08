<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Dalston
 * @since 1.0.0
 */

if ( ! function_exists( 'dalston_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dalston_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'dalston' ),
					'shortName' => __( 'S', 'dalston' ),
					'size'      => 16.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'dalston' ),
					'shortName' => __( 'M', 'dalston' ),
					'size'      => 19,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'dalston' ),
					'shortName' => __( 'L', 'dalston' ),
					'size'      => 25.1275,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'dalston' ),
					'shortName' => __( 'XL', 'dalston' ),
					'size'      => 28.9,
					'slug'      => 'huge',
				),
			)
		);

		/*
		 * Get customizer colors and add them to the editor color palettes
		 *
		 * - if the customizer color is empty, use the default
		 */
		$colors_array = get_theme_mod( 'colors_manager' ); // color annotations array()
		$primary      = ! empty( $colors_array ) ? $colors_array['colors']['link'] : '#0073AA'; // $config-global--color-primary-default;
		$secondary    = ! empty( $colors_array ) ? $colors_array['colors']['fg1'] : '#0D1B24';  // $config-global--color-secondary-default;
		$background   = ! empty( $colors_array ) ? $colors_array['colors']['bg'] : '#FFFFFF';   // $config-global--color-background-default;
		$foreground   = ! empty( $colors_array ) ? $colors_array['colors']['txt'] : '#1E1E1E';  // $config-global--color-foreground-default;
		$foreground_light = ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#1E1E1E' ) ? $colors_array['colors']['txt'] : '#767676';  // $config-global--color-foreground-light-default;
		$foreground_dark  = ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#1E1E1E' ) ? $colors_array['colors']['txt'] : '#000000';  // $config-global--color-foreground-dark-default;


		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'dalston' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'dalston' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Foreground', 'dalston' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Background', 'dalston' ),
					'slug'  => 'background',
					'color' => $background,
				),
				array(
					'name'  => __( 'Foreground Light', 'dalston' ),
					'slug'  => 'foreground-light',
					'color' => $foreground_light,
				),
				array(
					'name'  => __( 'Foreground Dark', 'dalston' ),
					'slug'  => 'foreground-dark',
					'color' => $foreground_dark,
				),
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 96,
				'width'       => 100,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array( 'site-title' ),
			)
		);

		// Setup nav on side toggle support.
		if ( function_exists( 'varia_mobile_nav_on_side_setup' ) ) {
			varia_mobile_nav_on_side_setup();
		}
	}
endif;
add_action( 'after_setup_theme', 'dalston_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function dalston_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'dalston_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function dalston_fonts_url() {

	$fonts_url = '';

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Open Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$crimson_text = esc_html_x( 'on', 'Crimson Text font: on or off', 'dalston' );

	if ( 'off' !== $crimson_text ) {
		$font_families = array();

		if ( 'off' !== $crimson_text ) {
			$font_families[] = 'Crimson Text:400,600,700,400italic,600italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function dalston_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'dalston-fonts', dalston_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('dalston-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'dalston-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'dalston_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function dalston_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'dalston-editor-fonts', dalston_fonts_url(), array(), null );

	// Hide duplicate palette colors
	$colors_array = get_theme_mod('colors_manager', array( 'colors' => true )); // color annotations array()
	if ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#1E1E1E' ) { // $config-global--color-foreground-light-default;
		$inline_palette_css = '.components-circular-option-picker__option-wrapper:nth-child(5),
			.components-circular-option-picker__option-wrapper:nth-child(6) {
				display: none;
			}';
		wp_add_inline_style( 'wp-edit-blocks', $inline_palette_css );
	}
}
add_action( 'enqueue_block_editor_assets', 'dalston_editor_styles' );

/**
 * Enqueue Custom Cover Block Styles and Scripts
 */
function dalston_block_extends() {

	// Bail out early while in AMP endpoint.
	if ( dalston_is_amp() ) {
		return;
	}

	// Cover Block Tweaks
	wp_enqueue_script( 'dalston-extend-cover-block',
		get_stylesheet_directory_uri() . '/block-extends/extend-cover-block.js',
		array( 'wp-blocks' )
	);

	wp_enqueue_style( 'dalston-extend-cover-block-style',
		get_stylesheet_directory_uri() . '/block-extends/extend-cover-block.css'
	);

	// Columns Block Tweaks
	wp_enqueue_script( 'dalston-extend-columns-block',
		get_stylesheet_directory_uri() . '/block-extends/extend-columns-block.js',
		array( 'wp-blocks' )
	);

	wp_enqueue_style( 'dalston-extend-cover-columns-style',
		get_stylesheet_directory_uri() . '/block-extends/extend-columns-block.css'
	);

	// Columns Block Tweaks
	wp_enqueue_script( 'dalston-extend-media-text-block',
		get_stylesheet_directory_uri() . '/block-extends/extend-media-text-block.js',
		array( 'wp-blocks' )
	);

	wp_enqueue_style( 'dalston-extend-cover-media-text-style',
		get_stylesheet_directory_uri() . '/block-extends/extend-media-text-block.css'
	);
}
add_action( 'enqueue_block_assets', 'dalston_block_extends' );

/**
 * Whether this is an AMP endpoint.
 *
 * @see https://github.com/Automattic/amp-wp/blob/e4472bfa5c304b6c1b968e533819e3fa96579ad4/includes/amp-helper-functions.php#L248
 * @return bool
 */
function dalston_is_amp() {
	return function_exists( 'is_amp_endpoint' ) && is_amp_endpoint();
}
