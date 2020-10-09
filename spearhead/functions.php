<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Spearhead
 * @since 1.0.0
 */

if ( ! function_exists( 'spearhead_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function spearhead_setup() {

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		add_theme_support( 'dark-editor-style' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				spearhead_fonts_url(),
				'variables.css',
				'style.css',
			)
		);

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Tiny', 'spearhead' ),
					'shortName' => __( 'XS', 'spearhead' ),
					'size'      => 14,
					'slug'      => 'xs',
				),
				array(
					'name'      => __( 'Small', 'spearhead' ),
					'shortName' => __( 'S', 'spearhead' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Medium', 'spearhead' ),
					'shortName' => __( 'M', 'spearhead' ),
					'size'      => 20,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'spearhead' ),
					'shortName' => __( 'L', 'spearhead' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'XL', 'spearhead' ),
					'shortName' => __( 'XL', 'spearhead' ),
					'size'      => 36,
					'slug'      => 'xl',
				),
				array(
					'name'      => __( 'Huge', 'spearhead' ),
					'shortName' => __( 'XXL', 'spearhead' ),
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
					'name'  => __( 'Primary', 'spearhead' ),
					'slug'  => 'primary',
					'color' => '#DB0042',
				),
				array(
					'name'  => __( 'Foreground', 'spearhead' ),
					'slug'  => 'foreground',
					'color' => '#000000',
				),
				array(
					'name'  => __( 'Background', 'spearhead' ),
					'slug'  => 'background',
					'color' => '#FFFFFF',
				),
			)
		);
		remove_filter( 'excerpt_more', 'seedlet_continue_reading_link' );
		remove_filter( 'the_content_more_link', 'seedlet_continue_reading_link' );
	}
endif;
add_action( 'after_setup_theme', 'spearhead_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function spearhead_content_width() {
	return 744;
}
add_filter( 'seedlet_content_width', 'spearhead_content_width' );

/**
 * Enqueue scripts and styles.
 */
function spearhead_scripts() {
	// dequeue parent styles
	wp_dequeue_style( 'seedlet-style-navigation' );

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'spearhead-fonts', spearhead_fonts_url(), array(), null );

	// Child theme variables
	wp_enqueue_style( 'spearhead-variables-style', get_stylesheet_directory_uri() . '/variables.css', array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child styles
	wp_enqueue_style( 'spearhead-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'spearhead-navigation', get_stylesheet_directory_uri() . '/navigation.css', array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child RTL styles
	wp_style_add_data( 'spearhead-style', 'rtl', 'replace' );
	wp_style_add_data( 'spearhead-navigation', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'spearhead_scripts', 11 );

/**
 * Enqueue Custom Cover Block Styles and Scripts
 */
function spearhead_block_extends() {
	// Block Tweaks
	wp_enqueue_script(
		'spearhead-block-extends',
		get_stylesheet_directory_uri() . '/assets/js/extend-blocks.js',
		array( 'wp-blocks', 'wp-edit-post' ) // wp-edit-post is added to avoid a race condition when trying to unregister a style variation
	);
}
add_action( 'enqueue_block_assets', 'spearhead_block_extends' );

/**
 * Add Google webfonts
 *
 * @return string
 */
function spearhead_fonts_url() : string {
	$fonts_url = '';

	$font_families   = array();
	$font_families[] = 'family=Libre+Franklin:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700';
	$font_families[] = 'family=IBM+Plex+Mono:wght@400;700';
	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	$fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families );

	return $fonts_url;
}

/**
 * Load extras
 */
function seedlet_entry_meta_header() : void {
	// Hide author, post date, category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		// Posted on
		seedlet_posted_on();
	}
}
// require get_stylesheet_directory() . '/inc/custom-header.php';

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';

add_filter(
	'body_class',
	function( $classes ) {
		$stickies = get_option( 'sticky_posts' );

		if ( count( $stickies ) && is_home() ) {
			return array_merge( $classes, array( 'has-sticky-post' ) );
		}

		return $classes;
	}
);

/*
 * Create the continue reading link
 */
function spearhead_continue_reading_link() {

	if ( ! is_admin() ) {
		$continue_reading = sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'More %s', 'seedlet' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		);

		return '<a class="more-link" href="' . esc_url( get_permalink() ) . '">' . $continue_reading . ' ' . seedlet_get_icon_svg( 'dropdown' ) . '</a>';
	}
}

// Filter the excerpt more link
add_filter( 'excerpt_more', 'spearhead_continue_reading_link' );

// Filter the content more link
add_filter( 'the_content_more_link', 'spearhead_continue_reading_link' );
