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

		/*
		 * Get customizer colors and add them to the editor color palettes
		 *
		 * - if the customizer color is empty, use the default
		 */
		$colors_array     = get_theme_mod( 'colors_manager' ); // color annotations array()
		$primary          = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['link'] : '#000000'; // $config-global--color-primary-default;
		$secondary        = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['fg1'] : '#FF7A5C';  // $config-global--color-secondary-default;
		$background       = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['bg'] : '#FFFFFF';   // $config-global--color-background-default;
		$foreground       = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['txt'] : '#444444';  // $config-global--color-foreground-default;
		$foreground_light = ( is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) && $colors_array['colors']['txt'] != '#444444' ) ? $colors_array['colors']['txt'] : '#767676';  // $config-global--color-foreground-light-default;
		$foreground_dark  = ( is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) && $colors_array['colors']['txt'] != '#444444' ) ? $colors_array['colors']['txt'] : '#111111';  // $config-global--color-foreground-dark-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'coutoire' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'coutoire' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Background', 'coutoire' ),
					'slug'  => 'background',
					'color' => $background,
				),
				array(
					'name'  => __( 'Foreground', 'coutoire' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Foreground Light', 'coutoire' ),
					'slug'  => 'foreground-light',
					'color' => $foreground_light,
				),
				array(
					'name'  => __( 'Foreground Dark', 'coutoire' ),
					'slug'  => 'foreground-dark',
					'color' => $foreground_dark,
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'coutoire_setup', 12 );

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
			$font_families[] = 'EB Garamond:400,400i,600';
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
 * Set the default option for sticky menu as true.
 * - Needed to be separate in order to ensure this only impacts sites after the change was introduced.
 */
function coutoire_setup_sticky_menu() {
	update_option( 'coutoire_default_sticky_menu', true );
}
add_action('after_switch_theme', 'coutoire_setup_sticky_menu');

/**
 * Add option in Customizer for users to stick menu to top of site.
 */
function coutoire_customizer_register( $wp_customize ) {
	function coutoire_sanitize_checkbox( $checked ) { 
            return ( ( isset( $checked ) && true == $checked ) ? true : false );
        }

	$wp_customize->add_setting( 'coutoire_sticky_menu', array(
  		'capability' => 'edit_theme_options',
		'transport' => 'refresh',
		'sanitize_callback'  => 'coutoire_sanitize_checkbox',
		'default' => get_option( 'coutoire_default_sticky_menu' ),
	) );

	$wp_customize->add_control( 'coutoire_sticky_menu', array(
  		'type' => 'checkbox',
  		'section' => 'jetpack_content_options',
  		'label' => __( 'Stick main menu to top of site', 'coutoire' ),
		'settings' => 'coutoire_sticky_menu',
	) );
}
add_action( 'customize_register', 'coutoire_customizer_register' );

/**
 * Add body classes.
 */
function coutoire_body_class( $classes ) {
	if ( get_theme_mod( 'coutoire_sticky_menu' ) == 1 ) {
		$classes[] = 'sticky-menu-enabled';
	}

	return $classes;
}
add_filter( 'body_class', 'coutoire_body_class' );

/**
 * Enqueue scripts and styles.
 */
function coutoire_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'coutoire-fonts', coutoire_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style( 'coutoire-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

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

	// Hide duplicate palette colors
	$colors_array = get_theme_mod( 'colors_manager', array( 'colors' => true ) ); // color annotations array()
	if ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#767676' ) { // $config-global--color-foreground-light-default;
		$inline_palette_css = '.components-circular-option-picker__option-wrapper:nth-child(5),
			.components-circular-option-picker__option-wrapper:nth-child(6) {
				display: none;
			}';
		wp_add_inline_style( 'wp-edit-blocks', $inline_palette_css );
	}
}
add_action( 'enqueue_block_editor_assets', 'coutoire_editor_styles' );

/**
 * Checks whether the endpoint is AMP.
 */
function coutoire_is_amp() {
	return ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() );
}
