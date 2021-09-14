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

		// This theme has two menu locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'blockbase' ),
				'social' => __( 'Social Navigation', 'blockbase' ),
			)
		);

		// Create navigation template from saved menus
		blockbase_update_navigation_template();

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
	if ( ! empty( $theme_data['typography']['fontFamilies']['user'] ) ) {
		foreach( $theme_data['typography']['fontFamilies']['user'] as $font ) {
			if ( ! empty( $font['google'] ) ) {
				$font_families[] = $font['google'];
			}
		}
	} else {
		if ( ! empty( $theme_data['typography']['fontFamilies']['theme'] ) ) {
			foreach( $theme_data['typography']['fontFamilies']['theme'] as $font ) {
				if ( ! empty( $font['google'] ) ) {
					$font_families[] = $font['google'];
				}
			}
		}
	}

	if ( empty( $font_families ) ) {
		return '';
	}

	// Make a single request for the theme or user fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $font_families ) ) . '&display=swap' );
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
/*add_filter( 'render_block', 'blockbase_social_menu_render', 10, 2 );
// We should only change the render of the navigtion block
// to social links in the following conditions.
function blockbase_condition_to_render_social_menu( $block ) {
	// The block should be a navigation block.
	if ( 'core/navigation' !== $block['blockName'] ) {
		return false;
	}

	// The theme should have a menu defined at the social location.
	if ( ! has_nav_menu( 'social' ) ) {
		return false;
	}

	// The block should have a loction defined.
	if ( empty( $block['attrs']['__unstableLocation'] ) ) {
		return false;
	}

	// The block's location should be 'social'.
	if ( $block['attrs']['__unstableLocation'] !== 'social' ) {
		return false;
	}

	return true;
}

function blockbase_social_menu_render( $block_content, $block ) {
	if ( blockbase_condition_to_render_social_menu( $block ) ) {
		$nav_menu_locations = get_nav_menu_locations();
		$social_menu_id = $nav_menu_locations['social'];
		$class_name = 'is-style-logos-only';
		if( !empty( $block['attrs']['itemsJustification'] ) && $block['attrs']['itemsJustification'] === 'right' ) {
			$class_name .= ' items-justified-right';
		}
		$block_content = '<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--custom--color--primary)","className":"' . $class_name . '"} --><ul class="wp-block-social-links has-icon-color ' . $class_name . '">';
		$menu = wp_get_nav_menu_items( $social_menu_id );
		foreach ($menu as $menu_item) {
			$service_name = preg_replace( '/(-[0-9]+)/', '', $menu_item->post_name );
			$block_content .= '<!-- wp:social-link {"url":"' . $menu_item->url . '","service":"' . $service_name . '"} /-->';
		}

		$block_content .= '</ul>';

		return do_blocks( $block_content );
	}

	return $block_content;
}*/

class Nav_Menu_To_Nav_Block_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '';
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<!-- /wp:navigation-link -->';
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$is_top_level_link = $item->menu_item_parent == 0 ? 'true' : 'false';
		if ( $args->walker->has_children ) {
			$output .= '<!-- wp:navigation-link {"label":"'. $item->title .'","type":"' . $item->type . '","url":"' . $item->url . '","kind":"' . $item->object . '","isTopLevelLink":"' . $is_top_level_link . '"} -->';
		} else {
			$output .= '<!-- wp:navigation-link {"label":"'. $item->title .'","type":"' . $item->type . '","url":"' . $item->url . '","kind":"' . $item->object . '","isTopLevelLink":"' . $is_top_level_link . '"} /-->';
		}
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '';
	}
}

class Nav_Menu_To_Social_Links_Block_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '';
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '';
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$service_name = preg_replace( '/(-[0-9]+)/', '', $item->post_name );
		$output .= '<!-- wp:social-link {"url":"' . $item->url . '","service":"' . $service_name . '"} /-->';
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '';
	}
}

function blockbase_update_navigation_template() {
	$primary_nav_block_markup = wp_nav_menu( [
		'container'=> false,
		'echo' => false,
		'items_wrap' => '%3$s',
		'theme_location' => 'primary',
		'walker' => new Nav_Menu_To_Nav_Block_Walker(),
	] );

	$social_nav_block_markup = wp_nav_menu( [
		'container'=> false,
		'echo' => false,
		'items_wrap' => '<!-- wp:social-links --><ul class="wp-block-social-links">%3$s</ul><!-- /wp:social-links -->',
		'theme_location' => 'social',
		'walker' => new Nav_Menu_To_Social_Links_Block_Walker(),
	] );

	// Save nav in template part.
	$template = gutenberg_get_block_template( get_stylesheet() . '//navigation', 'wp_template_part' );

	// This should be created using prepare_item_for_database.
	$navigation_template_object = array(
		'post_title' => 'navigation',
		'post_name' => 'navigation',
		'post_status' => 'publish',
		'post_content' => '<!-- wp:navigation {"isResponsive":true} -->' . $primary_nav_block_markup . $social_nav_block_markup . '<!-- /wp:navigation -->',
		'post_type' => 'wp_template_part',
		'tax_input' => array(
			'wp_theme' => isset( $template->theme ) ? $template->theme : wp_get_theme()->get_stylesheet(),
		),
	);

	if ( $template->wp_id ) {
		$navigation_template_object['ID'] = $template->wp_id;
	}

	if ( 'custom' === $template->source ) {
		return wp_update_post( wp_slash( $navigation_template_object ), true );
	} else {
		return wp_insert_post( wp_slash( $navigation_template_object ), true );
	}
}
add_action( 'wp_update_nav_menu_item', 'blockbase_update_navigation_template' );

function blockbase_wp_update_nav( $post_id, $post ) {
	if ( $post->post_type === "nav_menu_item" ) {
		blockbase_update_navigation_template();
	}
}
add_action( 'deleted_post', 'blockbase_wp_update_nav', 10, 2 );
