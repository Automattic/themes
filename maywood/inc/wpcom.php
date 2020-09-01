<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function maywood_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFFFF', // $config-global--color-background-default
			'border' => 'CCCCCC', // $config-global--color-border-default
			'text'   => '181818', // $config-global--color-foreground-default
			'link'   => '897248', // $config-global--color-primary-default
			'url'    => '897248', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'maywood_wpcom_setup' );
