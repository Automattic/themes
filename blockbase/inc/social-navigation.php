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

	// The block should have a social links attribute.
	if ( empty( $block['attrs']['__unstableSocialLinks'] ) ) {
		return false;
	}

	return true;
}

function get_social_menu_as_social_links_block( $block ) {
	if ( empty( $block['attrs']['__unstableSocialLinks'] ) ) {
		return false;
	}

	$social_links_location = $block['attrs']['__unstableSocialLinks'];
	$nav_menu_locations = get_nav_menu_locations();
	$social_menu_id = $nav_menu_locations[ $social_links_location ];
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

function append_social_links_block( $parent_content, $social_links_block ) {
	if ( empty( $parent_content ) ) {
		return $social_links_block;
	}
	$dom = new domDocument;
	// Since the nav block uses HTML5 element names, we need to suppress the warnings it sends when we loadHTML with HTML5 elements.
	libxml_use_internal_errors( true );
	$dom->loadHTML( $parent_content );
	$wp_block_navigation__container = $dom->getElementsByTagName('ul')->item( 0 );
	$social_links_node = $dom->createDocumentFragment();
	$social_links_node->appendXML( $social_links_block );
	$wp_block_navigation__container->appendChild( $social_links_node );
	$navigation_block = $dom->getElementsByTagName('nav')->item( 0 );
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
