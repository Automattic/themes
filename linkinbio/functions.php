<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package linkinbio
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
			'variables.css',
			'style-editor.css'
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
					'color' => '#FF0000',
				),
				array(
					'name'  => __( 'Foreground', 'linkinbio' ),
					'slug'  => 'foreground',
					'color' => '#FFFFFF',
				),
				array(
					'name'  => __( 'Background', 'linkinbio' ),
					'slug'  => 'background',
					'color' => '#141414',
				),
			)
        );

        // Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'radcliffe_2_custom_background_args', array(
			'default-color' => '141414',
			'default-image' => get_stylesheet_directory_uri() . '/assets/images/background-image.jpg',
			'default-preset'=> 'Fill Screen',
			'default-position' => 'center',
			'default-repeat' => 'no-repeat',
			'default-attachment' => 'fixed',
		) ) );
	}
endif;
add_action( 'after_setup_theme', 'linkinbio_setup', 12 );

/**
 * Add settings for hiding page title on the homepage 
 * and a customizer message about contrast.
 */
function linkinbio_customize_update( $wp_customize ) {
	$wp_customize->add_setting( 'linkinbio_blur_background_image', array(
		'default'              => true,
		'type'                 => 'theme_mod',
		'transport'            => 'postMessage',
		'sanitize_callback'    => 'linkinbio_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'linkinbio_blur_background_image', array(
		'label'		  => esc_html__( 'Blur the background image', 'linkinbio' ),
		'description' => esc_html__( 'Apply a blur filter to the background image.', 'linkinbio' ),
		'section'	  => 'background_image',
		'priority'	  => 10,
		'type'		  => 'checkbox',
		'settings'	  => 'linkinbio_blur_background_image',
	) );
}
add_action( 'customize_register', 'linkinbio_customize_update' );

/**
* Sanitize the checkbox.
*
* @param boolean $input.
*
* @return boolean true if is 1 or '1', false if anything else
*/
function linkinbio_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function linkinbio_body_classes( $classes ) {

	$blur = get_theme_mod( 'linkinbio_blur_background_image', true );

	if ( false === $blur ) {
		$classes[] = 'unblurred-background-image';
	}

	return $classes;
}
add_filter( 'body_class', 'linkinbio_body_classes' );

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

	// Child theme variables
	wp_enqueue_style( 'linkinbio-variables-style', get_stylesheet_directory_uri() . '/variables.css', array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child styles
	wp_enqueue_style('linkinbio-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'linkinbio-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'linkinbio_scripts', 11 );

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';