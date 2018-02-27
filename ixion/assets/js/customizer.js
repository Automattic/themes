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
			if( '' === to ) {
				$( 'body' ).removeClass( 'has-description' );
			} else {
				$( 'body' ).addClass( 'has-description' );
			}
		} );
	} );

	wp.customize( 'ixion_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.callout-button' ).text( to );
			if( '' === to ) {
				$( 'body' ).removeClass( 'has-cta-button' );
			} else {
				$( 'body' ).addClass( 'has-cta-button' );
			}
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
				$( 'body' ).addClass( 'header-text-hidden' );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a' ).css( {
					'color': to
				} );
				$( 'body' ).removeClass( 'header-text-hidden' );
			}
		} );
	} );

	// Header Image Opacity
	wp.customize( 'ixion_header_overlay_opacity', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).removeClass( 'header-overlay-none header-overlay-light header-overlay-medium' );

			if ( 'none' === to ) {
				$( 'body' ).addClass( 'header-overlay-none' );
			} else if ( 'light' === to ) {
				$( 'body' ).addClass( 'header-overlay-light' );
			} else if ( 'medium' === to ) {
				$( 'body' ).addClass( 'header-overlay-medium' );
			}

		} );
	} );

	// Featured Content Opacity
	wp.customize( 'ixion_featured_overlay_opacity', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).removeClass( 'featured-content-overlay-none featured-content-overlay-light featured-content-overlay-dark' );

			if ( 'none' === to ) {
				$( 'body' ).addClass( 'featured-content-overlay-none' );
			} else if ( 'light' === to ) {
				$( 'body' ).addClass( 'featured-content-overlay-light' );
			} else if ( 'dark' === to ) {
				$( 'body' ).addClass( 'featured-content-overlay-dark' );
			}

		} );
	} );
} )( jQuery );
