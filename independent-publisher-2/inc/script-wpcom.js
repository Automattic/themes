/**
 * script-wpcom.js
 *
 * Handles toggling of body class name to help WordPress.com custom colors target color changes at different window sizes.
 * The Custom Colors plugin does not support media queries.
 */

 ( function( $ ) {
	function checkWidth( init ) {
		// If browser is resized, check width again
		if ( $( window ).width() > 992 ) {
			$( 'body' ).addClass( 'tablet-desktop' );
		}
		else {
			if ( ! init ) {
				$( 'body' ).removeClass( 'tablet-desktop' );
			}
		}
	}

	$( document ).ready( function() {
		checkWidth( true );

		$( window ).resize( function() {
			checkWidth( false );
		});
	});
} )( jQuery );