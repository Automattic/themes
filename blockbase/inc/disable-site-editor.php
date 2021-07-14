<?php

/**
 * Adds a setting to the Gutenberg experiments page to disable the Site Editor.
 */
function blockbase_disable_site_editor() {
	if ( ! is_readable( get_stylesheet_directory() . '/block-templates/index.html' ) ) {
		return;
	}

	add_action( 'admin_init', 'blockbase_add_settings_field' );
	add_action( 'admin_init', 'blockbase_readd_legacy_admin_links' );

	if ( ! site_editor_enabled() ) {
		add_action( 'admin_init', 'blockbase_remove_site_editor_admin_link' );
		add_action( 'admin_bar_menu', 'blockbase_remove_site_editor_link', 50 );
	}
}

function blockbase_add_settings_field() {
	add_settings_field(
		'universal-theme-disable-site-editor',
		__( 'Site Editor', 'gutenberg' ),
		'gutenberg_display_experiment_field',
		'gutenberg-experiments',
		'gutenberg_experiments_section',
		array(
			'label' => __( 'Enable Site Editor', 'gutenberg' ),
			'id'    => 'universal-theme-disable-site-editor',
		)
	);
}

/**
 * Adds the Customizer and Widgets menu links back to the Dashboard under themes.
 */
function blockbase_readd_legacy_admin_links() {
	global $submenu;
	if ( isset( $submenu['themes.php'] ) ) {
		// Add Customize back to the admin menu.
		$customize_url            = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );
		$customizer_key = 6;
		if ( defined( 'IS_WPCOM' ) ) {
			$customizer_key = 1;
		}
		$submenu['themes.php'][ $customizer_key ] = array( __( 'Customize' ), 'customize', esc_url( $customize_url ), '', 'hide-if-no-customize' );

		if (
			function_exists( 'gutenberg_use_widgets_block_editor' ) &&
			gutenberg_use_widgets_block_editor() &&
			! function_exists( 'wp_use_widgets_block_editor' ) &&
			current_theme_supports( 'widgets' )
		) {
			// Find Widgets menu
			$has_widgets_menu = false;
			foreach ( $submenu['themes.php'] as $index => $menu_item ) {
				if (
					! empty( $menu_item[ 2 ] ) &&
					( false !== strpos( $menu_item[ 2 ], 'gutenberg-widgets' ) ||
					false !== strpos( $menu_item[ 2 ], 'widgets.php' ) )
				) {
					$has_widgets_menu = true;
				}
			}

			// Add Widgets back to the admin menu.
			if ( ! $has_widgets_menu ) {
				add_theme_page(
					__( 'Widgets', 'gutenberg' ),
					__( 'Widgets', 'gutenberg' ),
					'edit_theme_options',
					'gutenberg-widgets',
					'the_gutenberg_widgets',
					2
				);
			}
		}

		ksort( $submenu['themes.php'] );
	}
}

function is_site_editor_menu_item( $menu_item ) {
	if ( ! empty( $menu_item[ 2 ] ) ) {
		return false !== strpos( $menu_item[ 2 ], 'gutenberg-edit-site' ) || false !== strpos( $menu_item[ 2 ], 'site-editor' );
	}
}

function site_editor_enabled() {
	return get_option( 'gutenberg-experiments' ) && array_key_exists( 'universal-theme-disable-site-editor', get_option( 'gutenberg-experiments' ) );
}

/**
 * Removes the Site Editor link from the admin.
 */
function blockbase_remove_site_editor_admin_link() {
	global $menu;

	// Remove Site Editor.
	foreach ( $menu as $index => $menu_item ) {
		if ( is_site_editor_menu_item( $menu_item ) ) {
			$site_editor_index = $index;
		}
	}

	if ( ! empty( $site_editor_index ) ) {
		unset( $menu[ $site_editor_index ] );
	}
}

/**
 * Removes Site Editor adminbar item.
 *
 * @param WP_Admin_Bar $wp_admin_bar The admin-bar instance.
 */
function blockbase_remove_site_editor_link( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'site-editor' );
}

add_action( 'init', 'blockbase_disable_site_editor' );
