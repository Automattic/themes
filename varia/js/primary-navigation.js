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

		document.addEventListener( 'click', function( event ) {
			// If target onclick is <a> with # within the href attribute
			if ( event.target.hash && event.target.hash.includes( '#' ) ) {
				wrapper.classList.remove( 'lock-scrolling' );
				if (toggleInput) {
					toggleInput.checked = false;
				}
				// Wait 550 and scroll to the anchor.
				setTimeout(function () {
					var anchor = document.getElementById(event.target.hash.slice(1));
					anchor.scrollIntoView();
				}, 550);
			}
		} );
	}

	window.addEventListener( 'load', function() {
		navMenu(  'toggle-menu', 'toggle' );
		navMenu(  'toggle-cart', 'woocommerce-toggle' );
	} );
} )();