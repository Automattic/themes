<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function rockfield_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'white', // $config-global--color-background-default
			'border' => 'E0E0E0', // $config-global--color-border-default
			'text'   => '444444', // $config-global--color-foreground-default
			'link'   => '222222', // $config-global--color-primary-default
			'url'    => '222222', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'rockfield_wpcom_setup' );
