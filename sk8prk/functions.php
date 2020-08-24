<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sk8prk
 * @since 1.0.0
 */

if ( ! function_exists( 'seedlet_sk8prk_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function seedlet_sk8prk_setup() {

		// Add support for editor styles.
        add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			seedlet_sk8prk_fonts_url(),
			'variables.css',
			'style.css',
		) );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Tiny', 'seedlet-sk8prk' ),
					'shortName' => __( 'XS', 'seedlet-sk8prk' ),
					'size'      => 14,
					'slug'      => 'xs',
				),
				array(
					'name'      => __( 'Small', 'seedlet-sk8prk' ),
					'shortName' => __( 'S', 'seedlet-sk8prk' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Medium', 'seedlet-sk8prk' ),
					'shortName' => __( 'M', 'seedlet-sk8prk' ),
					'size'      => 20,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'seedlet-sk8prk' ),
					'shortName' => __( 'L', 'seedlet-sk8prk' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'XL', 'seedlet-sk8prk' ),
					'shortName' => __( 'XL', 'seedlet-sk8prk' ),
					'size'      => 36,
					'slug'      => 'xl',
				),
				array(
					'name'      => __( 'Huge', 'seedlet-sk8prk' ),
					'shortName' => __( 'XXL', 'seedlet-sk8prk' ),
					'size'      => 48,
					'slug'      => 'huge',
				),
			)
		);

		// Add child theme editor color pallete to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'seedlet-sk8prk' ),
					'slug'  => 'primary',
					'color' => '#000000',
				),
				array(
					'name'  => __( 'Background', 'seedlet-sk8prk' ),
					'slug'  => 'background',
					'color' => '#BFF5A5',
				),
			)
        );
	}
endif;
add_action( 'after_setup_theme', 'seedlet_sk8prk_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function seedlet_sk8prk_content_width() {
	return 744;
}
add_filter( 'seedlet_content_width', 'seedlet_sk8prk_content_width' );

/**
 * Enqueue scripts and styles.
 */
function seedlet_sk8prk_scripts() {

	// enqueue Google fonts, if necessary
    wp_enqueue_style( 'seedlet-sk8park-fonts', seedlet_sk8prk_fonts_url(), array(), null );

	// Child theme variables
	wp_enqueue_style( 'seedlet-sk8prk-variables-style', get_stylesheet_directory_uri() . '/variables.css', array(), wp_get_theme()->get( 'Version' ) );

	// dequeue parent styles
	// wp_dequeue_style( 'seedlet-variables-style' );

	// enqueue child styles
	wp_enqueue_style('seedlet-sk8prk-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'seedlet-sk8prk-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'seedlet_sk8prk_scripts', 99 );

/**
 * Enqueue Custom Cover Block Styles and Scripts
 */
function seedlet_sk8prk_block_extends() {
	// Block Tweaks
	wp_enqueue_script( 'seedlet-sk8prk-block-extends',
		get_stylesheet_directory_uri() . '/assets/js/extend-blocks.js',
		array( 'wp-blocks', 'wp-edit-post' ) // wp-edit-post is added to avoid a race condition when trying to unregister a style variation 
	);
}
add_action( 'enqueue_block_assets', 'seedlet_sk8prk_block_extends' );

/**
 * Add Google webfonts
 *
 * @return string
 */
function seedlet_sk8prk_fonts_url() : string {
    $fonts_url = '';

	$font_families   = array();
	$font_families[] = 'family=Red+Hat+Display:ital,wght@0,900;1,900';
	$font_families[] = 'family=Red+Hat+Text:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700';
	$font_families[] = 'display=swap';

    // Make a single request for the theme fonts.
    $fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families );
    
    return $fonts_url;
}

/**
 * Load extras
 */
// require get_stylesheet_directory() . '/inc/custom-header.php';