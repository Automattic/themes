<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Brompton
 * @since 1.0.0
 */

if ( ! function_exists( 'brompton_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function brompton_setup() {
		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Remove parent theme font sizes
		remove_theme_support( 'editor-font-sizes' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'brompton' ),
					'shortName' => __( 'S', 'brompton' ),
					'size'      => 16.66,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'brompton' ),
					'shortName' => __( 'N', 'brompton' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Medium', 'brompton' ),
					'shortName' => __( 'M', 'brompton' ),
					'size'      => 24,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'brompton' ),
					'shortName' => __( 'L', 'brompton' ),
					'size'      => 28.8,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'brompton' ),
					'shortName' => __( 'XL', 'brompton' ),
					'size'      => 34.56,
					'slug'      => 'huge',
				),
			)
		);

		/*
		 * Get customizer colors and add them to the editor color palettes
		 *
		 * - if the customizer color is empty, use the default
		 */
		$colors_array     = get_theme_mod( 'colors_manager' ); // color annotations array()
		$primary          = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['link'] : '#C04239'; // $config-global--color-primary-default;
		$secondary        = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['fg1'] : '#FFFFFF';  // $config-global--color-secondary-default;
		$background       = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['bg'] : '#E8E4DD';   // $config-global--color-background-default;
		$foreground       = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['txt'] : '#252E36';  // $config-global--color-foreground-default;
		$foreground_light = ( is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) && $colors_array['colors']['txt'] != '#252E36' ) ? $colors_array['colors']['txt'] : '#666666';  // $config-global--color-foreground-light-default;
		$foreground_dark  = ( is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) && $colors_array['colors']['txt'] != '#252E36' ) ? $colors_array['colors']['txt'] : '#474747';  // $config-global--color-foreground-dark-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'brompton' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'brompton' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Background', 'barnsbury' ),
					'slug'  => 'background',
					'color' => $background,
				),
				array(
					'name'  => __( 'Foreground', 'barnsbury' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Foreground Light', 'barnsbury' ),
					'slug'  => 'foreground-light',
					'color' => $foreground_light,
				),
				array(
					'name'  => __( 'Foreground Dark', 'barnsbury' ),
					'slug'  => 'foreground-dark',
					'color' => $foreground_dark,
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'brompton_setup', 12 );

/**
 * Set the content width in pixels, based on the child-theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function brompton_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'brompton_content_width', 740 );
}
add_action( 'after_setup_theme', 'brompton_content_width', 0 );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function brompton_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'brompton' );

	/* Translators: If there are characters in your language that are not
	* supported by Nunito Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$nunito = esc_html_x( 'on', 'Nunito Sans font: on or off', 'brompton' );

	if ( 'off' !== $lora || 'off' !== $nunito ) {
		$font_families = array();

		if ( 'off' !== $lora ) {
			$font_families[] = 'Lora:400,400i,700,700i';
		}

		if ( 'off' !== $nunito ) {
			$font_families[] = 'Nunito Sans:400,400i,700,700i,900,900i';
		}

		/**
		 * A filter to enable child themes to add/change/omit font families.
		 * 
		 * @param array $font_families An array of font families to be imploded for the Google Font API
		 */
		$font_families = apply_filters( 'included_google_font_families', $font_families );

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
function brompton_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'brompton-fonts', brompton_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style( 'brompton-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child RTL styles
	wp_style_add_data( 'brompton-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'brompton_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function brompton_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'brompton-editor-fonts', brompton_fonts_url(), array(), null );

	// Hide duplicate palette colors
	$colors_array = get_theme_mod( 'colors_manager', array( 'colors' => true ) ); // color annotations array()
	if ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#505050' ) { // $config-global--color-foreground-light-default;
		$inline_palette_css = '.components-circular-option-picker__option-wrapper:nth-child(5),
			.components-circular-option-picker__option-wrapper:nth-child(6) {
				display: none;
			}';
		wp_add_inline_style( 'wp-edit-blocks', $inline_palette_css );
	}
}
add_action( 'enqueue_block_editor_assets', 'brompton_editor_styles' );
