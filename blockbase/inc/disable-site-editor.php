<?php

/**
 * Adds a setting to the Gutenberg experiments page to disable the Site Editor.
 */
function add_disable_site_editor_setting() {
	if ( ! is_readable( get_stylesheet_directory() . '/block-templates/index.html' ) ) {
		return;
	}

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

	readd_legacy_admin_links();

	if ( ! site_editor_enabled() ) {
		remove_site_editor_admin_link();
	}
}

function site_editor_enabled() {
	return get_option( 'gutenberg-experiments' ) && array_key_exists( 'universal-theme-disable-site-editor', get_option( 'gutenberg-experiments' ) );
}

/**
 * Adds the Customizer and Widgets menu links back to the Dashboard under themes.
 */
function readd_legacy_admin_links() {
	global $submenu;
	if ( isset( $submenu['themes.php'] ) ) {
		// Add Customize back to the admin menu.
		$customize_url            = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );
		$submenu['themes.php'][6] = array( __( 'Customize', 'blockbase' ), 'customize', esc_url( $customize_url ), '', 'hide-if-no-customize' );

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
					! empty( $menu_item[2] ) &&
					( false !== strpos( $menu_item[2], 'gutenberg-widgets' ) ||
					false !== strpos( $menu_item[2], 'widgets.php' ) )
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

/**
 * Removes the Site Editor link from the admin.
 */
function remove_site_editor_admin_link() {
	global $menu;
	// Remove Site Editor.
	foreach ( $menu as $index => $menu_item ) {
		if ( ! empty( $menu_item[5] ) && false !== strpos( $menu_item[5], 'toplevel_page_gutenberg-edit-site' ) ) {
			$site_editor_index = $index;
		}
	}

	unset( $menu[ $site_editor_index ] );
}

add_action( 'admin_init', 'add_disable_site_editor_setting' );
