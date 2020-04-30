<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function coutoire_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'white', // $config-global--color-background-default
			'border' => 'DDDDDD', // $config-global--color-border-default
			'text'   => '444444', // $config-global--color-foreground-default
			'link'   => 'black', // $config-global--color-primary-default
			'url'    => 'black', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'coutoire_wpcom_setup' );
