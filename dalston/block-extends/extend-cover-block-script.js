document.addEventListener( 'DOMContentLoaded', function () {
	// Check if the device supports hover.
	// In this case, the effect is through CSS `:hover` selectors.
	if ( window.matchMedia( '(hover: hover)' ).matches ) {
		return;
	}

	const observer = new IntersectionObserver( ( entries ) => {
		entries.forEach( entry => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'dalston-in-viewport' );
			} else {
				entry.target.classList.remove( 'dalston-in-viewport' );
			}
		});
	}, { threshold: 0.6 } ); // Trigger when 60% of the element is visible

	// Observe the elements with the hover reveal style.
	document.querySelectorAll( '.is-style-hover-reveal' ).forEach( element => {
		observer.observe( element );
	} );
} );
