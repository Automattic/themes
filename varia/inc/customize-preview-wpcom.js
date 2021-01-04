/**
 * File customize-preview-wpcom.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience,
 * targeting the updates needed to hide the page title on the homepage on WordPress.com.
 */

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

	// Hide Site Header
	wp.customize( 'hide_site_header', function( value ) {
		value.bind( function( to ) {
			if ( true === to ) {
				$( 'body' ).addClass( 'hide-homepage-header' );

			} else {
				$( 'body' ).removeClass( 'hide-homepage-header' );
			}
		} );
	} );

	// Hide Site Footer Menu
	wp.customize( 'hide_site_footer', function( value ) {
		value.bind( function( to ) {
			if ( true === to ) {
				$( 'body' ).addClass( 'hide-homepage-footer' );

			} else {
				$( 'body' ).removeClass( 'hide-homepage-footer' );
			}
		} );
	} );
} )( jQuery );
