<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function dalston_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFFFF', // $config-global--color-background-default
			'border' => 'CCCCCC', // $config-global--color-border-default
			'text'   => '1e1e1e', // $config-global--color-foreground-default
			'link'   => '0073AA', // $config-global--color-primary-default
			'url'    => '0073AA', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'dalston_wpcom_setup' );
