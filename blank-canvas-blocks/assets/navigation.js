/**
 * File navigation.js.
 *
 * Required to open the mobile navigation.
 */
(function () {

	function addMobileMenuButton( navMenu ) {

		const menuContainer = navMenu.querySelector( '.wp-block-navigation__container' );
		const openButton = document.createElement( 'a' );
		const openButtonLabel = getComputedStyle(menuContainer).getPropertyValue( '--wp--custom--navigation--mobile--menu--label' );
		openButton.setAttribute( 'href', '#' );
		openButton.classList.add( 'wp-block-navigation__mobile-menu-open-button' );
		openButton.innerText = ( openButtonLabel );
		openButton.addEventListener( 'click', () => {
			navMenu.classList.add( 'show' );
			menuContainer.scrollTop = 0;
		});

		menuContainer.addEventListener( 'click', (mouseEvent) => {
			if ( mouseEvent.target === menuContainer ) {
				navMenu.classList.remove( 'show' );
			}
		});

		navMenu.appendChild( openButton );
	}

	window.addEventListener( 'load', () => {
		Array.from( document.querySelectorAll( '.wp-block-navigation.is___experimental-mobile' ) )
			.forEach( addMobileMenuButton );
	});

})();