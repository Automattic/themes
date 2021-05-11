/**
 * script-wpcom.js
 *
 * Handles toggling of body class name to help WordPress.com custom colors target color changes at different window sizes.
 * The Custom Colors plugin does not support media queries.
 */
( function() {
	function checkWidth( init ) {
		// If browser is resized, check width again
		if ( window.innerWidth > 992 ) {
			document.body.classList.add( 'tablet-desktop' );
		}
		else {
			if ( ! init ) {
				document.body.classList.remove( 'tablet-desktop' );
			}
		}
	}

	function init() {
		checkWidth( true );
		window.addEventListener( 'resize', function() {
			checkWidth( false);
		} );
	}

	// After DOM is ready.
	if ( document.readyState !== 'loading' ) {
		init();
	} else {
		document.addEventListener( 'DOMContentLoaded', init );
	}
} )();
