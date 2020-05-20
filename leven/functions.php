<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Leven
 * @since 1.0.0
 */

if ( ! function_exists( 'leven_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function leven_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'leven' ),
					'shortName' => __( 'S', 'leven' ),
					'size'      => 15,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'leven' ),
					'shortName' => __( 'M', 'leven' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'leven' ),
					'shortName' => __( 'L', 'leven' ),
					'size'      => 32,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'leven' ),
					'shortName' => __( 'XL', 'leven' ),
					'size'      => 47.17,
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
					'name'  => __( 'Primary', 'leven' ),
					'slug'  => 'primary',
					'color' => ! isset($primary) ? '#FF302C' : $primary,
				),
				array(
					'name'  => __( 'Secondary', 'leven' ),
					'slug'  => 'secondary',
					'color' => ! isset($secondary) ? '#1285CE' : $secondary,
				),
				array(
					'name'  => __( 'Foreground', 'leven' ),
					'slug'  => 'foreground',
					'color' => ! isset($foreground) ? '#444444' : $foreground,
				),
				array(
					'name'  => __( 'Background', 'leven' ),
					'slug'  => 'background',
					'color' => ! isset($background) ? '#F7F7F6' : $background,
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'leven_setup', 12 );

/**
 * Set the content width in pixels, based on the child-theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function leven_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'leven_content_width', 640 );
}
add_action( 'after_setup_theme', 'leven_content_width', 0 );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function leven_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Lora, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$crimson_text = esc_html_x( 'on', 'Crimson Text font: on or off', 'leven' );

	if ( 'off' !== $crimson_text ) {
		$font_families = array();

		if ( 'off' !== $crimson_text ) {
			$font_families[] = 'Crimson Text:400,400i';
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
function leven_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'leven-fonts', leven_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('leven-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'leven-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'leven_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function leven_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'leven-editor-fonts', leven_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'leven_editor_styles' );
