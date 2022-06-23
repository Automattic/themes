<?php

if ( ! class_exists( '\WP_Webfonts_Provider' ) ) {
	return;
}

/**
 * Blockbase Font Provider
 */
class Blockbase_Fonts_Provider extends \WP_Webfonts_Provider {

	/**
	 * Font provider ID.
	 *
	 * @var string
	 */
	protected $id = 'blockbase-fonts';

	protected function get_style_css( $family ) {
		$contents = file_get_contents( get_template_directory() . '/assets/fonts/' . $family . '/font-face.css' );
		return str_replace( 'src: url(./', 'src: url(' . get_template_directory_uri() . '/assets/fonts/' . $family . '/', $contents );
	}

	/**
	 * Gets the `@font-face` CSS styles for Blockbase Fonts.
	 *
	 * @return string The `@font-face` CSS.
	 */
	public function get_css() {
		$css  = '';

		foreach ( $this->webfonts as $webfont ) {
			$css .= $this->get_style_css( $webfont['font-family'] );
		}

		return $css;
	}

}

// ---------- Custom Fonts ---------- //
const BLOCKBASE_FONTS_LIST = array(
	'arvo' => array( 'font_family' => 'Arvo'),
	'cabin' => array( 'font_family' => 'Cabin'),
);

/**
 * Register a curated selection of Fonts.
 *
 * @return void
 */
function blockbase_register_fonts() {

	if ( ! function_exists( 'wp_register_webfont_provider' ) || ! function_exists( 'wp_register_webfonts' ) ) {
		return;
	}

	$result = wp_register_webfont_provider( 'blockbase-fonts', 'Blockbase_Fonts_Provider' );

	/**
	 * Curated list of Fonts.
	 */
	$fonts_to_register = apply_filters( 'blockbase_fonts_list', BLOCKBASE_FONTS_LIST );

	foreach ( $fonts_to_register as $font_settings ) {
		$font_family = $font_settings['font_family'];

		wp_register_webfonts(
			array(
				array(
					'font-family'  => $font_family,
					'font-weight'  => '100 900',
					'font-style'   => 'normal',
					'font-display' => 'swap',
					'provider'     => 'blockbase-fonts',
				),
				array(
					'font-family'  => $font_family,
					'font-weight'  => '100 900',
					'font-style'   => 'italic',
					'font-display' => 'swap',
					'provider'     => 'blockbase-fonts',
				),
			)
		);
	}

	//TODO: Could/should this be moved out to here?
	add_filter( 'pre_render_block', '\Automattic\Jetpack\Fonts\Introspectors\Blocks::enqueue_block_fonts', 10, 2 );
	add_action( 'init', '\Automattic\Jetpack\Fonts\Introspectors\Global_Styles::enqueue_global_styles_fonts' );

}
add_action( 'after_setup_theme', 'blockbase_register_fonts' );

/**
 * Automatically enqueues default blockbase theme fonts
 * TODO: Shouldn't these font resources be handled in Introspectors\Global_Styles::enqueue_global_styles_fonts? 
 *
 * @return void
 */
function blockbase_enqueue_default_fonts() {
	if ( ! function_exists( 'wp_enqueue_webfont' ) ) {
		return;
	}

	$font_settings = wp_get_global_settings( array( 'typography', 'fontFamilies' ), 'base' );

	if ( ! isset( $font_settings['theme'] ) ) {
		return;
	}

	foreach( $font_settings['theme'] as $font_setting ) {
		if ( ! isset( $font_setting['fontSlug'] ) ) {
			continue;
		}

		$font_slug = $font_setting['fontSlug'];

		if ( $font_slug && isset( BLOCKBASE_FONTS_LIST[$font_slug] ) ) {
			$font_family = BLOCKBASE_FONTS_LIST[$font_slug]['font_family'];
			wp_enqueue_webfont( $font_family );
		}
	}
}