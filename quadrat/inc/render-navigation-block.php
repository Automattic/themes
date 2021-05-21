<?php
if ( ! function_exists( 'render_navigation_block' ) ) :

	function render_navigation_block( $menu_location ) {
		if ( ! has_nav_menu( $menu_location ) ) {
			return;
		}

		$block_attributes                 = array();
		$block_attributes['isResponsive'] = true;

		$nav_items = wp_nav_menu(
			array(
				'echo'             => false,
				'block_attributes' => $block_attributes,
				'theme_location'   => $menu_location,
				'container'        => '',
				'items_wrap'       => '%3$s',
				'fallback_cb'      => false,
			)
		);

		if ( ! $nav_items ) {
			return;
		}

		return '<!-- wp:html -->' . $nav_items . '<!-- /wp:html -->';
	}
endif;
