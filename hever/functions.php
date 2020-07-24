<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Hever
 * @since 1.0.0
 */

if ( ! function_exists( 'hever_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hever_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'hever' ),
					'shortName' => __( 'S', 'hever' ),
					'size'      => 17.3914,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Medium', 'hever' ),
					'shortName' => __( 'M', 'hever' ),
					'size'      => 23,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'hever' ),
					'shortName' => __( 'L', 'hever' ),
					'size'      => 26.45,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'hever' ),
					'shortName' => __( 'XL', 'hever' ),
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
		$colors_array = get_theme_mod( 'colors_manager' ); // color annotations array()
		$primary      = ! empty( $colors_array ) ? $colors_array['colors']['link'] : '#1279BE'; // $config-global--color-primary-default;
		$secondary    = ! empty( $colors_array ) ? $colors_array['colors']['fg1'] : '#FFB302';  // $config-global--color-secondary-default;
		$foreground   = ! empty( $colors_array ) ? $colors_array['colors']['txt'] : '#303030';  // $config-global--color-foreground-default;
		$background   = ! empty( $colors_array ) ? $colors_array['colors']['bg'] : '#FFFFFF';   // $config-global--color-background-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'hever' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'hever' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Foreground', 'hever' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Background', 'hever' ),
					'slug'  => 'background',
					'color' => $background,
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'hever_setup', 12 );

/**
 * Set the content width in pixels, based on the child-theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function hever_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hever_content_width', 740 );
}
add_action( 'after_setup_theme', 'hever_content_width', 0 );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function hever_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by PT Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$ptsans = esc_html_x( 'on', 'PT Sans font: on or off', 'hever' );

	if ( 'off' !== $ptsans ) {
		$font_families = array();

		$font_families[] = 'PT Sans:400,400i,700,700i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
			'display' => 'swap'
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function hever_scripts() {

	// enqueue Google fonts
	wp_enqueue_style( 'hever-fonts', hever_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('hever-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'hever-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'hever_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function hever_editor_styles() {

	// enqueue Google fonts in the editor
	wp_enqueue_style( 'hever-editor-fonts', hever_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'hever_editor_styles' );
