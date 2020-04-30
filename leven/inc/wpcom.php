<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function leven_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'f7f7f6', // $config-global--color-background-default
			'border' => 'DDDDDD', // $config-global--color-border-default
			'text'   => '444444', // $config-global--color-foreground-default
			'link'   => 'ff302c', // $config-global--color-primary-default
			'url'    => 'ff302c', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'leven_wpcom_setup' );
