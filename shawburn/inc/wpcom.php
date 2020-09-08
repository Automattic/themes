<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function shawburn_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFFFF', // $config-global--color-background-default
			'border' => 'EAEAEA', // $config-global--color-border-default
			'text'   => '444444', // $config-global--color-foreground-default
			'link'   => '0C80A1', // $config-global--color-primary-default
			'url'    => '0C80A1', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'shawburn_wpcom_setup' );
