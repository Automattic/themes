<?php

// ---------- Custom Fonts ---------- //
// This code is adapted directly from Jetpack's Google Fonts module, which depends on the Webfonts API from Gutenberg (and eventually Core)
// https://github.com/Automattic/jetpack/blob/master/projects/plugins/jetpack/modules/google-fonts.php
const BLOCKBASE_GOOGLE_FONTS_LIST = array(
	'arvo' => array( 'font_family' => 'Arvo'),
	'bodoni-moda' => array( 'font_family' => 'Bodoni Moda'),
	'cabin' => array( 'font_family' => 'Cabin'),
	'chivo' => array( 'font_family' => 'Chivo'),
	'courier-prime' => array( 'font_family' => 'Courier Prime'),
	'dm-sans' => array( 'font_family' => 'DM Sans' ),
	'domine' => array( 'font_family' => 'Domine'),
	'eb-garamond' => array( 'font_family' => 'EB Garamond'),
	'fira-sans' => array( 'font_family' => 'Fira Sans'),
	'ibm-plex-sans' => array( 'font_family' => 'IBM Plex Sans'),
	'ibm-plex-mono' => array( 'font_family' => 'IBM Plex Mono'),
	'inter' => array( 'font_family' => 'Inter'),
	'josefin-sans' => array( 'font_family' => 'Josefin Sans'),
	'jost' => array( 'font_family' => 'Jost'),
	'libre-baskerville' => array( 'font_family' => 'Libre Baskerville'),
	'libre-franklin' => array( 'font_family' => 'Libre Franklin'),
	'literata' => array( 'font_family' => 'Literata'),
	'lora' => array( 'font_family' => 'Lora'),
	'merriweather' => array( 'font_family' => 'Merriweather'),
	'montserrat' => array( 'font_family' => 'Montserrat'),
	'newsreader' => array( 'font_family' => 'Newsreader'),
	'nunito' => array( 'font_family' => 'Nunito'),
	'open-sans' => array( 'font_family' => 'Open Sans'),
	'overpass' => array( 'font_family' => 'Overpass'),
	'playfair-display' => array( 'font_family' => 'Playfair Display'),
	'poppins' => array( 'font_family' => 'Poppins'),
	'raleway' => array( 'font_family' => 'Raleway'),
	'red-hat-display' => array( 'font_family' => 'Red Hat Display'),
	'roboto' => array( 'font_family' => 'Roboto'),
	'roboto-slab' => array( 'font_family' => 'Roboto Slab'),
	'rubik' => array( 'font_family' => 'Rubik'),
	'source-sans-pro' => array( 'font_family' => 'Source Sans Pro'),
	'source-serif-pro' => array( 'font_family' => 'Source Serif Pro'),
	'space-mono' => array( 'font_family' => 'Space Mono'),
	'texturina' => array( 'font_family' => 'Texturina'),
	'work-sans' => array( 'font_family' => 'Work Sans'),
);

/**
 * Register a curated selection of Google Fonts.
 *
 * @return void
 */
function blockbase_register_google_fonts() {
	// Use jetpack's implementation of custom google fonts if it is already active
	if ( method_exists( 'Jetpack', 'is_module_active' ) && Jetpack::is_module_active( 'google-fonts' ) ) {
		return;
	}

	if ( ! function_exists( 'wp_register_webfont_provider' ) || ! function_exists( 'wp_register_webfonts' ) ) {
		return;
	}

	wp_register_webfont_provider( 'blockbase-google-fonts', '\Automattic\Jetpack\Fonts\Google_Fonts_Provider' );

	/**
	 * Curated list of Google Fonts.
	 *
	 * @module google-fonts
	 *
	 * @since 10.8
	 *
	 * @param array $fonts_to_register Array of Google Font names to register.
	 */
	$fonts_to_register = apply_filters( 'blockbase_google_fonts_list', BLOCKBASE_GOOGLE_FONTS_LIST );

	foreach ( $fonts_to_register as $font_settings ) {
		$font_family = $font_settings['font_family'];

		wp_register_webfonts(
			array(
				array(
					'font-family'  => $font_family,
					'font-weight'  => '100 900',
					'font-style'   => 'normal',
					'font-display' => 'swap',
					'provider'     => 'blockbase-google-fonts',
				),
				array(
					'font-family'  => $font_family,
					'font-weight'  => '100 900',
					'font-style'   => 'italic',
					'font-display' => 'swap',
					'provider'     => 'blockbase-google-fonts',
				),
			)
		);
	}

	add_filter( 'wp_resource_hints', '\Automattic\Jetpack\Fonts\Utils::font_source_resource_hint', 10, 2 );
	add_filter( 'pre_render_block', '\Automattic\Jetpack\Fonts\Introspectors\Blocks::enqueue_block_fonts', 10, 2 );
	add_action( 'init', '\Automattic\Jetpack\Fonts\Introspectors\Global_Styles::enqueue_global_styles_fonts' );
}
add_action( 'after_setup_theme', 'blockbase_register_google_fonts' );

/**
 * Automatically enqueues default blockbase theme google fonts
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

		if ( $font_slug && isset( BLOCKBASE_GOOGLE_FONTS_LIST[$font_slug] ) ) {
			$font_family = BLOCKBASE_GOOGLE_FONTS_LIST[$font_slug]['font_family'];
			wp_enqueue_webfont( $font_family );
		}
	}
}