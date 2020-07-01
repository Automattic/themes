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
	function menuToggleUI( toggleButtonID, navOpenClass = 'primary-navigation-open' ) {

		var wrapper         = document.body;
		var toggleButton    = document.getElementById( toggleButtonID );
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
	 * Run our menuToggleUI function on load
	 */
	window.addEventListener( 'load', function() {
		menuToggleUI( 'toggle-menu', 'primary-navigation-open' );
		menuToggleUI( 'toggle-cart', 'wc-navigation-open' );
	});

} )();