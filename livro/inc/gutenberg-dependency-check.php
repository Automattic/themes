<?php

add_action('admin_notices', 'showAdminMessages');

function showAdminMessages() {
	$metadata = file_get_contents( get_stylesheet_directory() . '/style.css' );
	preg_match( '/(?<=Requires Gutenberg:).+/', $metadata, $match );
	if( 0 === sizeof($match) ) {
		return;
	}
	$version = $match[0];
	if( is_plugin_active( 'gutenberg/gutenberg.php' ) ) {
		$plugins = get_plugins();
		foreach( $plugins as $plugin ) {
			if( $plugin['Name'] === 'Gutenberg' ) {
				if( version_compare(trim($plugin['Version']), trim($version) ) >= 0 ) {
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