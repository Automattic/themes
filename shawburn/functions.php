<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Shawburn
 * @since 1.0.0
 */

if ( ! function_exists( 'shawburn_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shawburn_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'shawburn' ),
					'shortName' => __( 'S', 'shawburn' ),
					'size'      => 15,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'shawburn' ),
					'shortName' => __( 'M', 'shawburn' ),
					'size'      => 18,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'shawburn' ),
					'shortName' => __( 'L', 'shawburn' ),
					'size'      => 25.92,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'shawburn' ),
					'shortName' => __( 'XL', 'shawburn' ),
					'size'      => 31.104,
					'slug'      => 'huge',
				),
			)
		);

		// Add child theme editor color pallete to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'shawburn' ),
					'slug'  => 'primary',
					'color' => '#0C80A1',
				),
				array(
					'name'  => __( 'Secondary', 'shawburn' ),
					'slug'  => 'secondary',
					'color' => '#D4401C',
				),
				array(
					'name'  => __( 'Dark Gray', 'shawburn' ),
					'slug'  => 'foreground-dark',
					'color' => '#222222',
				),
				array(
					'name'  => __( 'Gray', 'shawburn' ),
					'slug'  => 'foreground',
					'color' => '#444444',
				),
				array(
					'name'  => __( 'Light Gray', 'shawburn' ),
					'slug'  => 'foreground-light',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'Light Gray', 'shawburn' ),
					'slug'  => 'background-dark',
					'color' => '#EAEAEA',
				),
				array(
					'name'  => __( 'Subtle Gray', 'shawburn' ),
					'slug'  => 'background-light',
					'color' => '#FAFAFA',
				),
				array(
					'name'  => __( 'White', 'shawburn' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
		);

		// Enable Full Site Editing
		add_theme_support( 'full-site-editing');
	}
endif;
add_action( 'after_setup_theme', 'shawburn_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function shawburn_content_width() {
	return 750;
}
add_action( 'after_setup_theme', 'shawburn_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function shawburn_fonts_url() {

	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by PT Sans, translate this to 'off'. Do not translate into your own language.
	 */
	$pt_sans  = _x( 'on', 'PT Sans font: on or off',  'shawburn' );

	/* translators: If there are characters in your language that are not supported
	 * by PT Serif, translate this to 'off'. Do not translate into your own language.
	 */
	$pt_serif = _x( 'on', 'PT Serif font: on or off', 'shawburn' );

	if ( 'off' !== $pt_sans || 'off' !== $pt_serif ) {
		$font_families = array();

		if ( 'off' !== $pt_sans ) {
			$font_families[] = 'PT Sans:400,400i,700,700i';
		}

		if ( 'off' !== $pt_serif ) {
			$font_families[] = 'PT Serif:400,400i,700,700i';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, "https://fonts.googleapis.com/css" );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function shawburn_scripts() {

	// enqueue Google fonts
	wp_enqueue_style( 'shawburn-fonts', shawburn_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('shawburn-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'shawburn-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'shawburn_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function shawburn_editor_styles() {

	// Enqueue Google fonts in the editor
	wp_enqueue_style( 'shawburn-editor-fonts', shawburn_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'shawburn_editor_styles' );
