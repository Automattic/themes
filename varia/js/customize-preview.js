/**
 * File wpcom-customize-preview.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience,
 * targeting the updates needed to hide the page title on the homepage on WordPress.com.
 *
 * This file needs to avoid ESNext syntax to work in older browsers
 */

 // From https://gist.github.com/xenozauros/f6e185c8de2a04cdfecf
 function hexToHSL( hex ) {
	var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec( hex );
		r = parseInt( result[1], 16 );
		g = parseInt( result[2], 16 );
		b = parseInt( result[3], 16 );
		r /= 255, g /= 255, b /= 255;
	  var max = Math.max( r, g, b ), min = Math.min( r, g, b );
	  var h, s, l = ( max + min ) / 2;
	  if( max == min ){
		h = s = 0; // achromatic
	  } else {
		var d = max - min;
		s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
		switch( max ){
		  case r: h = ( g - b ) / d + ( g < b ? 6 : 0 ); break;
		  case g: h = ( b - r ) / d + 2; break;
		  case b: h = ( r - g ) / d + 4; break;
		}
		h /= 6;
	}
	var HSL = new Object();
	HSL['h'] = h;
	HSL['s'] = s;
	HSL['l'] = l;
	return HSL;
}

function changeColorLuminescence( hex, amount ) {
	var hsl = hexToHSL( hex );
	return 'hsl( ' + hsl.h * 360 + ',' + hsl.s * 100 + '%,' + ( hsl.l * 100  + amount ) + '%)';
}


( function( $ ) {
	// Hide Front Page Title
	wp.customize( 'hide_front_page_title', function( value ) {
		value.bind( function( to ) {
			if ( true === to ) {
				$( 'body' ).addClass( 'hide-homepage-title' );

			} else {
				$( 'body' ).removeClass( 'hide-homepage-title' );
			}
		} );
	} );

	// Since the plugin handles customizer preview updates via the postMessage transport,
	// we need to manually override the "extra CSS" when a user selects a different color palette.
	wp.customize( 'colors_manager[colors]', function( value ) {
		value.bind( function( to ) {
			var background = to.bg;
			var foreground = to.txt;
			var primary = to.link;
			var secondary = to.fg1;
			var border = to.fg2;

			var backgroundLowContrast = changeColorLuminescence( background, -10 );
			var backgroundHighContrast = changeColorLuminescence( background, 10 );
			var foregroundLowContrast = changeColorLuminescence( foreground, 10 );
			var foregroundHighContrast = changeColorLuminescence( foreground, -10 );
			var borderLowContrast = changeColorLuminescence( border, 10 );
			var borderHighContrast = changeColorLuminescence( border, -10 );
			var primaryHover = changeColorLuminescence( primary, 10 );
			var secondaryHover = changeColorLuminescence( secondary, 10 );
			const extraCSS = ':root {' +
					'--wp--preset--color--background: ' + background + ';' +
					'--wp--preset--color--background-low-contrast: ' + backgroundLowContrast + ';' +
					'--wp--preset--color--background-high-contrast: ' + backgroundHighContrast + ';' +
					'--wp--preset--color--foreground: ' + foreground + ';' +
					'--wp--preset--color--foreground-low-contrast: ' + foregroundLowContrast + ';' +
					'--wp--preset--color--foreground-high-contrast: ' + foregroundHighContrast + ';' +
					'--wp--preset--color--primary: ' + primary + ';' +
					'--wp--preset--color--primary-hover: ' + primaryHover + ';' +
					'--wp--preset--color--secondary: ' + secondary + ';' +
					'--wp--preset--color--secondary-hover: ' + secondaryHover + ';' +
					'--wp--preset--color--border: ' + border + ';' +
					'--wp--preset--color--border-low-contrast: ' + borderLowContrast + ';' +
					'--wp--preset--color--border-high-contrast: ' + borderHighContrast + ';' +
				'}';

			// Append an extra style element that overrides the previous extra CSS
			if ( $('#custom-colors-extra-css').length ) {
				$( '#custom-colors-extra-css' ).html( extraCSS );
			} else {
				$( 'head' ).append( '<style id="custom-colors-extra-css">' +  extraCSS + '</style>' );
			}

			if ( typeof cssVars !== 'undefined' ) {
				cssVars( {} );
			}
		} );
	} );
} )( jQuery );
