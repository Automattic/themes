<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function rivington_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => '060f29', // $config-global--color-background-default
			'border' => '353a46', // $config-global--color-border-default
			'text'   => 'f2f2f2', // $config-global--color-foreground-default
			'link'   => 'CAAB57', // $config-global--color-primary-default
			'url'    => 'CAAB57', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'rivington_wpcom_setup' );
