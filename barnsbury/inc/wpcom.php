<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function barnsbury_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFDF6', // $config-global--color-background-default
			'border' => '3C2323', // $config-global--color-border-default
			'text'   => '3C2323', // $config-global--color-foreground-default
			'link'   => '20603C', // $config-global--color-primary-default
			'url'    => '20603C', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'barnsbury_wpcom_setup' );
