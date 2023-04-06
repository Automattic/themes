<?php

/**
 * Removes the style variations of Blockbase child themes inherited by the parent theme.
 *
 * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response Result to send to the client.
 *                                                                   Usually a WP_REST_Response or WP_Error.
 * @param array                                            $handler  Route handler used for the request.
 *
 * @return WP_REST_Response Filtered response without the inherited style variations.
 */
function blockbase_remove_style_variations_from_child_themes( $response, $handler ) {
	if ( ! $response instanceof WP_REST_Response ) {
		return $response;
	}

	if ( ! isset( $handler['callback'] ) || ! is_array( $handler['callback'] ) ) {
		return $response;
	}

	$handler_class  = isset( $handler['callback'][0] ) ? $handler['callback'][0] : null;
	$handler_method = isset( $handler['callback'][1] ) ? $handler['callback'][1] : null;
	if ( ! is_a( $handler_class, 'WP_REST_Global_Styles_Controller' ) || 'get_theme_items' !== $handler_method ) {
		return $response;
	}

	$base_directory     = get_stylesheet_directory() . '/styles';
	$template_directory = get_template_directory() . '/styles';
	if ( ! is_dir( $template_directory ) || $template_directory === $base_directory ) {
		return $response;
	}

	$variations = $response->get_data();
	if ( ! is_array( $variations ) ) {
		return $response;
	}

	$variation_titles_parent = array();
	$files_parent            = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $template_directory ) );
	$variation_files_parent  = iterator_to_array( new RegexIterator( $files_parent, '/^.+\.json$/i', RecursiveRegexIterator::GET_MATCH ) );
	foreach ( $variation_files_parent as $path => $file ) {
		$decoded_file = wp_json_file_decode( $path, array( 'associative' => true ) );
		if ( ! is_array( $decoded_file ) ) {
			continue;
		}

		if ( empty( $decoded_file['title'] ) ) {
			$variation_title_parent = basename( $path, '.json' );
		} else {
			// phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralText,WordPress.WP.I18n.NonSingularStringLiteralDomain
			$variation_title_parent = translate_with_gettext_context( $decoded_file['title'], 'Style variation name', wp_get_theme()->get( 'TextDomain' ) );
		}
		$variation_titles_parent[] = $variation_title_parent;
	}

	$variations = array_filter(
		$variations,
		function( $variation ) use ( $variation_titles_parent ) {
			return ! in_array( $variation['title'], $variation_titles_parent, true );
		}
	);
	$response->set_data( $variations );
	return $response;
}
add_filter( 'rest_request_after_callbacks', 'blockbase_remove_style_variations_from_child_themes', 10, 2 );
