<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Maywood
 * @since 1.0.0
 */

if ( ! function_exists( 'maywood_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function maywood_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'maywood' ),
					'shortName' => __( 'S', 'maywood' ),
					'size'      => 16.6,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'maywood' ),
					'shortName' => __( 'M', 'maywood' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'maywood' ),
					'shortName' => __( 'L', 'maywood' ),
					'size'      => 28.8,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'maywood' ),
					'shortName' => __( 'XL', 'maywood' ),
					'size'      => 34.56,
					'slug'      => 'huge',
				),
			)
		);

		// Add child theme editor color pallete to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'maywood' ),
					'slug'  => 'primary',
					'color' => '#897248',
				),
				array(
					'name'  => __( 'Secondary', 'maywood' ),
					'slug'  => 'secondary',
					'color' => '#c4493f',
				),
				array(
					'name'  => __( 'Black', 'maywood' ),
					'slug'  => 'foreground-dark',
					'color' => '#020202',
				),
				array(
					'name'  => __( 'Dark Gray', 'maywood' ),
					'slug'  => 'foreground',
					'color' => '#181818',
				),
				array(
					'name'  => __( 'Gray', 'maywood' ),
					'slug'  => 'foreground-light',
					'color' => '#686868',
				),
				array(
					'name'  => __( 'Light Gray', 'maywood' ),
					'slug'  => 'background-dark',
					'color' => '#CCCCCC',
				),
				array(
					'name'  => __( 'Subtle Gray', 'maywood' ),
					'slug'  => 'background-light',
					'color' => '#F7F7F7',
				),
				array(
					'name'  => __( 'White', 'maywood' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
		);

		// Enable Full Site Editing
		add_theme_support( 'full-site-editing');
	}
endif;
add_action( 'after_setup_theme', 'maywood_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function maywood_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'maywood_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function maywood_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by IBM Plex Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$ibm_plex_sans = esc_html_x( 'on', 'IBM Plex Sans font: on or off', 'maywood' );

	if ( 'off' !== $ibm_plex_sans ) {
		$font_families = array();

		$font_families[] = 'IBM Plex Sans:300,300i,500,700';

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
function maywood_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'maywood-fonts', maywood_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('maywood-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'maywood-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'maywood_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function maywood_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'maywood-editor-fonts', maywood_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'maywood_editor_styles' );
