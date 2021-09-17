<?php

class Nav_Menu_To_Nav_Block_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '';
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<!-- /wp:navigation-link -->';
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$is_top_level_link = $item->menu_item_parent == 0 ? 'true' : 'false';
		if ( is_object( $args ) && property_exists( $args, 'walker' ) && property_exists( $args->walker, 'has_children' ) ) {
			if ( $args->walker->has_children ) {
				$output .= '<!-- wp:navigation-link {"label":"'. $item->title .'","type":"' . $item->type . '","url":"' . $item->url . '","kind":"' . $item->object . '","isTopLevelLink":"' . $is_top_level_link . '"} -->';
			} else {
				$output .= '<!-- wp:navigation-link {"label":"'. $item->title .'","type":"' . $item->type . '","url":"' . $item->url . '","kind":"' . $item->object . '","isTopLevelLink":"' . $is_top_level_link . '"} /-->';
			}
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

// This generates a navigation template from the saved nav menus.
// If the user has modified the template in the Site Editor it will be overwritten.
function blockbase_update_navigation_template() {
	// Get primary nav block markup.
	$primary_nav_block_markup = wp_nav_menu( [
		'container'=> false,
		'echo' => false,
		'items_wrap' => '%3$s',
		'theme_location' => 'primary',
		'walker' => new Nav_Menu_To_Nav_Block_Walker(),
	] );

	// Get social nav block markup.
	$social_nav_block_markup = wp_nav_menu( [
		'container'=> false,
		'echo' => false,
		'items_wrap' => '<!-- wp:social-links --><ul class="wp-block-social-links">%3$s</ul><!-- /wp:social-links -->',
		'theme_location' => 'social',
		'walker' => new Nav_Menu_To_Social_Links_Block_Walker(),
	] );

	// Create the navigation block markup.
	$navigation_block_markup = '<!-- wp:navigation {"isResponsive":true} -->' . $primary_nav_block_markup . $social_nav_block_markup . '<!-- /wp:navigation -->';

	// Get template part.
	$template = gutenberg_get_block_template( get_stylesheet() . '//navigation', 'wp_template_part' );

	// This should probably use prepare_item_for_database from Gutenberg.
	$navigation_template_object = array(
		'post_title' => 'navigation',
		'post_name' => 'navigation',
		'post_status' => 'publish',
		'post_content' => $navigation_block_markup,
		'post_type' => 'wp_template_part',
		'tax_input' => array(
			'wp_theme' => isset( $template->theme ) ? $template->theme : wp_get_theme()->get_stylesheet(),
		),
	);

	// If the template has an ID lets use it.
	if ( $template->wp_id ) {
		$navigation_template_object['ID'] = $template->wp_id;
	}

	if ( 'custom' === $template->source ) {
		// Update nav from template part.
		return wp_update_post( wp_slash( $navigation_template_object ), true );
	} else {
		// Save nav in template part.
		return wp_insert_post( wp_slash( $navigation_template_object ), true );
	}
}
add_action( 'wp_update_nav_menu_item', 'blockbase_update_navigation_template' );

function blockbase_wp_update_nav( $post_id, $post ) {
	// If a menu item is being deleted then regenerate the navigation template.
	if ( $post->post_type === "nav_menu_item" ) {
		blockbase_update_navigation_template();
	}
}
add_action( 'deleted_post', 'blockbase_wp_update_nav', 10, 2 );
