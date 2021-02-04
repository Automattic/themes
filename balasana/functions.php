<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Balasana
 * @since 1.0.0
 */

if ( ! function_exists( 'varia_default_colors' ) ) {
	function varia_default_colors() {
		return array(
			'background' => '#ffffff',
			'foreground' => '#303030',
			'primary'    => '#19744c',
			'secondary'  => '#bc2213',
			'tertiary'   => null,
		);
	}
}

if ( ! function_exists( 'balasana_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function balasana_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'balasana' ),
					'shortName' => __( 'S', 'balasana' ),
					'size'      => 16.666,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'balasana' ),
					'shortName' => __( 'M', 'balasana' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'balasana' ),
					'shortName' => __( 'L', 'balasana' ),
					'size'      => 28.8,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'balasana' ),
					'shortName' => __( 'XL', 'balasana' ),
					'size'      => 34.56,
					'slug'      => 'huge',
				),
			)
		);

		// Add child theme support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 96,
				'width'       => 96,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'balasana_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function balasana_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'balasana_content_width' );

/**
 * Add Google webfonts
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function balasana_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Roboto Condensed, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$roboto_condensed = esc_html_x( 'on', 'Roboto Condensed font: on or off', 'balasana' );

	/* Translators: If there are characters in your language that are not
	* supported by Roboto, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$roboto = esc_html_x( 'on', 'Roboto font: on or off', 'balasana' );

	if ( 'off' !== $roboto_condensed || 'off' !== $roboto ) {
		$font_families = array();

		if ( 'off' !== $roboto_condensed ) {
			$font_families[] = 'Roboto Condensed:400,400i,700,700i';
		}

		if ( 'off' !== $roboto ) {
			$font_families[] = 'Roboto:400,400i,700,700i';
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
function balasana_scripts() {

	// enqueue Google fonts
	wp_enqueue_style( 'balasana-fonts', balasana_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('balasana-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'balasana-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'balasana_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function balasana_editor_styles() {

	// Enqueue Google fonts in the editor
	wp_enqueue_style( 'balasana-editor-fonts', balasana_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'balasana_editor_styles' );
