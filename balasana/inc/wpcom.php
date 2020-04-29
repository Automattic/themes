<?
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function balasana_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => '767676',
			'text'   => '111111',
			'link'   => '0073aa',
			'url'    => '0073aa',
		);
	}
}
add_action( 'after_setup_theme', 'balasana_wpcom_setup' );
