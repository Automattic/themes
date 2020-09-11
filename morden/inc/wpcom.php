<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function morden_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'FFFFFF', // $config-global--color-background-default
			'border' => 'C5C5C5', // $config-global--color-border-default
			'text'   => '303030', // $config-global--color-foreground-default
			'link'   => 'CD2220', // $config-global--color-primary-default
			'url'    => 'CD2220', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'morden_wpcom_setup' );
