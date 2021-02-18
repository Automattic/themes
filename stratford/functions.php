<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Stratford
 * @since 1.0.0
 */

if ( ! function_exists( 'varia_default_colors' ) ) {
	function varia_default_colors() {
		return array(
			'background' => '#FFFFFF',
			'foreground' => '#74767e',
			'primary'    => '#2c313f',
			'secondary'  => '#3e69dc',
			'tertiary'   => '#DDDDDD',
		);
	}
}

if ( ! function_exists( 'stratford_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stratford_setup() {
		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'stratford' ),
					'shortName' => __( 'S', 'stratford' ),
					'size'      => 16.6,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'stratford' ),
					'shortName' => __( 'M', 'stratford' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'stratford' ),
					'shortName' => __( 'L', 'stratford' ),
					'size'      => 28.8,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'stratford' ),
					'shortName' => __( 'XL', 'stratford' ),
					'size'      => 34.56,
					'slug'      => 'huge',
				),
			)
		);

		// Remove footer menu
		unregister_nav_menu( 'menu-2' );
	}
endif;
add_action( 'after_setup_theme', 'stratford_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function stratford_content_width() {
	return 900;
}
add_filter( 'varia_content_width', 'stratford_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function stratford_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'stratford' );

	/* Translators: If there are characters in your language that are not
	* supported by Lato, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lato = esc_html_x( 'on', 'Lato font: on or off', 'stratford' );

	/* Translators: If there are characters in your language that are not
	* supported by Inconsolata, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$inconsolata = esc_html_x( 'on', 'Inconsolata font: on or off', 'stratford' );

	if ( 'off' !== $poppins || 'off' !== $lato || 'off' !== $inconsolata ) {
		$font_families = array();

		if ( 'off' !== $poppins ) {
			$font_families[] = 'Poppins:400,700';
		}

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,700,400italic,700italic';
		}

		if ( 'off' !== $inconsolata ) {
			$font_families[] = 'Inconsolata:400,700';
		}

		/**
		 * A filter to enable child themes to add/change/omit font families.
		 * 
		 * @param array $font_families An array of font families to be imploded for the Google Font API
		 */
		$font_families = apply_filters( 'included_google_font_families', $font_families );

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
function stratford_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'stratford-fonts', stratford_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style( 'stratford-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child RTL styles
	wp_style_add_data( 'stratford-style', 'rtl', 'replace' );

	if ( ! stratford_is_amp() ) {
		// enqueue header spacing JS.
		wp_enqueue_script( 'stratford-fixed-header-spacing', get_stylesheet_directory_uri() . '/js/fixed-header-spacing.js', array(), wp_get_theme()->get( 'Version' ), true );
	}
}
add_action( 'wp_enqueue_scripts', 'stratford_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function stratford_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'stratford-editor-fonts', stratford_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'stratford_editor_styles' );

/**
 * Checks whether the endpoint is AMP.
 */
function stratford_is_amp() {
	return ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() );
}
