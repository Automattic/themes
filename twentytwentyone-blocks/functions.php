<?php

if ( ! function_exists( 'twenty_twenty_one_blocks_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_blocks_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone-blocks' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentytwentyone-blocks', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'./assets/css/blocks.css',
			'./assets/css/style-shared.css',
			'./assets/css/style-editor.css', 
		) );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'twentytwentyone-blocks' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'twentytwentyone-blocks' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'twentytwentyone-blocks' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'twentytwentyone-blocks' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'twentytwentyone-blocks' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'twentytwentyone-blocks' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'twentytwentyone-blocks' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'twentytwentyone-blocks' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra Large', 'twentytwentyone-blocks' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'twentytwentyone-blocks' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'twentytwentyone-blocks' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'twentytwentyone-blocks' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'twentytwentyone-blocks' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'twentytwentyone-blocks' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'twentytwentyone-blocks' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'twentytwentyone-blocks' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'twentytwentyone-blocks' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'twentytwentyone-blocks' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'twentytwentyone-blocks' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'twentytwentyone-blocks' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'twentytwentyone-blocks' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'twentytwentyone-blocks' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'twentytwentyone-blocks' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'twentytwentyone-blocks' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to Yellow', 'twentytwentyone-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ', ' . $yellow . ')',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Purple', 'twentytwentyone-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ', ' . $purple . ')',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to Yellow', 'twentytwentyone-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ', ' . $yellow . ')',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Green', 'twentytwentyone-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ', ' . $green . ')',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to Yellow', 'twentytwentyone-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ', ' . $yellow . ')',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Red', 'twentytwentyone-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ', ' . $red . ')',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to Red', 'twentytwentyone-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ', ' . $red . ')',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to Purple', 'twentytwentyone_blocks_block_editor_script' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ', ' . $purple . ')',
					'slug'     => 'red-to-purple',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'experimental-custom-spacing' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'twenty_twenty_one_blocks_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function twenty_twenty_one_blocks_scripts() {
	wp_enqueue_style( 'twenty-twenty-one-blocks-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_blocks_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since 1.0.0
 *
 * @return void
 */
function twentytwentyone_blocks_block_editor_script() {

	wp_enqueue_script( 'twenty-twenty-one-blocks-unregister-block-style', get_theme_file_uri( '/assets/js/unregister-block-style.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'enqueue_block_editor_assets', 'twentytwentyone_blocks_block_editor_script' );

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';