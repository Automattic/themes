<?php

/**
 * Removes the style variations of Blockbase child themes inherited by the parent theme.
 *
 * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response Result to send to the client.
 * @param array $handler Route handler used for the request.
 *
 * @return WP_REST_Response|WP_HTTP_Response|WP_Error|mixed Result to send to the client.
 */
function blockbase_remove_style_variations_from_child_themes( $response, $handler ) {
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

add_filter( 'rest_request_before_callbacks', 'blockbase_remove_style_variations_from_child_themes', 10, 2 );
