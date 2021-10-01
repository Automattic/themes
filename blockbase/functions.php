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

		// Register two nav menus
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'blockbase' ),
				'social' => __( 'Social Navigation', 'blockbase' )
			)
		);

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
if ( class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
	require get_template_directory() . '/inc/customizer/wp-customize-colors.php';
	require get_template_directory() . '/inc/customizer/wp-customize-color-palettes.php';
	require get_template_directory() . '/inc/customizer/wp-customize-fonts.php';
}

// Force menus to reload
add_action(
	'customize_controls_enqueue_scripts',
	static function () {
		wp_enqueue_script(
			'wp-customize-nav-menu-refresh',
			get_template_directory_uri() . '/inc/customizer/wp-customize-nav-menu-refresh.js',
			[ 'customize-nav-menus' ],
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
);

/**
 * Populate the social links block with the social menu content if it exists
 *
 */
add_filter( 'render_block', 'blockbase_social_menu_render', 10, 2 );
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

	// The block's location should be 'primary'.
	if ( $block['attrs']['__unstableLocation'] !== 'primary' ) {
		return false;
	}

	return true;
}

function get_social_menu_as_social_links_block() {
	$nav_menu_locations = get_nav_menu_locations();
	$social_menu_id = $nav_menu_locations['social'];
	$class_name = 'is-style-logos-only';
	if( ! empty( $block['attrs']['itemsJustification'] ) ) {
		$class_name .= ' items-justified-' . $block['attrs']['itemsJustification'];
	}
	$social_links_content = '<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--custom--color--primary)","className":"' . $class_name . '"} --><ul class="wp-block-social-links has-icon-color ' . $class_name . '">';
	$menu = wp_get_nav_menu_items( $social_menu_id );
	foreach ($menu as $menu_item) {
		$service_name = preg_replace( '/(-[0-9]+)/', '', $menu_item->post_name );
		$social_links_content .= '<!-- wp:social-link {"url":"' . $menu_item->url . '","service":"' . $service_name . '"} /-->';
	}
	$social_links_content .= '</ul><!-- /wp:social-links -->';
	return do_blocks( $social_links_content );
}

function append_social_links_block_to_primary_navigation( $primary_navigation, $social_links_block ) {
	$dom = new domDocument;
	$dom->loadHTML( $primary_navigation );
	$wp_block_navigation__container = $dom->getElementsByTagName('ul')->item( 0 );
	$social_links_node = $dom->createDocumentFragment();
	$social_links_node->appendXML( $social_links_block );
	$wp_block_navigation__container->appendChild( $social_links_node );
	$navigation_block = $dom->getElementsByTagName('nav')->item( 0 );
	return $dom->saveXML( $navigation_block );
}

function blockbase_social_menu_render( $block_content, $block ) {
	if ( blockbase_condition_to_render_social_menu( $block ) ) {
		$social_links_block = get_social_menu_as_social_links_block();

		return append_social_links_block_to_primary_navigation( $block_content, $social_links_block );
	}

	return $block_content;
}
