<?php
/**
 * _Dsgnsystm back compat functionality
 *
 * Prevents _Dsgnsystm from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage _Dsgnsystm
 * @since _Dsgnsystm 1.0.0
 */

/**
 * Prevent switching to _Dsgnsystm on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since _Dsgnsystm 1.0.0
 */
function _dsgnsystm_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', '_dsgnsystm_upgrade_notice' );
}
add_action( 'after_switch_theme', '_dsgnsystm_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * _Dsgnsystm on WordPress versions prior to 4.7.
 *
 * @since _Dsgnsystm 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function _dsgnsystm_upgrade_notice() {
	$message = sprintf( __( '_Dsgnsystm requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', '_dsgnsystm' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since _Dsgnsystm 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function _dsgnsystm_customize() {
	wp_die(
		sprintf(
			__( '_Dsgnsystm requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', '_dsgnsystm' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', '_dsgnsystm_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since _Dsgnsystm 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function _dsgnsystm_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( '_Dsgnsystm requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', '_dsgnsystm' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', '_dsgnsystm_preview' );
