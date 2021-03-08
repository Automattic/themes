/**
 * File primary-navigation.js.
 *
 * Required to open and close the mobile navigation.
 */
( function() {

	/**
	 * Menu Toggle Behaviors
	 *
	 * @param {Element} element
	 */
	var navMenu = function ( id ){
		var wrapper         = document.body; // this is the element to which a CSS class is added when a mobile nav menu is open
		var openButton    	= document.getElementById( id + '-open-menu' );
		var closeButton    	= document.getElementById( id + '-close-menu' );

		if ( openButton && closeButton ){
			openButton.onclick = function() {
				wrapper.classList.add( id + '-navigation-open' );
				wrapper.classList.add( 'lock-scrolling' );
				closeButton.focus();
			}

			closeButton.onclick = function() {
				wrapper.classList.remove( id + '-navigation-open' );
				wrapper.classList.remove( 'lock-scrolling' );
				openButton.focus();
			}
		}

		/**
		 * Trap keyboard navigation in the menu modal.
		 * Adapted from TwentyTwenty
		 */
		document.addEventListener( 'keydown', function( event ) {
			if ( ! wrapper.classList.contains( id + '-navigation-open' ) ){
				return;
			} 
			var modal, elements, selectors, lastEl, firstEl, activeEl, tabKey, shiftKey, escKey;

			modal = document.querySelector( '.' + id + '-navigation' );
			selectors = "input, a, button";
			elements = modal.querySelectorAll( selectors );
			elements = Array.prototype.slice.call( elements );
			elements = elements.filter( function( el ) {
				return ! el.classList.contains( 'woocommerce-cart-link' ); // ignore this element because it's hidden on mobile
			});
			tabKey = event.keyCode === 9;
			shiftKey = event.shiftKey;
			escKey = event.keyCode === 27;
			activeEl = document.activeElement;
			lastEl = elements[ elements.length - 1 ];
			firstEl = elements[0];

			if ( escKey ) {
				event.preventDefault();
				wrapper.classList.remove( id + '-navigation-open', 'lock-scrolling' );
				openButton.focus();
			}

			if ( ! shiftKey && tabKey && lastEl === activeEl ) {
				event.preventDefault();
				firstEl.focus();
			}

			if ( shiftKey && tabKey && firstEl === activeEl ) {
				event.preventDefault();
				lastEl.focus();
			}

			// If there are no elements in the menu, don't move the focus
			if ( tabKey && firstEl === lastEl ) {
				event.preventDefault();
			}
		});
	}

	window.addEventListener( 'load', function() {
		new navMenu( 'primary' );
		new navMenu( 'woo' );
	});
} )();