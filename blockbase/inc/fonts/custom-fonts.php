<?php

function get_style_css( $slug ) {
	$font_face_file = get_template_directory() . '/assets/fonts/' . $slug . '/font-face.css';
	if( ! file_exists( $font_face_file ) ) {
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

	$global_styles = wp_get_global_styles();

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

	return $found_webfonts;
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
 * Provide fonts used in global styles settings.
 *
 * @return void
 */
function enqueue_global_styles_fonts() {

	if ( is_admin() ) {
		$fonts = collect_fonts_from_blockbase();
	} else {
		$fonts = collect_fonts_from_global_styles();
	}
	enqueue_font_styles( $fonts );
}

function enqueue_font_styles( $fonts ) {
	$font_css = '';

	foreach ( $fonts as $font ) {
		$font_css .= get_style_css($font);
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

function collect_fonts_from_blockbase() {
	return ['arvo', 'cabin'];
}

add_action( 'init', 'enqueue_global_styles_fonts' );
add_action( 'admin_init', 'enqueue_editor_global_styles_fonts' );