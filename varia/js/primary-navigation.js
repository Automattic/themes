/**
 * File primary-navigation.js.
 *
 * Locks scroll when the menu is opened on mobile
 */
( function() {

	/**
	 * Menu Toggle Behaviors
	 *
	 * @param {Element} element
	 */
	var navMenu = function ( id ){
		var wrapper         = document.body; // this is the element to which a CSS class is added when a mobile nav menu is open

			if (wrapper.classList.contains('mobile-nav-side')) {

			var toggleButton    	= document.getElementById( 'toggle-menu' );
			var toggleInput    	= document.getElementById( 'toggle' );

			if ( toggleButton ){
				toggleButton.onclick = function() {
					if (toggleInput.checked == true){
						wrapper.classList.remove( `${ id }-navigation-open` );
						wrapper.classList.remove( 'lock-scrolling' );
					} else {
						wrapper.classList.add( `${ id }-navigation-open` );
						wrapper.classList.add( 'lock-scrolling' );	
					}
					toggleButton.focus();
				}		
			}
		}
	}

	window.addEventListener( 'load', function() {
		new navMenu( 'primary' );
	});
} )();