<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function brompton_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'E8E4DD', // $config-global--color-background-default
			'border' => 'B9B6B2', // $config-global--color-border-default
			'text'   => '252E36', // $config-global--color-foreground-default
			'link'   => 'C04239', // $config-global--color-primary-default
			'url'    => 'C04239', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'brompton_wpcom_setup' );
