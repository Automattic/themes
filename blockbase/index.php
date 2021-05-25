<?php
/**
 * Fallback if Gutenberg plugin is not installed.
 *
 * @package  
 * @since 1.0
 * 
 */

get_header();

if ( current_user_can( 'activate_plugins' ) ) {
	echo esc_html__( 'This theme requires the Gutenberg plugin to be installed.', 'blockbase' );
}

get_footer();
