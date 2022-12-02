<?php

// We should only change the render of the navigtion block
// to social links in the following conditions.
function blockbase_condition_to_render_social_menu( $block_content, $block ) {
	// The block should be a navigation block.
	if ( 'core/navigation' !== $block['blockName'] ) {
		return false;
	}

	// The theme should have a menu defined at the social location.
	if ( ! has_nav_menu( 'social' ) ) {
		return false;
	}

	// The block should be empty (no custom menu assigned)
	if ( ! empty($block['attrs']['navigationMenuId']) || ! empty($block['attrs']['ref']) ) {
		return false;
	}
	
	// The block should have the class 'social-links'.
	if ( empty( $block['attrs']['className'] ) ) {
		return false;
	}
	if ( ! str_contains( $block['attrs']['className'], 'social-links' ) ) {
		return false;
	}

	return true;
}

function blockbase_theme_has_navigation_social_links_settings( $theme_data ) {
	return $theme_data
		&& array_key_exists( 'settings', $theme_data )
		&& array_key_exists( 'custom', $theme_data['settings'] )
		&& array_key_exists( 'navigation/social-links', $theme_data['settings']['custom'] )
		&& array_key_exists( 'color', $theme_data['settings']['custom']['navigation/social-links'] )
		&& array_key_exists( 'text', $theme_data['settings']['custom']['navigation/social-links']['color'] );
}

function get_social_menu_as_social_links_block( $block ) {

	$social_links_location = 'social';
	$nav_menu_locations    = get_nav_menu_locations();
	$social_menu_id        = $nav_menu_locations[ $social_links_location ];
	$class_name            = 'is-style-logos-only';
	if ( ! empty( $block['attrs']['itemsJustification'] ) ) {
		$class_name .= ' items-justified-' . $block['attrs']['itemsJustification'];
	}

	// Get color for social icons.
	$theme_data                    = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_raw_data();
	$social_links_icon_color_value = 'var(--wp--custom--color--primary)';
	$social_links_icon_color       = 'primary';

	if ( blockbase_theme_has_navigation_social_links_settings( $theme_data ) ) {
		$social_links_icon_color_value = $theme_data['settings']['custom']['navigation/social-links']['color']['text'];
		$social_links_icon_color       = preg_replace( '/var\(--wp--custom--color--(.+)\)/', '$0 --> $2 $1', $social_links_icon_color_value );
	}

	$social_links_content = '<!-- wp:social-links {"iconColor":"' . $social_links_icon_color . '","iconColorValue":"' . $social_links_icon_color_value . '","className":"' . $class_name . '"} --><ul class="wp-block-social-links has-icon-color ' . $class_name . '">';

	$menu = wp_get_nav_menu_items( $social_menu_id );
	if ( $menu ) {
		foreach ( $menu as $menu_item ) {
			$service_name          = preg_replace( '/(-[0-9]+)/', '', $menu_item->post_name );
			$service_name          = preg_replace( '/(-profile)/', '', $service_name );
			$social_links_content .= '<!-- wp:social-link {"url":"' . $menu_item->url . '","service":"' . $service_name . '"} /-->';
		}
	}
	$social_links_content .= '</ul><!-- /wp:social-links -->';
	return do_blocks( $social_links_content );
}

function append_social_links_block( $parent_content, $social_links_block ) {
	if ( empty( $parent_content ) ) {
		return $social_links_block;
	}
	$dom      = new domDocument;
	$domXPath = new DomXPath( $dom );
	// Since the nav block uses HTML5 element names, we need to suppress the warnings it sends when we loadHTML with HTML5 elements.
	libxml_use_internal_errors( true );
	$dom->loadHTML( '<?xml encoding="utf-8" ?>' . $parent_content );
	$wp_block_navigation__container = $dom->getElementsByTagName( 'ul' )->item( 0 )->parentNode;
	$social_links_node              = $dom->createDocumentFragment();
	$social_links_node->appendXML( $social_links_block );
	if ( ! empty( $wp_block_navigation__container ) ) {
		$wp_block_navigation__container->appendChild( $social_links_node );
	}
	$navigation_block = $dom->getElementsByTagName( 'nav' )->item( 0 );
	return $dom->saveXML( $navigation_block );
}

function blockbase_social_menu_render( $block_content, $block ) {
	if ( blockbase_condition_to_render_social_menu( $block_content, $block ) ) {
		$social_links_block = get_social_menu_as_social_links_block( $block );

		return append_social_links_block( $block_content, $social_links_block );
	}

	return $block_content;
}

/**
 * Hijack the render of the menu block to inject a social menu.
 */
add_filter( 'render_block', 'blockbase_social_menu_render', 10, 2 );
