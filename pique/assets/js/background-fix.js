( function( $ ) {
/**
 * Test if an iOS device.
 */

	function checkiOS() {
		return /iPad|iPhone|iPod/.test(navigator.userAgent) && ! window.MSStream;
	}

	/*
	* Test if background-attachment: fixed is supported.
	* @link http://stackoverflow.com/questions/14115080/detect-support-for-background-attachment-fixed
	*/
	function supportsFixedBackground() {
		var el = document.createElement('div'),
		isSupported;

		try {
			if ( ! ( 'backgroundAttachment' in el.style ) || checkiOS() ) {
				return false;
			}
			el.style.backgroundAttachment = 'fixed';
			isSupported = ( 'fixed' === el.style.backgroundAttachment );
			return isSupported;
		}

		catch (e) {
			return false;
		}
	}

	$( document ).ready( function() {
		if ( false === supportsFixedBackground() ) {
			$( 'body' ).addClass( 'no-background-fixed' );
		}
	} );

} )( jQuery );