<?php
// These functions are borrowed from the colorline lib
if ( ! function_exists( 'hex_to_rgb' ) ) {
	function hex_to_rgb( $hex ) {
		return sscanf( $hex, '%02X%02X%02X' );
	}
}

// RGB values: 0-255
// LUM values: 0-1
if ( ! function_exists( 'rgb_to_lum' ) ) {
	function rgb_to_lum( $rgb ) {
		list( $r, $g, $b ) = $rgb;
		return sqrt( 0.241 * $r * $r + 0.691 * $g * $g + 0.068 * $b * $b ) / 255;
	}
}

// RGB values:    0-255, 0-255, 0-255
// HSV values:    0-360, 0-100, 0-100, 0-100
if ( ! function_exists( 'rgb_to_hsvl' ) ) {
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
}

if ( ! function_exists( 'change_color_luminescence' ) ) {
	function change_color_luminescence( $hex, $amount ) {
		$hex_without_hash = substr( $hex, 1, strlen( $hex ) );
		$rgb              = hex_to_rgb( $hex_without_hash );
		$hsvl             = rgb_to_hsvl( $rgb );
		return 'hsl( ' . $hsvl[0] . ',' . $hsvl[1] . '%,' . ( $hsvl[2] + $amount ) . '%)';
	}
}
