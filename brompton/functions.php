<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Brompton
 * @since 1.0.0
 */

if ( ! function_exists( 'varia_default_colors' ) ) {
	function varia_default_colors() {
		return array(
			'background' => '#E8E4DD',
			'foreground' => '#252E36',
			'primary'    => '#C04239',
			'secondary'  => '#FFFFFF',
			'tertiary'   => '#C04239',
		);
	}
}

if ( ! function_exists( 'brompton_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function brompton_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Remove parent theme font sizes
		remove_theme_support( 'editor-font-sizes' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'brompton' ),
					'shortName' => __( 'S', 'brompton' ),
					'size'      => 16.66,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'brompton' ),
					'shortName' => __( 'N', 'brompton' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Medium', 'brompton' ),
					'shortName' => __( 'M', 'brompton' ),
					'size'      => 24,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'brompton' ),
					'shortName' => __( 'L', 'brompton' ),
					'size'      => 28.8,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'brompton' ),
					'shortName' => __( 'XL', 'brompton' ),
					'size'      => 34.56,
					'slug'      => 'huge',
				),
			)
		);
		
	}
endif;
add_action( 'after_setup_theme', 'brompton_setup', 12 );

/**
 * Set the content width in pixels, based on the child-theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function brompton_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'brompton_content_width', 740 );
}
add_action( 'after_setup_theme', 'brompton_content_width', 0 );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function brompton_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'brompton' );

	/* Translators: If there are characters in your language that are not
	* supported by Nunito Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$nunito = esc_html_x( 'on', 'Nunito Sans font: on or off', 'brompton' );

	if ( 'off' !== $lora || 'off' !== $nunito ) {
		$font_families = array();

		if ( 'off' !== $lora ) {
			$font_families[] = 'Lora:400,400i,700,700i';
		}

		if ( 'off' !== $nunito ) {
			$font_families[] = 'Nunito Sans:400,400i,700,700i,900,900i';
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
function brompton_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'brompton-fonts', brompton_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('brompton-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'brompton-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'brompton_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function brompton_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'brompton-editor-fonts', brompton_fonts_url(), array(), null );

}
add_action( 'enqueue_block_editor_assets', 'brompton_editor_styles' );
