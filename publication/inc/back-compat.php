<?php
/**
 * Publication back compat functionality
 *
 * Prevents Publication from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package Publication
 * @since Publication 1.0
 */

/**
 * Prevent switching to Publication on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Publication 1.0
 */
function publication_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'publication_upgrade_notice' );
}
add_action( 'after_switch_theme', 'publication_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Publication on WordPress versions prior to 4.1.
 *
 * @since Publication 1.0
 */
function publication_upgrade_notice() {
	$message = sprintf( __( 'Publication requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'publication' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since Publication 1.0
 */
function publication_customize() {
	wp_die( sprintf( __( 'Publication requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'publication' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'publication_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since Publication 1.0
 */
function publication_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Publication requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'publication' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'publication_preview' );
