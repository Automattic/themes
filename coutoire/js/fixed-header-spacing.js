( function () {
	/**
	 * Debounce
	 *
	 * @param {Function} func
	 * @param {number} wait
	 * @param {boolean} immediate
	 */
	function debounce( func, wait, immediate ) {
		'use strict';

		var timeout;
		wait = typeof wait !== 'undefined' ? wait : 20;
		immediate = typeof immediate !== 'undefined' ? immediate : true;

		return function () {
			var context = this,
				args = arguments;
			var later = function () {
				timeout = null;

				if ( ! immediate ) {
					func.apply( context, args );
				}
			};

			var callNow = immediate && ! timeout;

			clearTimeout( timeout );
			timeout = setTimeout( later, wait );

			if ( callNow ) {
				func.apply( context, args );
			}
		};
	}

	/**
	 * Get page header height and use it for top-margin on
	 * site-content when above mobile breakpoint
	 */
	function pageHeaderHeight() {
		if ( document.documentElement.clientWidth <= 640 ) {
			document.getElementById( 'primary' ).style.marginTop = 0;
		} else {
			var header = document.getElementById( 'masthead' );
			var content = document.getElementById( 'primary' );

			content.style.marginTop = header.offsetHeight + 'px';
		}
	}

	let initialLogoWidth = 0;
	function logoWidth() {
		var firstTitle = document.body.querySelector( '.entry-title' );
		var content = document.getElementById( 'primary' );
		var siteLogo = document.body.querySelector( '.site-logo' );

		if (
			document.body.classList.contains( 'sticky-menu-enabled' ) ||
			! siteLogo
		) {
			return;
		}

		if (
			siteLogo.offsetHeight + 64 >
			content.getBoundingClientRect().top
		) {
			// Subtract 64px based on the fact that the padding is already 32px, plus to give some extra space.
			siteLogo.style.width =
				firstTitle.getBoundingClientRect().left - 64 + 'px';
		}

		if ( window.scrollY === 0 ) {
			siteLogo.style.width = initialLogoWidth + 'px';

			let intervalCount = 0;
			let adjustingWidthInterval = setInterval( function () {
				intervalCount++;

				// 25 because the transition is 0.25s.
				if ( intervalCount === 25 ) {
					clearInterval( adjustingWidthInterval );
				}
			}, 1 );
		}
	}

	/**
	 * Run our function every time the window resizes
	 */
	var isResizing = false;
	window.addEventListener(
		'resize',
		debounce( function () {
			if ( isResizing ) {
				return;
			}

			isResizing = true;
			setTimeout( function () {
				pageHeaderHeight();
				isResizing = false;
			}, 150 );
		} )
	);

	initialLogoWidth = document.body.querySelector( '.site-logo img' ).width;

	// Set the logo width without animation when the page first loads.
	document.body
		.querySelector( '.site-logo' )
		.classList.add( 'no-transition' );
	document.body.querySelector( '.site-logo' ).style.width = initialLogoWidth;
	document.body
		.querySelector( '.site-logo' )
		.classList.remove( 'no-transition' );

	/**
	 * Run our page header height function
	 */
	pageHeaderHeight();

	setTimeout( function () {
		window.addEventListener( 'scroll', logoWidth );
	}, 26 ); // We need to wait for the margin top to be set before we attach the scroll handler.
} )();
