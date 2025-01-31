<?php

/**
 * Removes all the style variations of Blockbase child themes inherited by the parent theme.
 *
 * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response Result to send to the client.
 * @param array $handler Route handler used for the request.
 *
 * @return WP_REST_Response|WP_HTTP_Response|WP_Error|mixed Result to send to the client.
 */
function blockbase_remove_all_style_variations_from_child_themes( $response, $handler ) {
	if ( ! isset( $handler['callback'] ) || ! is_array( $handler['callback'] ) ) {
		return $response;
	}

	$handler_class  = isset( $handler['callback'][0] ) ? $handler['callback'][0] : null;
	$handler_method = isset( $handler['callback'][1] ) ? $handler['callback'][1] : null;
	$opt_out        = wp_get_global_settings( array( 'custom', 'optOutOfParentStyleVariations' ) );

	/*
	 * Prevents Blockbase child themes from being considered child themes in the
	 * `wp/v2/global-styles/themes/:theme/variations` API endpoint, so they don't
	 * inherit the style variations from the parent theme.
	 */
	if ( $opt_out && is_a( $handler_class, 'WP_REST_Global_Styles_Controller' ) && 'get_theme_items' === $handler_method ) {
		add_filter( 'template_directory', 'get_stylesheet_directory' );
	}

	return $response;
}

add_filter( 'rest_request_before_callbacks', 'blockbase_remove_all_style_variations_from_child_themes', 10, 2 );

/**
 * Removes any specific style variation from Blockbase child theme, via theme.json.
 *
 * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response Result to send to the client.
 * @param array                                            $handler  Route handler used for the request.
 * @param WP_REST_Request                                  $request  Request used to generate the response.
 *
 * @return mixed
 */
function blockbase_remove_style_variations_from_child_themes( $response, $handler, $request ) {
	if ( ! isset( $handler['callback'] ) || ! is_array( $handler['callback'] ) ) {
		return $response;
	}

	$handler_class    = isset( $handler['callback'][0] ) ? $handler['callback'][0] : null;
	$handler_method   = isset( $handler['callback'][1] ) ? $handler['callback'][1] : null;
	$remove_variations = wp_get_global_settings( array( 'custom', 'excludedParentStyleVariations' ) );

	if ( is_a( $handler_class, 'WP_REST_Global_Styles_Controller_Gutenberg' ) && 'get_theme_items' === $handler_method && ! empty( $remove_variations ) ) {
		$i = 0;
		foreach( $response->data as $element ) {
			if ( in_array( $element['title'], $remove_variations ) ) {
				unset( $response->data[ $i ] );
			}
			$i++;
		}
		// Reset array to avoid errors due to items being removed.
		$response->data = array_values( $response->data );
	}
	return $response;
}

add_filter( 'rest_request_after_callbacks', 'blockbase_remove_style_variations_from_child_themes', 10, 3 );
