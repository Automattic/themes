<?php

// Use an early priority to migrate legacy font settings before registering fonts
add_action( 'after_setup_theme', 'migrate_blockbase_custom_fonts', 0 );

function migrate_blockbase_custom_fonts() {

	$heading_font_slug = null;
	$body_font_slug = null;

	$font_settings = wp_get_global_settings( array( 'typography', 'fontFamilies' ) );

	// Extract font slugs from legacy data structure.  
	// Look first for fonts customized via Customizer, then for fonts configured in the child theme.json "the old way"
	if ( isset( $font_settings['custom'] ) && is_array( $font_settings['custom'] ) ) {
		$font_stuff = $font_settings['custom'];
	} else {
		$font_stuff = $font_settings['theme'];
	}

	foreach ( $font_stuff as $font_setting ) {
		if ( strpos( $font_setting['slug'], 'heading' ) !== false && array_key_exists('fontSlug', $font_setting) ) {
			$heading_font_slug = $font_setting['fontSlug'];
		}

		if ( strpos( $font_setting['slug'], 'body' ) !== false && array_key_exists('fontSlug', $font_setting) ) {
			$body_font_slug = $font_setting['fontSlug'];
		}
	}

	if( ! $body_font_slug && ! $heading_font_slug ) {
		//nothing to convert
		return;
	}

	// Get the user's global styles CPT id
	$user_custom_post_type_id       = WP_Theme_JSON_Resolver::get_user_global_styles_post_id();
	$global_styles_controller       = new WP_REST_Global_Styles_Controller();
	$global_styles                  = fetch_global_styles( $user_custom_post_type_id, $global_styles_controller );
 
	// converts data to array (in some cases settings and styles are objects insted of arrays)
	$new_settings = (array) $global_styles->data['settings'];
	$new_styles   = (array) $global_styles->data['styles'];

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

	// Set new typography settings (copy from Blockbase theme.json file)
	$parent_theme_json_data = json_decode( file_get_contents( get_template_directory() . '/theme.json'), true );
	$parent_theme           = new WP_Theme_JSON( $parent_theme_json_data );
	$parent_font_families   = $parent_theme->get_data()['settings']['typography']['fontFamilies'];
	$new_settings['typography']['fontFamilies'] = $parent_font_families;

	update_global_styles( $new_settings, $new_styles, $user_custom_post_type_id, $global_styles_controller );
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
function update_global_styles( $new_settings, $new_styles, $user_custom_post_type_id, $global_styles_controller ) {
	$update_request = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' );
	$update_request->set_param( 'id', $user_custom_post_type_id );
	$update_request->set_param( 'settings', $new_settings );
	$update_request->set_param( 'styles', $new_styles );

	$global_styles_controller->update_item( $update_request );
	delete_transient( 'global_styles' );
	delete_transient( 'global_styles_' . get_stylesheet() );
	delete_transient( 'gutenberg_global_styles' );
	delete_transient( 'gutenberg_global_styles_' . get_stylesheet() );
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