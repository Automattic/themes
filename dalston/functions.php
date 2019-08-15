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
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'dalston' ),
					'shortName' => __( 'M', 'dalston' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'dalston' ),
					'shortName' => __( 'L', 'dalston' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'dalston' ),
					'shortName' => __( 'XL', 'dalston' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Add child theme editor color pallete to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'dalston' ),
					'slug'  => 'primary',
					'color' => '#0000FF',
				),
				array(
					'name'  => __( 'Secondary', 'dalston' ),
					'slug'  => 'secondary',
					'color' => '#FF0000',
				),
				array(
					'name'  => __( 'Dark Gray', 'dalston' ),
					'slug'  => 'foreground-dark',
					'color' => '#111111',
				),
				array(
					'name'  => __( 'Gray', 'dalston' ),
					'slug'  => 'foreground',
					'color' => '#444444',
				),
				array(
					'name'  => __( 'Light Gray', 'dalston' ),
					'slug'  => 'foreground-light',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'Lighter Gray', 'dalston' ),
					'slug'  => 'background-dark',
					'color' => '#DDDDDD',
				),
				array(
					'name'  => __( 'Subtle Gray', 'dalston' ),
					'slug'  => 'background-light',
					'color' => '#FAFAFA',
				),
				array(
					'name'  => __( 'White', 'dalston' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
		);
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

	/* Translators: If there are characters in your language that are not
	* supported by Playfair Display, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$playfair = esc_html_x( 'on', 'Playfair Display font: on or off', 'dalston' );

	/* Translators: If there are characters in your language that are not
	* supported by Roboto Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$roboto = esc_html_x( 'on', 'Roboto Sans font: on or off', 'dalston' );

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
function dalston_scripts() {

	// enqueue Google fonts, if necessary
	// wp_enqueue_style( 'dalston-fonts', dalston_fonts_url(), array(), null );

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
}
add_action( 'enqueue_block_editor_assets', 'dalston_editor_styles' );
