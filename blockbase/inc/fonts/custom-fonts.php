<?php

/**
 * Get the CSS containing font_face values for a given slug
 * 
 * @return string String of CSS
 */
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

	return array_unique($found_webfonts);
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
 * Build a list of all font slugs provided by theme from theme.json
 * 
 * @return array Collection of all font slugs defined in the theme.json file
 */
function collect_fonts_from_blockbase() {
	$font_family_slugs = Array();
	$global_styles = wp_get_global_styles();
	$data = WP_Theme_JSON_Resolver::get_merged_data()->get_raw_data();
	$font_families = $data['settings']['typography']['fontFamilies']['theme'];

	foreach( $font_families as $font_family ) {
		$font_family_slugs[] = $font_family['slug'];
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

/**
 * Enqueue all of the fonts provided by Blockbase for FSE use
 */
function enqueue_fse_font_styles( $fonts ) {
	$fonts = collect_fonts_from_blockbase();
	$font_css = '';

	foreach ( $fonts as $font ) {
		$font_css .= get_style_css($font);
	}

	wp_enqueue_style( 'wp-block-library' );
	wp_add_inline_style( 'wp-block-library', $font_css );
}

add_action( 'init', 'enqueue_global_styles_fonts' );
add_action( 'admin_init', 'enqueue_fse_font_styles' );