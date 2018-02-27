/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */

( function( $ ) {
	var windowWidth = $( window ).width();

	/* Drop menu down from top of screen */
	$( '.menu-toggle' ).on( 'click', function() {
		var menu = $( this ).parent().find( '.menu-wrapper' );
		menu.toggleClass( 'menu-visible' );
		$( this ).find( '#menu-icon' ).toggleClass( 'open' );
	});

	/* Open sub-menus if we're using the teeny menu */
	if ( $( '.menu-toggle' ).is( ':visible' ) ) {
		$( '.menu-item-has-children > a' ).on( 'click', function() {
			$( this ).parent().children( '.sub-menu' ).toggleClass( 'menu-visible' );
			return false;
		});
	}

	/* Make sure to show the sub-menu on page resize */
	$( window ).resize( function() {

		// Prevent the following code from getting triggered when scrolling on mobile devices
		if ( windowWidth !== $( window ).width() ) {
			var menu = $( '.menu-toggle' ).parent().find( '.menu-wrapper' );
			menu.removeClass( 'menu-visible' );
			$( '#menu-icon' ).removeClass( 'open' );
		}

		windowWidth = $( window ).width();
	});

} )( jQuery );
