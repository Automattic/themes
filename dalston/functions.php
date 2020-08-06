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
					'size'      => 16.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'dalston' ),
					'shortName' => __( 'M', 'dalston' ),
					'size'      => 19,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'dalston' ),
					'shortName' => __( 'L', 'dalston' ),
					'size'      => 25.1275,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'dalston' ),
					'shortName' => __( 'XL', 'dalston' ),
					'size'      => 28.9,
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
					'color' => '#0073AA',
				),
				array(
					'name'  => __( 'Secondary', 'dalston' ),
					'slug'  => 'secondary',
					'color' => '#0D1B24',
				),
				array(
					'name'  => __( 'Dark Blue', 'dalston' ),
					'slug'  => 'foreground-light',
					'color' => '#005177',
				),
				array(
					'name'  => __( 'Black', 'dalston' ),
					'slug'  => 'foreground-dark',
					'color' => '#000000',
				),
				array(
					'name'  => __( 'Gray', 'dalston' ),
					'slug'  => 'foreground',
					'color' => '#1E1E1E',
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

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 96,
				'width'       => 100,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array( 'site-title' ),
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

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Open Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$crimson_text = esc_html_x( 'on', 'Crimson Text font: on or off', 'dalston' );

	if ( 'off' !== $crimson_text ) {
		$font_families = array();

		if ( 'off' !== $crimson_text ) {
			$font_families[] = 'Crimson Text:400,600,700,400italic,600italic';
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
	wp_enqueue_style( 'dalston-fonts', dalston_fonts_url(), array(), null );

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

/**
 * Enqueue Custom Cover Block Styles and Scripts
 */
function dalston_block_extends() {

	// Bail out early while in AMP endpoint.
	if ( dalston_is_amp() ) {
		return;
	}

	// Cover Block Tweaks
	wp_enqueue_script( 'dalston-extend-cover-block',
		get_stylesheet_directory_uri() . '/block-extends/extend-cover-block.js',
		array( 'wp-blocks' )
	);

	wp_enqueue_style( 'dalston-extend-cover-block-style',
		get_stylesheet_directory_uri() . '/block-extends/extend-cover-block.css'
	);

	// Columns Block Tweaks
	wp_enqueue_script( 'dalston-extend-columns-block',
		get_stylesheet_directory_uri() . '/block-extends/extend-columns-block.js',
		array( 'wp-blocks' )
	);

	wp_enqueue_style( 'dalston-extend-cover-columns-style',
		get_stylesheet_directory_uri() . '/block-extends/extend-columns-block.css'
	);

	// Columns Block Tweaks
	wp_enqueue_script( 'dalston-extend-media-text-block',
		get_stylesheet_directory_uri() . '/block-extends/extend-media-text-block.js',
		array( 'wp-blocks' )
	);

	wp_enqueue_style( 'dalston-extend-cover-media-text-style',
		get_stylesheet_directory_uri() . '/block-extends/extend-media-text-block.css'
	);
}
add_action( 'enqueue_block_assets', 'dalston_block_extends' );

/**
 * Whether this is an AMP endpoint.
 *
 * @see https://github.com/Automattic/amp-wp/blob/e4472bfa5c304b6c1b968e533819e3fa96579ad4/includes/amp-helper-functions.php#L248
 * @return bool
 */
function dalston_is_amp() {
	return function_exists( 'is_amp_endpoint' ) && is_amp_endpoint();
}

