/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a, .mobile-site-title' ).text( to );
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
				$( '.site-title, .mobile-site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .mobile-site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
				$( '.title-block .site-title a' ).css( { 'color': to } );
			}
		} );
	} );

	// Link colours
	wp.customize( 'libretto_link_colour', function( value ) {
		value.bind( function( to ) {
			$( '.entry-content a' ).css( { 'color': to } ),
			$( '.entry-content a:visited' ).css( { 'color': to } );
		} );
	} );

} )( jQuery );
