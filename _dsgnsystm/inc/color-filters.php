<?php
/**
 * _Dsgnsystm: Color Filter for overriding the colors schemes in a child theme
 *
 * @package WordPress
 * @subpackage TwentyNineteen
 * @since 1.0
 */

/**
 * Define default color filters.
 */

define( '_DSGNSYSTM_DEFAULT_HUE', 199 );        // H
define( '_DSGNSYSTM_DEFAULT_SATURATION', 100 ); // S
define( '_DSGNSYSTM_DEFAULT_LIGHTNESS', 33 );   // L

define( '_DSGNSYSTM_DEFAULT_SATURATION_SELECTION', 50 );
define( '_DSGNSYSTM_DEFAULT_LIGHTNESS_SELECTION', 90 );
define( '_DSGNSYSTM_DEFAULT_LIGHTNESS_HOVER', 23 );

/**
 * The default hue (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default hue
 */
function _dsgnsystm_get_default_hue() {
	return apply_filters( '_dsgnsystm_default_hue', _DSGNSYSTM_DEFAULT_HUE );
}

/**
 * The default saturation (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default saturation
 */
function _dsgnsystm_get_default_saturation() {
	return apply_filters( '_dsgnsystm_default_saturation', _DSGNSYSTM_DEFAULT_SATURATION );
}

/**
 * The default lightness (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default lightness
 */
function _dsgnsystm_get_default_lightness() {
	return apply_filters( '_dsgnsystm_default_lightness', _DSGNSYSTM_DEFAULT_LIGHTNESS );
}

/**
 * The default saturation (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default saturation selection
 */
function _dsgnsystm_get_default_saturation_selection() {
	return apply_filters( '_dsgnsystm_default_saturation_selection', _DSGNSYSTM_DEFAULT_SATURATION_SELECTION );
}

/**
 * The default lightness (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default lightness selection
 */
function _dsgnsystm_get_default_lightness_selection() {
	return apply_filters( '_dsgnsystm_default_lightness_selection', _DSGNSYSTM_DEFAULT_LIGHTNESS_SELECTION );
}

/**
 * The default lightness hover (as in hsl) used when hovering over links throughout this theme
 *
 * @return number the default lightness hover
 */
function _dsgnsystm_get_default_lightness_hover() {
	return apply_filters( '_dsgnsystm_default_lightness_hover', _DSGNSYSTM_DEFAULT_LIGHTNESS_HOVER );
}

function _dsgnsystm_has_custom_default_hue() {
	return _dsgnsystm_get_default_hue() !== _DSGNSYSTM_DEFAULT_HUE;
}
