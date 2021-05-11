/**
 * File primary-navigation.js.
 *
 * This files only gets added to themes that support the mobile nav on side
 */
( function() {

	/**
	 * Menu Toggle Behaviors
	 *
	 * @param {Element} element
	 */
	var navMenu = function ( buttonId, inputId ) {
		var wrapper = document.body;

		var toggleButton = document.getElementById( buttonId );
		var toggleInput  = document.getElementById( inputId );

		if ( toggleButton ) {
			toggleButton.onclick = function() {
				if ( true == toggleInput.checked ) {
					wrapper.classList.remove( 'lock-scrolling' );
				} else {
					wrapper.classList.add( 'lock-scrolling' );
				}

				toggleButton.focus();
			}
		}
	}

	window.addEventListener( 'load', function() {
		navMenu(  'toggle-menu', 'toggle' );
		navMenu(  'toggle-cart', 'woocommerce-toggle' );
	} );
} )();