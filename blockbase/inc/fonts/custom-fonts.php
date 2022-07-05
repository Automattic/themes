<?php

// Font settings deprecation message
require get_template_directory() . '/inc/customizer/wp-customize-fonts.php';

// Font Migration
require get_template_directory() . '/inc/fonts/custom-font-migration.php';

/**
 * Get the CSS containing font_face values for a given slug
 *
 * @return string String of CSS
 */
function get_style_css( $slug ) {
	$font_face_file = get_template_directory() . '/assets/fonts/' . $slug . '/font-face.css';
	if ( ! file_exists( $font_face_file ) ) {
		return '';
	}
	$contents = file_get_contents( $font_face_file );
	return str_replace( 'src: url(./', 'src: url(' . get_template_directory_uri() . '/assets/fonts/' . $slug . '/', $contents );
}

/**
 * Collect fonts set in Global Styles settings.
 *
 * @return array Font faces from Global Styles settings.
 */
function collect_fonts_from_global_styles() {

	// NOTE: We have to use gutenberg_get_global_styles() here due to the potential changes to Global Styles on page load happening in font migration.
	// Since core users don't have anything to migrate we can use core get_styles
	if ( function_exists( 'gutenberg_get_global_styles' ) ) {
		$global_styles = gutenberg_get_global_styles();
	} else {
		$global_styles = wp_get_global_styles();
	}

	$found_webfonts = array();

	// Look for fonts in block presets...
	if ( isset( $global_styles['blocks'] ) ) {
		foreach ( $global_styles['blocks'] as $setting ) {
			$font_slug = extract_font_slug_from_setting( $setting );

			if ( $font_slug ) {
				$found_webfonts[] = $font_slug;
			}
		}
	}

	// Look for fonts in HTML element presets...
	if ( isset( $global_styles['elements'] ) ) {
		foreach ( $global_styles['elements'] as $setting ) {

			// die(json_encode($global_styles));
			// NOTE: It seems that the Global Styles assignment of fonts writes the font family string rather than the
			// global styles shorthand that is assigned to the body.  This should be confirmed and reported if it isn't already.
			$font_slug = extract_font_slug_from_setting( $setting );

			if ( $font_slug ) {
				$found_webfonts[] = $font_slug;
			}
		}
	}

	// Check if a global typography setting was defined.
	$font_slug = extract_font_slug_from_setting( $global_styles );

	if ( $font_slug ) {
		$found_webfonts[] = $font_slug;
	}

	return array_unique( $found_webfonts );
}

/**
 * Extract the font family slug from a settings array.
 *
 * @param array $setting The settings object.
 *
 * @return string|null
 */
function extract_font_slug_from_setting( $setting ) {
	if ( ! isset( $setting['typography']['fontFamily'] ) ) {
		return null;
	}

	$font_family = $setting['typography']['fontFamily'];

	// Full string: var(--wp--preset--font-family--slug).
	// We do not care about the origin of the font, only its slug.
	preg_match( '/font-family--(?P<slug>.+)\)$/', $font_family, $matches );

	if ( isset( $matches['slug'] ) ) {
		return $matches['slug'];
	}

	// Full string: var:preset|font-family|slug
	// We do not care about the origin of the font, only its slug.
	preg_match( '/font-family\|(?P<slug>.+)$/', $font_family, $matches );

	if ( isset( $matches['slug'] ) ) {
		return $matches['slug'];
	}

	return $font_family;
}

/**
 * Build a list of all font slugs provided by Blockbase from theme.json
 *
 * @return array Collection of all font slugs defined in the theme.json file
 */
function collect_fonts_from_blockbase() {
	$font_family_slugs = array();

	// It would be nice to be able to get the global settings of the PARENT theme.
	// As it stands we can only get the values of the THEME but those are parent/child combined
	// The only sure way to get the values is directly from the file.
	if ( function_exists( 'gutenberg_get_global_settings' ) ) {
		$font_families = gutenberg_get_global_settings( array( 'typography', 'fontFamilies' ) );
	} else {
		$font_families = wp_get_global_settings( array( 'typography', 'fontFamilies' ) );
	}
	if ( isset( $font_families['custom'] ) && is_array( $font_families['custom'] ) ) {
		$font_families = $font_families['custom'];
	} else {
		$font_families = $font_families['theme'];
	}

	foreach ( $font_families as $font ) {
		// Only pick it up if we're claiming it as ours to manage
		if ( array_key_exists( 'provider', $font ) && 'blockbase-fonts' === $font['provider'] ) {
			$font_family_slugs[] = $font['slug'];
		}
	}

	return $font_family_slugs;
}

/**
 * Enqeue all of the fonts used in global styles settings.
 *
 * @return void
 */
function enqueue_global_styles_fonts() {
	$fonts;
	$font_css = '';

	if ( is_admin() ) {
		$fonts = collect_fonts_from_blockbase();
	} else {
		$fonts = collect_fonts_from_global_styles();
	}

	foreach ( $fonts as $font ) {
		$font_css .= get_style_css( $font );
	}

	// Bail out if there are no styles to enqueue.
	if ( '' === $font_css ) {
		return;
	}

	// Enqueue the stylesheet.
	wp_register_style( 'blockbase_font_faces', '' );
	wp_enqueue_style( 'blockbase_font_faces' );

	// Add the styles to the stylesheet.
	wp_add_inline_style( 'blockbase_font_faces', $font_css );

}

/**
 * Enqueue all of the fonts provided by Blockbase for FSE use
 */
function enqueue_fse_font_styles( $fonts ) {
	$fonts    = collect_fonts_from_blockbase();
	$font_css = '';

	foreach ( $fonts as $font ) {
		$font_css .= get_style_css( $font );
	}

	wp_enqueue_style( 'wp-block-library' );
	wp_add_inline_style( 'wp-block-library', $font_css );
}

// If we have a Webfonts Provider then leverage a Custom Fonts Provider
// Otherwise we'll enqueu the necessary font faces manually.
if ( class_exists( '\WP_Webfonts_Provider' ) ) {
	require get_template_directory() . '/inc/fonts/blockbase-fonts-provider.php';
} else {
	add_action( 'init', 'enqueue_global_styles_fonts' );
	add_action( 'admin_init', 'enqueue_fse_font_styles' );
}
