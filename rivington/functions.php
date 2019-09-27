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

		// Add child theme editor color pallete to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'rivington' ),
					'slug'  => 'primary',
					'color' => '#CAAB57',
				),
				array(
					'name'  => __( 'Secondary', 'rivington' ),
					'slug'  => 'secondary',
					'color' => '#EE4266',
				),
				array(
					'name'  => __( 'Light Gray', 'rivington' ),
					'slug'  => 'foreground-dark',
					'color' => '#8F8F8F',
				),
				array(
					'name'  => __( 'Off White', 'rivington' ),
					'slug'  => 'foreground',
					'color' => '#F2F2F2',
				),
				array(
					'name'  => __( 'White', 'rivington' ),
					'slug'  => 'foreground-light',
					'color' => '#FFFFFF',
				),
				array(
					'name'  => __( 'Dark Navy', 'rivington' ),
					'slug'  => 'background-dark',
					'color' => '#030713',
				),
				array(
					'name'  => __( 'Navy', 'rivington' ),
					'slug'  => 'background',
					'color' => '#060f29',
				),
				array(
					'name'  => __( 'Light Navy', 'rivington' ),
					'slug'  => 'background-light',
					'color' => '#0d1f55',
				),
			)
		);
		// Remove footer menu
		unregister_nav_menu( 'menu-2' );
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
	* supported by Playfair Display, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$playfair = esc_html_x( 'on', 'Playfair Display font: on or off', 'rivington' );

	/* Translators: If there are characters in your language that are not
	* supported by Roboto Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$roboto = esc_html_x( 'on', 'Roboto Sans font: on or off', 'rivington' );

	if ( 'off' !== $playfair || 'off' !== $roboto ) {
		$font_families = array();

		if ( 'off' !== $playfair ) {
			$font_families[] = 'Playfair+Display:400,400i';
		}

		if ( 'off' !== $roboto ) {
			$font_families[] = 'Roboto:300,300i,700';
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
}
add_action( 'enqueue_block_editor_assets', 'rivington_editor_styles' );
