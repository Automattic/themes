/**
 *
 * Custom JavaScript for the Scratchpad theme.
 *
 */

( function( $ ) {
	/**
	 * Masonry for footer widgets
	 */
	function widgetMasonry() {
		// Determine text direction
		var ltr = true;
		if ( $('html' ).attr( 'dir' ) == 'rtl') {
			ltr = false;
		}

		$( '.grid-container' ).masonry( {
			itemSelector: '.widget',
			isOriginLeft: ltr,
		} );
	}

	/**
	 * Firing events
	 */

	// Fire on load
	$( window ).on( 'load', function() {
		widgetMasonry();
	} );

	// Fire on document ready
	$( document ).ready(function(){

		// Set some min-heights to help improve Masonry's treatment of these widgets

		// Get Twitter widgets and set a min-height on parent elements
		$( 'a.twitter-timeline' ).each( function() {

			var thisHeight = $( this ).attr( 'height' );

			// Set the widget to have this height
			$( this ).parent().css( 'min-height', thisHeight + 'px' );
		} );

		// Get Facebook widgets and set a min-height on parent elements
		$( '.fb-page' ).each( function() {

			// Get some settings from the initial markup:
			var $set_height = $( this ).data( 'height' ),
				$hide_cover = $( this ).data( 'hide-cover' ),
				$show_facepile = $( this ).data( 'show-facepile' ),
				$show_posts = $( this ).data( 'show-posts' ), // AKA stream
				$min_height = $set_height; // set the default 'min-height'

			// These values are defaults from the FB widget.
			var $no_posts_no_faces = 130,
				$no_posts = 220;

			if ( $show_posts ) {
				// Showing posts; may also be showing faces and/or cover - the latter doesn't affect the height at all.
				$min_height = $set_height;

			} else if ( $show_facepile ) {
				// Showing facepile with or without cover image - both would be same height.
				// If the user selected height is lower than the no_posts height, we'll use that instead
				$min_height = ( $set_height < $no_posts ) ? $set_height : $no_posts;

			} else {
				// Either just showing cover, or nothing is selected (both are same height).
				// If the user selected height is lower than the no_posts_no_faces height, we'll use that instead
				$min_height = ( $set_height < $no_posts_no_faces ) ? $set_height : $no_posts_no_faces;
			}

			// apply min-height to .fb-page container
			$( this ).css( 'min-height', $min_height + 'px' );
		} );

	} );

} )( jQuery );
