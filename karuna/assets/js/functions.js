/**
 * Handles sticky header
 */

( function () {
	'use strict';

	var stickyHeader = document.querySelector( '.sticky-wrapper' );
	var topBar = document.querySelector( '.top-bar' );
	var stickyHeaderOffset = parseFloat(
		( getComputedStyle( topBar ).height || '0' ).replace( 'px', '' )
	);

	var nextFrame = null;

	if ( ! stickyHeader || ! topBar ) {
		return;
	}

	function stickyTime() {
		var windowWidth = document.documentElement.clientWidth;

		if ( window.pageYOffset >= stickyHeaderOffset && windowWidth >= 1100 ) {
			stickyHeader.classList.add( 'sticking' );

			var stuckHeader = document.querySelector( '.sticky-wrapper.sticking' );
			var stickyHeaderHeight = getComputedStyle( stuckHeader ).height;

			document.body.style.paddingTop = stickyHeaderHeight;
			topBar.style.visibility = 'hidden';
		} else {
			stickyHeader.classList.remove( 'sticking' );
			document.body.removeAttribute( 'style' );
			topBar.removeAttribute( 'style' );
		}

		nextFrame = null;
	}

	if ( document.readyState === 'complete' ) {
		stickyTime();
	} else {
		window.addEventListener( 'load', stickyTime );
	}

	document.addEventListener( 'scroll', function () {
		if ( window.requestAnimationFrame ) {
			nextFrame = nextFrame || requestAnimationFrame( stickyTime );
		} else {
			stickyTime();
		}
	} );
} )();
