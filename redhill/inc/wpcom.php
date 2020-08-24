<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function redhill_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'white', // $config-global--color-background-default
			'border' => 'DDDDDD', // $config-global--color-border-default
			'text'   => '222222', // $config-global--color-foreground-default
			'link'   => 'CA2017', // $config-global--color-primary-default
			'url'    => 'CA2017', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'redhill_wpcom_setup' );
