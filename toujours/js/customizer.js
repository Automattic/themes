/**
 * customizer.js
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
				$( '.site-title, #tagline' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, #tagline' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Background image
	wp.customize( 'background_image', function( value ) {
		value.bind( function( to ) {

			var file = to.split(/[\\/]/).pop(); //Get URL's filename to compare with the default
			if ( 'toujoursbackground20160105.png' == file ) { //If using the default background image
				$( 'body' ).removeClass( 'user-background' );
			} else {
				$( 'body' ).addClass( 'user-background' );
			}
		} );
	} );

	// Background image
	wp.customize( 'toujours_featured_image_borders', function( value ) {
		value.bind( function( to ) {
			if( to === false ) {
				$( 'body' ).addClass( 'hide-featured-image-borders' );
			} else {
				$( 'body' ).removeClass( 'hide-featured-image-borders' );
			}
		} );
	} );
} )( jQuery );
