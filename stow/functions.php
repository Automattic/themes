<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Stow
 * @since 1.0.0
 */

if ( ! function_exists( 'varia_default_colors' ) ) {
	function varia_default_colors() {
		return array(
			'background' => '#f0f0f0',
			'foreground' => '#444444',
			'primary'    => '#404040',
			'secondary'  => '#f25f70',
			'tertiary'   => null,
		);
	}
}

if ( ! function_exists( 'stow_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stow_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'stow' ),
					'shortName' => __( 'S', 'stow' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'stow' ),
					'shortName' => __( 'M', 'stow' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'stow' ),
					'shortName' => __( 'L', 'stow' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'stow' ),
					'shortName' => __( 'XL', 'stow' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Add child theme editor color pallete to match Sass-map variables in `_config-child-theme-deep.scss`.
		/*add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'stow' ),
					'slug'  => 'primary',
					'color' => '#404040',
				),
				array(
					'name'  => __( 'Secondary', 'stow' ),
					'slug'  => 'secondary',
					'color' => '#f25f70',
				),
				array(
					'name'  => __( 'Dark Gray', 'stow' ),
					'slug'  => 'foreground-dark',
					'color' => '#111111',
				),
				array(
					'name'  => __( 'Gray', 'stow' ),
					'slug'  => 'foreground',
					'color' => '#444444',
				),
				array(
					'name'  => __( 'Light Gray', 'stow' ),
					'slug'  => 'foreground-light',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White Smoke', 'stow' ),
					'slug'  => 'background',
					'color' => '#f0f0f0',
				),
			)
		);*/
	}
endif;
add_action( 'after_setup_theme', 'stow_setup', 12 );

/**
 * Set the content width in pixels, based on the child-theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function stow_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'stow_content_width', 640 );
}
add_action( 'after_setup_theme', 'stow_content_width', 0 );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function stow_fonts_url() {

	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Source Sans Pro, translate this to 'off'. Do not translate into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'stow' );

	/* translators: If there are characters in your language that are not supported
	 * by Droid Serif, translate this to 'off'. Do not translate into your own language.
	 */
	$droid_serif = _x( 'on', 'Droid Serif font: on or off', 'stow' );

	/* translators: If there are characters in your language that are not supported
	 * by Oswald, translate this to 'off'. Do not translate into your own language.
	 */
	$oswald = _x( 'on', 'Oswald font: on or off', 'stow' );

	if ( 'off' !== $source_sans_pro || 'off' !== $droid_serif || 'off' !== $oswald ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro ) {
			$font_families[] = 'Source Sans Pro:300,300italic,400,400italic,600';
		}
		if ( 'off' !== $droid_serif ) {
			$font_families[] = 'Droid Serif:400,400italic';
		}
		if ( 'off' !== $oswald ) {
			$font_families[] = 'Oswald:300,400';
		}
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url  = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function stow_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'stow-fonts', stow_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style( 'stow-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child RTL styles
	wp_style_add_data( 'stow-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'stow_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function stow_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'stow-editor-fonts', stow_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'stow_editor_styles' );
