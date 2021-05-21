/**
 * File navigation.js.
 *
 * Required to open the mobile navigation.
 */
( function () {
	function mobilizeNavigationBlock( navMenu ) {
		if ( ! navMenu ) {
			return;
		}
		addMobileMenuOpenButton( navMenu );
		addMobileMenuCloseButton( navMenu );
	}

	function addMobileMenuOpenButton( navMenu ) {
		const menuContainer = navMenu.querySelector(
			'.wp-block-navigation__container'
		);
		if ( ! menuContainer ) {
			return;
		}
		const openButton = document.createElement( 'button' );
		const openButtonLabel = getComputedStyle(
			menuContainer
		).getPropertyValue(
			'--wp--custom--navigation--mobile--menu--open-label'
		);
		openButton.classList.add(
			'wp-block-navigation__mobile-menu-open-button'
		);
		openButton.innerText = openButtonLabel;
		openButton.addEventListener( 'click', ( clickEvent ) => {
			navMenu.classList.add( 'show' );
			menuContainer.scrollTop = 0;
			if ( 0 === clickEvent.detail ) {
				// Menu was opened with keyboard, apply focus to close button.
				const firstButton = menuContainer.querySelector(
					'.wp-block-navigation__mobile-menu-close-button'
				);
				if ( firstButton ) {
					firstButton.focus();
				}
			}
		} );
		navMenu.appendChild( openButton );
	}

	function addMobileMenuCloseButton( navMenu ) {
		const menuContainer = navMenu.querySelector(
			'.wp-block-navigation__container'
		);
		if ( ! menuContainer ) {
			return;
		}
		const closeButton = document.createElement( 'button' );
		const closeButtonLabel = getComputedStyle(
			menuContainer
		).getPropertyValue(
			'--wp--custom--navigation--mobile--menu--close-label'
		);
		closeButton.classList.add(
			'wp-block-navigation__mobile-menu-close-button'
		);
		closeButton.innerText = closeButtonLabel;
		closeButton.addEventListener( 'click', () => {
			navMenu.classList.remove( 'show' );
		} );
		menuContainer.prepend( closeButton );
	}

	window.addEventListener( 'load', () => {
		mobilizeNavigationBlock(
			document.querySelector( 'header .wp-block-navigation' )
		);
	} );
} )();
