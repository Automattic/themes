/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function( $ ) {
	var container, moreMenu, menu, button, links, subMenus;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	// Here, we're going to look for the priority plus menu item to determine if we're on a small screen
	moreMenu = document.getElementById( 'more-menu' );
	if ( ! moreMenu ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// If menu is empty, return early.
	if ( 'undefined' === typeof menu ) {
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	$( document ).ready( function() {

		// Open and close our sub-menus when needed
		$( '#site-navigation .menu-item-has-children > a' ).on( 'click' , function( e ) {
			if ( $( window ).width() <= '767' ) {

				// If our sub-menu is already open, we need to figure out what to do if the user clicks the parent item again
				if ($(this).parent('#site-navigation .menu-item-has-children').hasClass('focus') &&
					$(this).parent().attr('id') === $(e.target).parent().attr('id')) {

					// If our parent item links somewhere, let's go there!
					if ($(this).attr('href').length && '#' !== $(this).attr('href')) {
						return true;

						// If our link doesn't go anywhere, we're just going to remove the focus class and close the menu
					} else if ($(this).attr('href').length && '#' === $(this).attr('href')) {
						$('#site-navigation .menu-item-has-children').removeClass('focus');
						e.preventDefault();
						return false;
					}
				}

				// If this is a menu item with sub-menus, but it's already inside a sub-menu itself,
				// let's go to the link (so long as there actually IS a link)
				if ($(this).closest('ul').hasClass('sub-menu') &&
					$(this).attr('href').length && '#' !== $(this).attr('href')) {
					return true;
				}

				// Close any other menus that might be open
				$('#site-navigation .menu-item-has-children').removeClass('focus');

				// Open/close the menu we've clicked on
				$(this).parent('#site-navigation .menu-item-has-children').toggleClass('focus');

				// Open our child menus too!
				$(this).children('.menu-item-has-children').toggleClass('focus');

				// Block our default link behaviour
				e.preventDefault();
			}
		});

		// When clicking on the document, close any open menus.
		$( document ).on('click touchstart', function (e) {
			if ( ! $( e.target ).closest( '#site-navigation .menu-item' ).length) {
				$( '#site-navigation .menu-item-has-children' ).removeClass( 'focus' );
			}
		});

		// Get current window width
		var $windowWidth = $(window).width();

		// When the window is resized, close all menus
		$( window ).on( 'resize', function() {

			// Check window width has actually changed and it's not just iOS triggering a resize event on scroll
        	if ( $windowWidth !== $(window).width() ) {
				$( '#site-navigation-wrapper .menu-item-has-children' ).removeClass( 'focus' );

				// Update the window width for next time
            	$windowWidth = $( window ).width();
			}
		});

	});

} )( jQuery );
