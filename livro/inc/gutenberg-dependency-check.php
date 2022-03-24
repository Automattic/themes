<?php

add_action( 'admin_notices', 'show_admin_messages' );

function print_admin_message( $version ) {
	echo '<div id="message" class="error"><p><strong>';
	printf( __( 'The installed theme requires <a href="https://wordpress.org/plugins/gutenberg/">Gutenberg</a> version %s or higher.', 'livro' ), $version );
	echo '</strong></p></div>';
}

function show_admin_messages() {
	$metadata = file_get_contents( get_stylesheet_directory() . '/style.css' );
	preg_match( '/(?<=Requires Gutenberg:).+/', $metadata, $match );
	if ( 0 === sizeof( $match ) ) {
		return; // Gutenberg is not required
	}
	$version = trim( $match[0] );
	if ( ! defined( 'IS_GUTENBERG_PLUGIN' ) ) {
		print_admin_message( $version ); // Gutenberg is not activated
		return;
	}

	// Determine Gutenberg version from defined constant
	if ( defined( 'GUTENBERG_VERSION' ) ) {
		if ( version_compare( GUTENBERG_VERSION, $version ) < 0 ) {
			print_admin_message( $version );
		}
		return;
	}

	// We have confirmed that Gutenberg is installed and activated, however we cannot use the GUTENBERG_VERSION constant
	// (probably because we are in development mode)
	// we'll use the metadata from get_plugins() to determine the version of Gutenberg
	$plugins = get_plugins();
	foreach ( $plugins as $plugin ) {
		if ( 'Gutenberg' === $plugin['Name'] ) {
			if ( version_compare( trim( $plugin['Version'] ), $version ) < 0 ) {
				print_admin_message( $version );
			}
			return;
		}
	}

	// We weren't able to confirm the version, however we do know that it's installed and activated so we'll just hope for the best!
}
