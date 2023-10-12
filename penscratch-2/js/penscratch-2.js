( function () {
	'use strict';

	function onPageLoad() {
		// Trigger resize event to make sure video widgets in the footer maintain the correct aspect ratio
		setTimeout( function () {
			if ( typeof Event === 'function' ) {
				window.dispatchEvent( new Event( 'resize' ) );
			} else {
				var event = window.document.createEvent( 'UIEvents' );
				event.initUIEvent( 'resize', true, false, window, 0 );
				window.dispatchEvent( event );
			}
		} );
	}

	if ( document.readyState === 'complete' ) {
		onPageLoad();
	} else {
		window.addEventListener( 'load', onPageLoad );
	}
} )();
