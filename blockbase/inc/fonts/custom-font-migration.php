<?php

add_action( 'init', 'migrate_blockbase_custom_fonts', 99 );

function migrate_blockbase_custom_fonts() {
	// The data has already been transformed
	if ( get_theme_mod( 'blockbase_legacy_font_settings' ) ) {
		return;
	}

	$heading_font_slug = null;
	$body_font_slug    = null;

	// Here we must use gutenberg_get_global_* because it introduces clean_cached_data() which we
	// need to leverage as we are modifying the values of global styles settings and styles on page load.
	if ( function_exists( 'gutenberg_get_global_settings' ) ) {
		$font_families = gutenberg_get_global_settings( array( 'typography', 'fontFamilies' ) );
	} else {
		$font_families = wp_get_global_settings( array( 'typography', 'fontFamilies' ) );
	}

	if ( isset( $font_families['custom'] ) && is_array( $font_families['custom'] ) ) {
		$font_families = $font_families['custom'];
	} else {
		// No Customizer font settings found. Mark as transformed and hide the Customizer UI for fonts.
		set_theme_mod( 'blockbase_legacy_font_settings', true );
		return;
	}

	// Look first for fonts customized via Customizer, then for fonts configured in the child theme.json "the old way"
	// Also count fonts registerd to the blockbase font provider
	foreach ( $font_families as $font_family ) {
		if ( strpos( $font_family['slug'], 'heading' ) !== false && array_key_exists( 'fontSlug', $font_family ) ) {
			$heading_font_slug = $font_family['fontSlug'];
		}
		if ( strpos( $font_family['slug'], 'body' ) !== false && array_key_exists( 'fontSlug', $font_family ) ) {
			$body_font_slug = $font_family['fontSlug'];
		}
	}

	if ( ! $body_font_slug && ! $heading_font_slug ) {
		//nothing to convert
		return;
	}

	$theme_user_data = WP_Theme_JSON_Resolver::get_user_data()->get_raw_data();

	$new_settings = array();
	$new_styles   = array();

	if ( array_key_exists( 'settings', $theme_user_data ) ) {
		$new_settings = $theme_user_data['settings'];
	}
	if ( array_key_exists( 'styles', $theme_user_data ) ) {
		$new_styles = $theme_user_data['styles'];
	}

	if ( $body_font_slug ) {
		$new_styles = array_merge(
			$new_styles,
			array(
				'typography' => array(
					'fontFamily' => "var:preset|font-family|$body_font_slug",
				),
			)
		);
	}

	if ( $heading_font_slug ) {
		$new_styles = array_merge(
			$new_styles,
			array(
				'blocks' => array(
					'core/post-title' => array(
						'typography' => array(
							'fontFamily' => "var:preset|font-family|$heading_font_slug",
						),
					),
					'core/heading'    => array(
						'typography' => array(
							'fontFamily' => "var:preset|font-family|$heading_font_slug",
						),
					),
				),
			)
		);
	}

	if ( $heading_font_slug || $body_font_slug ) {
		unset( $new_settings['typography']['fontFamilies'] );
	}

	update_global_styles( $new_settings, $new_styles );
	set_theme_mod( 'blockbase_legacy_font_settings', true );
}

/**
 * Updates the global styles CPT.
 *
 * @param array  $new_settings New global styles to update.
 * @param array  $new_styles New global styles settings to update.
 * @param int    $user_custom_post_type_id ID of global styles CPT.
 * @param object $global_styles_controller Controller that handles REST requests for global styles.
 *
 * @return void
 */
function update_global_styles( $new_settings, $new_styles ) {
	// Get the user's global styles CPT id
	$user_custom_post_type_id = WP_Theme_JSON_Resolver::get_user_global_styles_post_id();
	$global_styles_controller = new WP_REST_Global_Styles_Controller();

	$update_request = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' );
	$update_request->set_param( 'id', $user_custom_post_type_id );
	$update_request->set_param( 'settings', $new_settings );
	$update_request->set_param( 'styles', $new_styles );

	$global_styles_controller->update_item( $update_request );

	// Ideally the call to update_item would delete all of the appropriate transients and caches
	delete_transient( 'global_styles' );
	delete_transient( 'global_styles_' . get_stylesheet() );
	delete_transient( 'gutenberg_global_styles' );
	delete_transient( 'gutenberg_global_styles_' . get_stylesheet() );

	if ( class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
		WP_Theme_JSON_Resolver_Gutenberg::clean_cached_data();
	}
}

/**
 * Retrieves the global styles cpt.
 *
 * @param int    $user_custom_post_type_id ID of global styles CPT.
 * @param object $global_styles_controller Controller that handles REST requests for global styles.
 *
 * @return array
 */
function fetch_global_styles( $user_custom_post_type_id, $global_styles_controller ) {
	$get_request = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' );
	$get_request->set_param( 'id', $user_custom_post_type_id );
	$global_styles = $global_styles_controller->get_item( $get_request );

	return $global_styles;
}
