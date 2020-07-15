/**
 * File wpcom-customize-preview.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience,
 * targeting the updates needed to hide the page title on the homepage on WordPress.com.
 */

( function( $ ) {

    'use strict';

	wp.customize.bind( 'ready', function () {
		wp.customize.panel( 'themes', function( panel ) {
			panel.deferred.embedded.done( function() {
				var customMessage;
				customMessage = $( wp.template( 'varia-custom-message' )() );
				panel.headContainer.append( customMessage );
			} );
		} );
	} );

} )( jQuery );
