/**
 * Header enhancements for more intelligent dynamic headers.
 *
 * This sets the masthead to the height of an uploaded image and applies sticky navigation.
 */

( function( $ ) {

	// Fit header into the available space
	function fitHeader() {
		var windowWidth = $( window ).width();
		var headerHeight = $( '#pique-header-image' ).height();
		var navHeight = $( '#primary-menu' ).height();
		var brandingHeight = $( '.site-branding' ).height();

		// Make sure we're not on the homepage, since that handles stuff differently
		if ( ! $( 'body' ).hasClass( 'pique-frontpage' )) {
			if ( 0 < $( '#pique-header-image' ).length ) {
				// Add the height of our header image and the height of our nav
				$( '#masthead' ).css( 'height', headerHeight + navHeight );
			} else {
				// Give enough room for our branding
				console.log('no header');
				$( '#masthead' ).css( 'height', brandingHeight + navHeight + 40 );
			}
		}
	};

	// Priority+ navigation, whee!
	function priorityNav() {
		// Make sure we have a menu and that the more-more item is present
		if ( 0 < $( '#site-navigation' ).length && 0 < $( '#more-menu' ).length ) {
			var navWidth = 0;
			var firstMoreElement = $( '#more-menu li' ).first();

			// Calculate the width of our "more" containing element
			var moreWidth = $( '#more-menu' ).outerWidth( true );

			// Calculate the current width of our navigation
			$( '#site-navigation .menu > li' ).each( function() {
				navWidth += $( this ).outerWidth( true );
			});

			// Calculate our available space
			var availableSpace = $( '#site-navigation' ).outerWidth( true ) - moreWidth;

			// If our nav is wider than our available space, we're going to move items
			if (navWidth > availableSpace) {
				var lastItem = $( '#site-navigation .menu > li:not(#more-menu)' ).last();
				lastItem.attr( 'data-width', lastItem.outerWidth( true ) );
				lastItem.prependTo( $( '#more-menu .sub-menu' ).eq( 0 ) );
				priorityNav(); // Rerun this function!

				// But if we have the extra space, we should add the items back to our menu
			} else if (navWidth + firstMoreElement.data( 'width' ) < availableSpace) {
				// Check to be sure there's enough space for our extra element
				firstMoreElement.insertBefore( $( '#site-navigation .menu > li' ).last() );
				priorityNav();
			}

			// Hide our more-menu entirely if there's nothing in it
			if ($( '#more-menu li' ).length > 0) {
				$( '#more-menu' ).addClass( 'visible' );
			} else {
				$( '#more-menu' ).removeClass( 'visible' );
			}
		} // check for body class
	}; // function priorityNav

	// Okay, now we want to stick-ify our menu when we reach it
	function stickyNav() {
		var nav_container = $( '#site-navigation-wrapper' );
		var nav = $( '#site-navigation' );

		nav_container.waypoint( {
			handler: function(direction) {
				nav.toggleClass( 'sticky', direction == 'down' );

				// Ensure we don't have an awkward jump when the menu sticks
				if ('down' === direction) {
					nav_container.css( { 'height':nav.outerHeight() } );
				} else {
					nav_container.css( { 'height':'auto' } );
				}
			}
		});
	};

	// Run our functions once the window has loaded fully
	$( window ).on( 'load', function() {
		priorityNav();
		fitHeader();
		stickyNav();
	});

	// Annnnnd also every time the window resizes
	var isResizing = false;
	$( window ).on('resize', function() {
		if (isResizing) {
			return;
		}

		isResizing = true;
		setTimeout(function() {
			priorityNav();
			fitHeader();
			isResizing = false;
		}, 150);
	});

} )( jQuery );
