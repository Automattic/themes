/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Changes colours in top of standard post format 'paper'
	wp.customize( 'background_color', function( value ) {
		value.bind( function( to ) {
			if( '' === to ) {
				$( 'body:not(.single-post) .format-status span.paper-top' ).css( {
					'background-image': 'linear-gradient(90deg, #bdcbcc 7px, transparent 7px), radial-gradient( #bdcbcc 8px, transparent 8px)'
				} );
			} else {
				$( 'body:not(.single-post) .format-status span.paper-top' ).css( {
					'background-image': 'linear-gradient(90deg, ' + to + ' 7px, transparent 7px), radial-gradient( ' + to + ' 8px, transparent 8px)'
				} );
			}
		} );
	} );
} )( jQuery );
