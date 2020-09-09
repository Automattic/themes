<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function stratford_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFFFF', // $config-global--color-background-default
			'border' => 'DDDDDD', // $config-global--color-border-default
			'text'   => '74767e', // $config-global--color-foreground-default
			'link'   => '2c313f', // $config-global--color-primary-default
			'url'    => '2c313f', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'stratford_wpcom_setup' );
