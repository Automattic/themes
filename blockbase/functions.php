<?php
if ( ! function_exists( 'blockbase_support' ) ) :
	function blockbase_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'blockbase' );
		if ( ! 'blockbase' === wp_get_theme()->get( 'TextDomain' ) ) {
			load_theme_textdomain( wp_get_theme()->get( 'TextDomain' ) );
		}

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for responsive embedded content.
		// https://github.com/WordPress/gutenberg/issues/26901
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/ponyfill.css',
			)
		);

		// Register two nav menus if Gutenberg is activated (otherwise the __experimentalMenuLocation attribute isn't available)
		if ( defined( 'IS_GUTENBERG_PLUGIN' ) ) {
			register_nav_menus(
				array(
					'primary' => __( 'Primary Navigation', 'blockbase' ),
					'social'  => __( 'Social Navigation', 'blockbase' ),
				)
			);
		}

		add_filter(
			'block_editor_settings_all',
			function( $settings ) {
				$settings['defaultBlockTemplate'] = '<!-- wp:group {"layout":{"inherit":true}} --><div class="wp-block-group"><!-- wp:post-content /--></div><!-- /wp:group -->';
				return $settings;
			}
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'blockbase_support', 9 );

/**
 *
 * Enqueue scripts and styles.
 */
function blockbase_editor_styles() {
	// Add the child theme CSS if it exists.
	if ( file_exists( get_stylesheet_directory() . '/assets/theme.css' ) ) {
		add_editor_style(
			'/assets/theme.css'
		);
	}
}
add_action( 'admin_init', 'blockbase_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function blockbase_scripts() {
	wp_enqueue_style( 'blockbase-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' ) );

	// Add the child theme CSS if it exists.
	if ( file_exists( get_stylesheet_directory() . '/assets/theme.css' ) ) {
		wp_enqueue_style( 'blockbase-child-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'blockbase_scripts' );

/**
 * Customize Global Styles
 */
if ( class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
	require get_template_directory() . '/inc/customizer/wp-customize-colors.php';
	require get_template_directory() . '/inc/social-navigation.php';
}

require get_template_directory() . '/inc/fonts/custom-fonts.php';
require get_template_directory() . '/inc/rest-api.php';


// Force menus to reload
add_action(
	'customize_controls_enqueue_scripts',
	static function () {
		wp_enqueue_script(
			'wp-customize-nav-menu-refresh',
			get_template_directory_uri() . '/inc/customizer/wp-customize-nav-menu-refresh.js',
			array( 'customize-nav-menus' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
);

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

// Add the child theme patterns if they exist.
if ( file_exists( get_stylesheet_directory() . '/inc/block-patterns.php' ) ) {
	require_once get_stylesheet_directory() . '/inc/block-patterns.php';
}
