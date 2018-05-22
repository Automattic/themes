/*
 * Triggers resize event to make sure video widgets in the footer maintain the correct aspect ratio
 */
( function( $ ) {

	$( document ).on( 'ready', function() {
		setTimeout( function(){
			if ( typeof( Event ) === 'function' ) {
				window.dispatchEvent( new Event( 'resize' ) );
			} else {
				var event = window.document.createEvent( 'UIEvents' );
				event.initUIEvent( 'resize', true, false, window, 0 );
				window.dispatchEvent( event );
			}
		} );
	} );

} )( jQuery );
