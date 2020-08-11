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

	// on load, add event listeners for each menu
	// clicking open-primary menu adds the primary-nav-open class and lock-scrolling class
	// click close-primary-menu removes primary-nav-open- class and lock-scrolling class

	// write a class that handles the opening and closing of a given menu within a single page context
	// associates a specific button id with a specific menu according to the following pattern: [id]-button-open:[id]-navigation-open
	// class NavigationController {
	// 	constructor( navContainerClass, buttonId )
	// }
	function initNavMenu(){
		var wrapper         = document.body;
		var openButton    	= document.getElementById( 'primary-open-menu' );
		var closeButton    	= document.getElementById( 'primary-close-menu' );

		openButton.onclick = function() {
			wrapper.classList.add( 'primary-navigation-open' );
			wrapper.classList.add( 'lock-scrolling' );
			$( closeButton ).focus();
		}
		closeButton.onclick = function() {
			wrapper.classList.remove( 'primary-navigation-open' );
			wrapper.classList.remove( 'lock-scrolling' );
		}
	}

	window.addEventListener( 'load', initNavMenu );
	function menuToggleUI( openButtonId, navOpenClass = 'primary-navigation-open' ) {

		var wrapper         = document.body;
		var openButton    	= document.getElementById( openButtonId );
		var lockScrollClass = 'lock-scrolling';
		var navOpenClass;

		// Toggle click if it exists
		toggleButton ? 
		toggleButton.onclick = function() {
			wrapper.classList.toggle(navOpenClass);
			wrapper.classList.toggle(lockScrollClass);
		} : null;
	}

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
			_doc.body.classList.remove( 'primary-navigation-open', 'wc-navigation-open', 'lock-scrolling' );
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