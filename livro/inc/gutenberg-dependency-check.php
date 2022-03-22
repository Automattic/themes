<?php

add_action( 'admin_notices', 'show_admin_messages' );

function show_admin_messages() {
	$metadata = file_get_contents( get_stylesheet_directory() . '/style.css' );
	preg_match( '/(?<=Requires Gutenberg:).+/', $metadata, $match );
	if ( 0 === sizeof( $match ) ) {
		return;
	}
	$version = $match[0];
	if( defined( 'IS_GUTENBERG_PLUGIN' ) && defined( 'GUTENBERG_VERSION' ) ) {
		if ( version_compare( GUTENBERG_VERSION, trim( $version ) ) >= 0 ) {
			return;
		}
	}
		$plugins = get_plugins();
		foreach ( $plugins as $plugin ) {
			if ( 'Gutenberg' === $plugin['Name'] ) {
				if ( version_compare( trim( $plugin['Version'] ), trim( $version ) ) >= 0 ) {
					return;
				}
				break;
			}
		}
	}

	echo '<div id="message" class="error"><p><strong>';
	printf( __( 'The installed theme requires <a href="https://wordpress.org/plugins/gutenberg/">Gutenberg</a> version %s or higher.', 'livro' ), $version );
	echo '</strong></p></div>';
}
