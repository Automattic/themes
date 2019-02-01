<?php
/**
 * WPcom Compatibility File.
 *
 * @link https://wordpress.com/
 *
 * @package Calm_business
 */
/**
 * Filter default color from Twenty Nineteen.
 */
function calm_business_primary_color_hue() {
	return 43;
}
add_filter( 'twentynineteen_default_hue', 'calm_business_primary_color_hue' );

function calm_business_primary_color_saturation() {
	return 89;
}
add_filter( 'twentynineteen_default_saturation', 'calm_business_primary_color_saturation' );

function calm_business_primary_color_lightness() {
	return 29;
}
add_filter( 'twentynineteen_default_lightness', 'calm_business_primary_color_lightness' );