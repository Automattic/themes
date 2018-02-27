/**
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
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
				$( '.site-branding' ).css( {
					'text-align': 'center'
				} );
				$( '.site-logo' ).css( {
					'float': 'none',
					'margin-top': '0',
					'margin-bottom': '3.5px'
				} );
			} else if ( false === to ) {
				$( '.site-title a, .site-description' ).css( {
					'color': ''
				} );
			} else {
				// If reset to default colour, change description back to grey
				if ( '#362e77' === to ) {
					$( '.site-title a' ).css( {
						'color': to
					} );
					$( '.site-description' ).css({
						'color': '#999999'
					} );
				} else {
					$( '.site-title a, .site-description' ).css( {
						'color': to
					} );
				}
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-branding' ).css( {
					'text-align': 'left'
				} );
				$( '.site-logo' ).css( {
					'float': 'left',
					'margin-top': '',
					'margin-bottom': ''
				} );
			}
		} );
	} );
} )( jQuery );
