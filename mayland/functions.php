<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage mayland
 * @since 1.0.0
 */

if ( ! function_exists( 'mayland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mayland_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'mayland' ),
					'shortName' => __( 'S', 'mayland' ),
					'size'      => 16.6,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'mayland' ),
					'shortName' => __( 'M', 'mayland' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'mayland' ),
					'shortName' => __( 'L', 'mayland' ),
					'size'      => 28.8,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'mayland' ),
					'shortName' => __( 'XL', 'mayland' ),
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
					'name'  => __( 'Primary', 'mayland' ),
					'slug'  => 'primary',
					'color' => '#000000',
				),
				array(
					'name'  => __( 'Secondary', 'mayland' ),
					'slug'  => 'secondary',
					'color' => '#1a1a1a',
				),
				array(
					'name'  => __( 'Dark Gray', 'mayland' ),
					'slug'  => 'foreground-dark',
					'color' => '#333333',
				),
				array(
					'name'  => __( 'Black', 'mayland' ),
					'slug'  => 'foreground',
					'color' => '#000000',
				),
				array(
					'name'  => __( 'Light Gray', 'mayland' ),
					'slug'  => 'foreground-light',
					'color' => '#666666',
				),
				array(
					'name'  => __( 'Subtle Gray', 'mayland' ),
					'slug'  => 'background-dark',
					'color' => '#d9d9d9',
				),
				array(
					'name'  => __( 'Off White', 'mayland' ),
					'slug'  => 'background-light',
					'color' => '#F2F2F2',
				),
				array(
					'name'  => __( 'White', 'mayland' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'mayland_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function mayland_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'mayland_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function mayland_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'mayland' );

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
function mayland_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'mayland-fonts', mayland_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('mayland-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'mayland-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'mayland_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function mayland_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'mayland-editor-fonts', mayland_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'mayland_editor_styles' );
