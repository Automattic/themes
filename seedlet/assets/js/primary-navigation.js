/**
 * File primary-navigation.js.
 *
 * Required to open and close the mobile navigation.
 */

( function() {
	var $ = jQuery;
	/**
	 * Menu Toggle Behaviors
	 *
	 * @param {Element} element
	 */
	function menuToggleUI( toggleButtonID, navOpenClass = 'primary-navigation-open' ) {

		var wrapper         = document.body;
		var toggleButton    = document.getElementById( toggleButtonID );
		var lockScrollClass = 'lock-scrolling';
		var navOpenClass;

		// Toggle click if it exists
		toggleButton ?
		toggleButton.onclick = function() {
			$( toggleButton ).attr( 'tabindex', '' );
			if ( wrapper.classList.contains( navOpenClass ) ){
				$( toggleButton ).attr( 'tabindex', navOpenClass === 'primary-navigation-open' ? '3' : '2' );
			}

			wrapper.classList.toggle(navOpenClass);
			wrapper.classList.toggle(lockScrollClass);
		} : null;
	}

	/**
	 * Run our menuToggleUI function on load
	 */
	window.addEventListener( 'load', function() {
		menuToggleUI( 'toggle-menu', 'primary-navigation-open' );
		menuToggleUI( 'toggle-cart', 'wc-navigation-open' );
	});

	/**
	 * Trap keyboard navigation in the menu modal.
	 * Adapted from TwentyTwenty
	 */
	var _doc = document; 
	var modal, elements, selectors, lastEl, firstEl, activeEl, tabKey, shiftKey, escKey;

	_doc.addEventListener( 'keydown', function( event ) {
		if ( _doc.body.classList.contains( 'primary-navigation-open' ) ){
			modal = _doc.querySelector( '#site-navigation' );
		} else if (  _doc.body.classList.contains( 'wc-navigation-open' ) ){
			modal = _doc.querySelector( '.woo-navigation' );
		} else {
			return;
		}

		selectors = 'input, a, button';

		elements = modal.querySelectorAll( selectors );
		elements = Array.prototype.slice.call( elements );

		lastEl = elements[ elements.length - 1 ];
		firstEl = elements[0];
		activeEl = _doc.activeElement;
		tabKey = event.keyCode === 9;
		shiftKey = event.shiftKey;
		escKey = event.keyCode === 27;

		if ( escKey ) {
			event.preventDefault();
			_doc.body.classList.remove( 'primary-navigation-open', 'wc-navigation-open' );
			firstEl.focus();
		}

		if ( ! shiftKey && tabKey && lastEl === activeEl ) {
			event.preventDefault();
			firstEl.focus();
		}

		if ( shiftKey && tabKey && firstEl === activeEl ) {
			event.preventDefault();
			lastEl.focus();
		}
	});
} )();