<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Rivington
 * @since 1.0.0
 */

if ( ! function_exists( 'rivington_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rivington_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Dark backgrounds
		// - See: https://developer.wordpress.org/block-editor/developers/themes/theme-support/#dark-backgrounds
		add_theme_support( 'editor-styles' );
		add_theme_support( 'dark-editor-style' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'rivington' ),
					'shortName' => __( 'S', 'rivington' ),
					'size'      => 14.4,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'rivington' ),
					'shortName' => __( 'M', 'rivington' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'rivington' ),
					'shortName' => __( 'L', 'rivington' ),
					'size'      => 28.12,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'rivington' ),
					'shortName' => __( 'XL', 'rivington' ),
					'size'      => 35.15,
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
		$primary      = ! empty( $colors_array ) ? $colors_array['colors']['link'] : '#CAAB57'; // $config-global--color-primary-default;
		$secondary    = ! empty( $colors_array ) ? $colors_array['colors']['fg1'] : '#EE4266';  // $config-global--color-secondary-default;
		$background   = ! empty( $colors_array ) ? $colors_array['colors']['bg'] : '#060f29';   // $config-global--color-background-default;
		$foreground   = ! empty( $colors_array ) ? $colors_array['colors']['txt'] : '#F2F2F2';  // $config-global--color-foreground-default;
		$foreground_light = ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#F2F2F2' ) ? $colors_array['colors']['txt'] : '#FFFFFF';  // $config-global--color-foreground-light-default;
		$foreground_dark  = ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#F2F2F2' ) ? $colors_array['colors']['txt'] : '#8F8F8F';  // $config-global--color-foreground-dark-default;


		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'rivington' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'rivington' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Background', 'rivington' ),
					'slug'  => 'background',
					'color' => $background,
				),
				array(
					'name'  => __( 'Foreground', 'rivington' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Foreground Light', 'rivington' ),
					'slug'  => 'foreground-light',
					'color' => $foreground_light,
				),
				array(
					'name'  => __( 'Foreground Dark', 'rivington' ),
					'slug'  => 'foreground-dark',
					'color' => $foreground_dark,
				),
			)
		);

		// Remove footer menu
		unregister_nav_menu( 'menu-2' );

		// Setup nav on side toggle support.
		if ( function_exists( 'varia_mobile_nav_on_side_setup' ) ) {
			varia_mobile_nav_on_side_setup();
		}
	}
endif;
add_action( 'after_setup_theme', 'rivington_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function rivington_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'rivington_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function rivington_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'rivington' );

	if ( 'off' !== $poppins ) {
		$font_families = array();

		$font_families[] = 'Poppins:400,400i,600,600i';

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
function rivington_scripts() {

	// enqueue Google fonts, if necessary
	// wp_enqueue_style( 'rivington-fonts', rivington_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('rivington-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'rivington-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'rivington_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function rivington_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'rivington-editor-fonts', rivington_fonts_url(), array(), null );

	// Hide duplicate palette colors
	$colors_array = get_theme_mod('colors_manager', array( 'colors' => true )); // color annotations array()
	if ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#F2F2F2' ) { // $config-global--color-foreground-light-default;
		$inline_palette_css = '.components-circular-option-picker__option-wrapper:nth-child(5),
			.components-circular-option-picker__option-wrapper:nth-child(6) {
				display: none;
			}';
		wp_add_inline_style( 'wp-edit-blocks', $inline_palette_css );
	}
}
add_action( 'enqueue_block_editor_assets', 'rivington_editor_styles' );
