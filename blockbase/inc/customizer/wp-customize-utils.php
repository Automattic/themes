<?php

/**
 *
 * Assign a value to an object at the given location.  Create the nested objects if they aren't already available.
 *
 * @param   object  $target The object to assign the value to
 * @param   array   $array  The array describing the location of the property to update
 * @param   object  $value  The value to assign
 * @return  object          The modified $target object with $value assigned where $array describes
 *
 */
function set_settings_array( $target, $array, $value ) {
	$key     = array_shift( $array );
	$current =& $target;
	while ( 0 < sizeof( $array ) ) {
		if ( ! property_exists( $current, $key ) ) {
			$current->{ $key } = (object) array();
		}
		$current =& $current->{ $key };

		// Cast to an object in the case where it's been set as an array.
		$current = (object) $current;

		$key     = array_shift( $array );
	}
	$current->{ $key } = $value;
	return $target;
}

/**
 *
 * Get a value from an object at the given location.
 *
 * @param   array   $array  The array describing the location of the property to update.
 * @param   object  $object The object.
 * @return  object          The value at the location.
 *
 */
function get_settings_array( $array, $object ) {
	foreach( $array as $property ) {
		$object = $object[ $property ];
	}

	return $object;
}

// These functions are borrowed from the colorline lib
function hex_to_rgb( $hex ) {
	return sscanf( str_replace( '#', '', $hex), '%02X%02X%02X' );
}

// RGB values: 0-255
// LUM values: 0-1
function rgb_to_lum( $rgb ) {
	list( $r, $g, $b ) = $rgb;
	return sqrt( 0.241 * $r * $r + 0.691 * $g * $g + 0.068 * $b * $b ) / 255;
}

// RGB values:    0-255, 0-255, 0-255
// HSV values:    0-360, 0-100, 0-100, 0-100
function rgb_to_hsvl( $rgb ) {
	$l                 = rgb_to_lum( $rgb );
	list( $r, $g, $b ) = $rgb;
	$r                 = $r / 255;
	$g                 = $g / 255;
	$b                 = $b / 255;
	$max_rgb           = max( $r, $g, $b );
	$min_rgb           = min( $r, $g, $b );
	$chroma            = $max_rgb - $min_rgb;
	$v                 = 100 * $max_rgb;
	if ( $chroma > 0 ) {
		$s = 100 * ( $chroma / $max_rgb );
		if ( $r === $min_rgb ) {
			$h = 3 - ( ( $g - $b ) / $chroma );
		} elseif ( $b === $min_rgb ) {
			$h = 1 - ( ( $r - $g ) / $chroma );
		} else { // $g === $min_rgb
			$h = 5 - ( ( $b - $r ) / $chroma );
		}
		$h = 60 * $h;
		return array( $h, $s, $v, $l );
	} else {
		return array( 0, 0, $v, $l );
	}
}

function colorLuminescence( $hex ) {
	$rgb = hex_to_rgb( $hex );
	$hsvl = rgb_to_hsvl( $rgb );

	return $hsvl[3];
}
