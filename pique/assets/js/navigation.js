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

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var toggleNav, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		toggleNav = function( e ) {
			var menuItem = this.parentNode, i;

			if ( ! menuItem.classList.contains( 'focus' ) ) {
				e.preventDefault();
				for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
					if ( menuItem === menuItem.parentNode.children[i] ) {
						continue;
					}
					menuItem.parentNode.children[i].classList.remove( 'focus' );
				}
				menuItem.classList.add( 'focus' );
			} else {
				menuItem.classList.remove( 'focus' );
			}
		};

		for ( i = 0; i < parentLink.length; ++i ) {
			parentLink[i].addEventListener( ( 'ontouchstart' in window ? 'touchstart' : 'click' ), toggleNav, false );
		}
	}( container ) );

} )( jQuery );
