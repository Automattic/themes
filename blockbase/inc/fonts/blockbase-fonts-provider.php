<?php

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
	 * Gets the `@font-face` CSS styles for enqueued Blockbase Fonts.
	 *
	 * @return string The `@font-face` CSS.
	 */
	public function get_css() {
		$css = '';

		foreach ( $this->webfonts as $webfont ) {
			$font_slug = \WP_Webfonts::get_font_slug( $webfont['font-family'] );
			$css      .= $this->get_style_css( $font_slug );
		}

		return $css;
	}

}

function provider_enqueue_global_styles_fonts() {
	if ( is_admin() || ! function_exists( 'wp_enqueue_webfont' ) ) {
		return;
	}

	$global_styles_fonts = collect_fonts_from_global_styles();

	foreach ( $global_styles_fonts as $font ) {
		$font_is_registered = is_font_family_registered( $font );
		if ( $font_is_registered ) {
			wp_enqueue_webfont( $font );
		}
	}
}

function provider_enqueue_block_fonts( $content, $parsed_block ) {
	if ( ! is_admin() && isset( $parsed_block['attrs']['fontFamily'] ) ) {

		$font               = $parsed_block['attrs']['fontFamily'];
		$font_is_registered = is_font_family_registered( $font );

		if ( $font_is_registered ) {
			wp_enqueue_webfont( $font );
		}
	}

	return $content;
}

/**
 * Check if a font family is registered (verifying that it can be enqueued).
 *
 * This function will not be needed if/when WP_Webfonts provides this functionality.
 *
 * @link https://github.com/WordPress/gutenberg/pull/39988
 * @link https://github.com/WordPress/gutenberg/blob/e94fffae0684aa5a6dc370ce3eba262cb77071d9/lib/experimental/class-wp-webfonts.php#L217
 *
 * @param string $font_family_name Name of font family.
 * @return boolean|void Whether the font family is registered, or void if WP_Webfonts is not available.
 */
function is_font_family_registered( $font_slug ) {
	if ( ! function_exists( 'wp_webfonts' ) ) {
		return;
	}

	$wp_webfonts = wp_webfonts();

	return isset( $wp_webfonts->get_registered_webfonts()[ $font_slug ] );
}

function register_blockbase_fonts_provider() {

	if ( ! function_exists( 'wp_register_webfont_provider' ) ) {
		return;
	}

	$settings = gutenberg_get_global_settings();

	// Bail out early if there are no settings for webfonts.
	if ( empty( $settings['typography'] ) || empty( $settings['typography']['fontFamilies'] ) ) {
		return;
	}

	wp_register_webfont_provider( 'blockbase-fonts', 'Blockbase_Fonts_Provider' );

	foreach ( $settings['typography']['fontFamilies'] as $font_families ) {
		foreach ( $font_families as $font ) {

			// NOTE: Implemented correctly this would then operate on a `fontFace` collection.
			// The format of the fontface in Blockbase's theme.json is abnormal so that CORE doesn't try to process
			// them as local files (and allowing Blockbase to manage that itself).  Therefore 'provider' is defined
			// incorrectly.  This should be fixable in WP 6.1

			// Skip if the provider isn't blockbase-fonts
			if ( ! array_key_exists( 'provider', $font ) || ! 'blockbase-fonts' === $font['provider'] ) {
				continue;
			}

			$font['fontFamily'] = $font['name'];
			unset( $font['name'] );

			// Convert keys to kebab-case.
			foreach ( $font as $property => $value ) {
				$kebab_case          = _wp_to_kebab_case( $property );
				$font[ $kebab_case ] = $value;
				if ( $kebab_case !== $property ) {
					unset( $font[ $property ] );
				}
			}

			wp_webfonts()->register_webfont( $font );
		}
	}

}
add_action( 'init', 'register_blockbase_fonts_provider' );
add_action( 'init', 'provider_enqueue_global_styles_fonts' );

// NOTE: As far as I can tell you can't assign a font-family at the individual block level
// which is what this logic is for.  This may someday be necessary but I don't believe it is now.
// add_filter( 'pre_render_block', 'provider_enqueue_block_fonts', 10, 2 );
