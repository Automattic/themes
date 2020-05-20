<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Morden
 * @since 1.0.0
 */

if ( ! function_exists( 'morden_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function morden_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'morden' ),
					'shortName' => __( 'S', 'morden' ),
					'size'      => 16.6,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'morden' ),
					'shortName' => __( 'M', 'morden' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'morden' ),
					'shortName' => __( 'L', 'morden' ),
					'size'      => 26.45,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'morden' ),
					'shortName' => __( 'XL', 'morden' ),
					'size'      => 30.4174,
					'slug'      => 'huge',
				),
			)
		);

		/*
		 * Get customizer colors and add them to the editor color palettes
		 *
		 * - if the customizer color is empty, use the default
		 */
		$colors_array = get_theme_mod('colors_manager'); // color annotations array()
		$background   = $colors_array['colors']['bg'];   // $config-global--color-background-default;
		$primary      = $colors_array['colors']['link']; // $config-global--color-primary-default;
		$foreground   = $colors_array['colors']['txt'];  // $config-global--color-foreground-default;
		$secondary    = $colors_array['colors']['fg1'];  // $config-global--color-secondary-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'morden' ),
					'slug'  => 'primary',
					'color' => ! isset($primary) ? '#CD2220' : $primary,
				),
				array(
					'name'  => __( 'Secondary', 'morden' ),
					'slug'  => 'secondary',
					'color' => ! isset($secondary) ? '#007AB7' : $secondary,
				),
				array(
					'name'  => __( 'Foreground', 'morden' ),
					'slug'  => 'foreground',
					'color' => ! isset($foreground) ? '#303030' : $foreground,
				),
				array(
					'name'  => __( 'Background', 'morden' ),
					'slug'  => 'background',
					'color' => ! isset($background) ? '#757575' : $background,
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'morden_setup', 12 );

/**
 * Set the content width in pixels, based on the child-theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function morden_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'morden_content_width', 740 );
}
add_action( 'after_setup_theme', 'morden_content_width', 0 );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function morden_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Noto Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$notosans = esc_html_x( 'on', 'Noto Sans font: on or off', 'morden' );

	if ( 'off' !== $notosans ) {
		$font_families = array();

		$font_families[] = 'Noto Sans:400,400i,700,700i';

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
function morden_scripts() {

	// enqueue Google fonts
	wp_enqueue_style( 'morden-fonts', morden_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('morden-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'morden-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'morden_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function morden_editor_styles() {

	// enqueue Google fonts in the editor
	wp_enqueue_style( 'morden-editor-fonts', morden_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'morden_editor_styles' );
