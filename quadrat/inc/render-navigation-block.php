<?php
if ( ! function_exists( 'render_navigation_block' ) ) :

	function render_navigation_block( $menu_location ) {
		if ( ! has_nav_menu( $menu_location ) ) {
			return;
		}

		$has_primary_nav_items = wp_nav_menu(
			array(
				'theme_location' => $menu_location,
				'fallback_cb'    => false,
				'echo'           => false,
			)
		);

		if ( ! $has_primary_nav_items ) {
			return;
		}

		$menu_markup  = '<!-- wp:html -->';
		$menu_markup .= wp_nav_menu(
			array(
				'echo'           => false,
				'theme_location' => $menu_location,
				'container'      => '',
				'items_wrap'     => '%3$s',
				'fallback_cb'    => false,
			)
		);
		$menu_markup .= '<!-- /wp:html -->';

		return $menu_markup;
	}
endif;
