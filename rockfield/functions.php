<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Rockfield
 * @since 1.0.0
 */

if ( ! function_exists( 'rockfield_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rockfield_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'rockfield' ),
					'shortName' => __( 'S', 'rockfield' ),
					'size'      => 15,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'rockfield' ),
					'shortName' => __( 'M', 'rockfield' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'rockfield' ),
					'shortName' => __( 'L', 'rockfield' ),
					'size'      => 25.92,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'rockfield' ),
					'shortName' => __( 'XL', 'rockfield' ),
					'size'      => 31.104,
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
		$primary      = ! empty( $colors_array ) ? $colors_array['colors']['link'] : '#222222'; // $config-global--color-primary-default;
		$secondary    = ! empty( $colors_array ) ? $colors_array['colors']['fg1'] : '#116821';  // $config-global--color-secondary-default;
		$foreground   = ! empty( $colors_array ) ? $colors_array['colors']['txt'] : '#444444';  // $config-global--color-foreground-default;
		$background   = ! empty( $colors_array ) ? $colors_array['colors']['bg'] : '#FFFFFF';   // $config-global--color-background-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'rockfield' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'rockfield' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Foreground', 'rockfield' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Background', 'rockfield' ),
					'slug'  => 'background',
					'color' => $background,
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'rockfield_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function rockfield_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'rockfield_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function rockfield_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Raleway, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$raleway = esc_html_x( 'on', 'Raleway font: on or off', 'rockfield' );

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'rockfield' );

	if ( 'off' !== $raleway || 'off' !== $lora ) {
		$font_families = array();

		if ( 'off' !== $raleway ) {
			$font_families[] = 'Raleway:400,400i,700,700i';
		}

		if ( 'off' !== $lora ) {
			$font_families[] = 'Lora:400,400i,700,700i';
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
function rockfield_scripts() {

	// enqueue Google fonts
	wp_enqueue_style( 'rockfield-fonts', rockfield_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('rockfield-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'rockfield-style', 'rtl', 'replace' );

	if ( ! rockfield_is_amp() ) {
		// enqueue header spacing JS.
		wp_enqueue_script( 'rockfield-fixed-header-spacing', get_stylesheet_directory_uri() . '/js/fixed-header-spacing.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

}
add_action( 'wp_enqueue_scripts', 'rockfield_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function rockfield_editor_styles() {

	// Enqueue Google fonts in the editor
	wp_enqueue_style( 'rockfield-editor-fonts', rockfield_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'rockfield_editor_styles' );

/**
 * Checks whether the endpoint is AMP.
 */
function rockfield_is_amp() {
	return ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() );
}
