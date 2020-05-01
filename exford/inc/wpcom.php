<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function exford_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFFFF', // $config-global--color-background-default
			'border' => 'CCCCCC', // $config-global--color-border-default
			'text'   => '111111', // $config-global--color-foreground-default
			'link'   => '23883D', // $config-global--color-primary-default
			'url'    => '23883D', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'exford_wpcom_setup' );
