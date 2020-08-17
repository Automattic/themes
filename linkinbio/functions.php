<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage linkinbio
 * @since 1.0.0
 */

if ( ! function_exists( 'linkinbio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function linkinbio_setup() {

		// Add support for editor styles.
        add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			linkinbio_fonts_url(),
			'variables.css',
			'style.css',
		) );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Tiny', 'linkinbio' ),
					'shortName' => __( 'XS', 'linkinbio' ),
					'size'      => 14,
					'slug'      => 'xs',
				),
				array(
					'name'      => __( 'Small', 'linkinbio' ),
					'shortName' => __( 'S', 'linkinbio' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Medium', 'linkinbio' ),
					'shortName' => __( 'M', 'linkinbio' ),
					'size'      => 20,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'linkinbio' ),
					'shortName' => __( 'L', 'linkinbio' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'XL', 'linkinbio' ),
					'shortName' => __( 'XL', 'linkinbio' ),
					'size'      => 36,
					'slug'      => 'xl',
				),
				array(
					'name'      => __( 'Huge', 'linkinbio' ),
					'shortName' => __( 'XXL', 'linkinbio' ),
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
					'name'  => __( 'Primary', 'linkinbio' ),
					'slug'  => 'primary',
					'color' => '#DB0042',
				),
				array(
					'name'  => __( 'Foreground', 'linkinbio' ),
					'slug'  => 'foreground',
					'color' => '#000000',
				),
				array(
					'name'  => __( 'Background', 'linkinbio' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
        );
	}
endif;
add_action( 'after_setup_theme', 'linkinbio_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function linkinbio_content_width() {
	return 744;
}
add_filter( 'seedlet_content_width', 'linkinbio_content_width' );

/**
 * Enqueue scripts and styles.
 */
function linkinbio_scripts() {
	// enqueue Google fonts, if necessary
    wp_enqueue_style( 'linkinbio-fonts', linkinbio_fonts_url(), array(), null );

	// Child theme variables
	wp_enqueue_style( 'linkinbio-variables-style', get_stylesheet_directory_uri() . '/variables.css', array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child styles
	wp_enqueue_style('linkinbio-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'linkinbio-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'linkinbio_scripts', 11 );

/**
 * Enqueue Custom Cover Block Styles and Scripts
 */
function linkinbio_block_extends() {
	// Block Tweaks
	wp_enqueue_script( 'linkinbio-block-extends',
		get_stylesheet_directory_uri() . '/assets/js/extend-blocks.js',
		array( 'wp-blocks', 'wp-edit-post' ) // wp-edit-post is added to avoid a race condition when trying to unregister a style variation 
	);
}
add_action( 'enqueue_block_assets', 'linkinbio_block_extends' );

/**
 * Add Google webfonts
 *
 * @return string
 */
function linkinbio_fonts_url() : string {
    $fonts_url = '';

	$font_families   = array();
	$font_families[] = 'family=Lora:ital,wght@0,400;0,700;1,400;1,700';
	$font_families[] = 'display=swap';

    // Make a single request for the theme fonts.
    $fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families );
    
    return $fonts_url;
}

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function linkinbio_register_block_styles() {

		/**
		 * Register block style
		 */
		register_block_style(
			'core/social-links',
			array(
				'name'         => 'linkinbio-large-buttons',
				'label'        => 'Large Buttons',
				'style_handle' => 'linkinbio-large-buttons',
			)
		);
	}

	add_action( 'init', 'linkinbio_register_block_styles' );
}