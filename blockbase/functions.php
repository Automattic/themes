<?php
if ( ! function_exists( 'blockbase_support' ) ) :
	function blockbase_support() {
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

		// Declare that there are no <title> tags and allow WordPress to provide them
		add_theme_support( 'title-tag' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/ponyfill.css',
			)
		);

		// This theme has one menu location.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'blockbase' ),
				'social' => __( 'Social Navigation', 'blockbase' )
			)
		);

	}
	add_action( 'after_setup_theme', 'blockbase_support', 9 );
endif;

/**
 *
 * Enqueue scripts and styles.
 */
function blockbase_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			blockbase_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'blockbase_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function blockbase_scripts() {
	// Enqueue Google fonts
	wp_enqueue_style( 'blockbase-fonts', blockbase_fonts_url(), array(), null );
	wp_enqueue_style( 'blockbase-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'blockbase_scripts' );

/**
 * Add Google webfonts
 *
 * @return $fonts_url
 */

function blockbase_fonts_url() {
	if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
		return '';
	}

	$theme_data = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_settings();
	if ( empty( $theme_data ) || empty( $theme_data['typography'] ) || empty( $theme_data['typography']['fontFamilies'] ) ) {
		return '';
	}

	$font_families = [];
	if ( ! empty( $theme_data['typography']['fontFamilies']['theme'] ) ) {
		foreach( $theme_data['typography']['fontFamilies']['theme'] as $font ) {
			if ( ! empty( $font['google'] ) ) {
				$font_families[] = $font['google'];
			}
		}
	}

	if ( ! empty( $theme_data['typography']['fontFamilies']['user'] ) ) {
		foreach( $theme_data['typography']['fontFamilies']['user'] as $font ) {
			if ( ! empty( $font['google'] ) ) {
				$font_families[] = $font['google'];
			}
		}
	}

	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families ) );
}

/**
 * Restores the Customizer since we still rely on it.
 */
function blockbase_restore_customizer() {
	remove_action( 'admin_menu', 'gutenberg_remove_legacy_pages' );
}
add_action( 'init', 'blockbase_restore_customizer' );

/**
 * Customize Global Styles
 */
require get_template_directory() . '/inc/customizer/wp-customize-colors.php';
require get_template_directory() . '/inc/customizer/wp-customize-color-palettes.php';
require get_template_directory() . '/inc/customizer/wp-customize-fonts.php';

/**
 * Populate the social links block with the social menu content if it exists
 *
 */
add_filter( 'render_block', 'blockbase_social_menu_render', 10, 2 );
function blockbase_social_menu_render( $block_content, $block ) {
	if ( 'core/social-links' !== $block['blockName'] ) {
		return $block_content;
	}

	if ( ! has_nav_menu( 'social' ) ) :
		return $block_content;
	else:

		$return  = '<ul class="wp-block-social-links has-icon-color items-justified-right is-style-logos-only">';
		
		$menu = wp_get_nav_menu_items('social');

		foreach ($menu as $menu_item) {
			$link = '<!-- wp:social-link {"url":"'.$menu_item->url.'","service":"'.$menu_item->post_name.'"} /-->';
			$return .= str_replace('<li class', '<li style="color: var(--wp--custom--color--primary); " class', do_blocks($link) );
		}

		$return .= '</ul>';
		
		return $return;
	endif; 

}