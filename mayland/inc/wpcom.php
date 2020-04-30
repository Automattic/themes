<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function mayland_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff', // $config-global--color-background-default
			'border' => 'e6e6e6', // $config-global--color-border-default
			'text'   => '010101', // $config-global--color-foreground-default
			'link'   => '000000', // $config-global--color-primary-default
			'url'    => '000000', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'mayland_wpcom_setup' );
