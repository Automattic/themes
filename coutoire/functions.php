<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Coutoire
 * @since 1.0.0
 */

if ( ! function_exists( 'coutoire_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function coutoire_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'coutoire' ),
					'shortName' => __( 'S', 'coutoire' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'coutoire' ),
					'shortName' => __( 'M', 'coutoire' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'coutoire' ),
					'shortName' => __( 'L', 'coutoire' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'coutoire' ),
					'shortName' => __( 'XL', 'coutoire' ),
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
					'name'  => __( 'Primary', 'coutoire' ),
					'slug'  => 'primary',
					'color' => '#0000FF', // varia_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, $lightness ),
				),
				array(
					'name'  => __( 'Secondary', 'coutoire' ),
					'slug'  => 'secondary',
					'color' => '#FF0000', // varia_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, $lightness_hover ),
				),
				array(
					'name'  => __( 'Dark Gray', 'coutoire' ),
					'slug'  => 'foreground-dark',
					'color' => '#111111',
				),
				array(
					'name'  => __( 'Gray', 'coutoire' ),
					'slug'  => 'foreground',
					'color' => '#444444',
				),
				array(
					'name'  => __( 'Light Gray', 'coutoire' ),
					'slug'  => 'foreground-light',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'coutoire' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'coutoire_setup' );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function coutoire_content_width() {
	return 1200;
}
add_filter( 'varia_content_width', 'coutoire_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function coutoire_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$work_sans = esc_html_x( 'on', 'Work Sans font: on or off', 'coutoire' );

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$eb_garamond = esc_html_x( 'on', 'EB Garamond font: on or off', 'coutoire' );

	if ( 'off' !== $work_sans || 'off' !== $eb_garamond ) {
		$font_families = array();

		if ( 'off' !== $work_sans ) {
			$font_families[] = 'Work Sans:300,500,600';
		}

		if ( 'off' !== $eb_garamond ) {
			$font_families[] = 'EB Garamond:400,400i';
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
function coutoire_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'coutoire-fonts', coutoire_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('coutoire-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'coutoire-style', 'rtl', 'replace' );

	if ( ! coutoire_is_amp() ) {
		// enqueue header spacing JS.
		wp_enqueue_script( 'coutoire-fixed-header-spacing', get_stylesheet_directory_uri() . '/js/fixed-header-spacing.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

}
add_action( 'wp_enqueue_scripts', 'coutoire_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function coutoire_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'coutoire-editor-fonts', coutoire_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'coutoire_editor_styles' );

/**
 * Checks whether the endpoint is AMP.
 */
function coutoire_is_amp() {
	return ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() );
}
