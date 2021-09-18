(function() {

	/**
	 * Debounce
	 *
	 * @param {Function} func
	 * @param {number} wait
	 * @param {boolean} immediate
	 */
	function debounce(func, wait, immediate) {
		'use strict';

		var timeout;
		wait      = (typeof wait !== 'undefined') ? wait : 20;
		immediate = (typeof immediate !== 'undefined') ? immediate : true;

		return function() {

			var context = this, args = arguments;
			var later = function() {
				timeout = null;

				if (!immediate) {
					func.apply(context, args);
				}
			};

			var callNow = immediate && !timeout;

			clearTimeout(timeout);
			timeout = setTimeout(later, wait);

			if (callNow) {
				func.apply(context, args);
			}
		};
	}

	/**
	 * Get page header height and use it for top-margin on
	 * site-content when above mobile breakpoint
	 */
	function pageHeaderHeight( adjustLogoHeight ) {
		if ( document.documentElement.clientWidth <= 640 ) {

			document.getElementById("primary").style.marginTop = 0;

		} else {
			var body          = document.body;
			var header        = document.getElementById("masthead");
			var content       = document.getElementById("primary");

			if ( body.classList.contains("archive") ) {

				content.style.marginTop = header.offsetHeight + "px";

			} else {

				content.style.marginTop = header.offsetHeight + "px";
			}

			if ( adjustLogoHeight ) {
				logoWidth();
			}
		}
	};

	let initialLogoWidth = 0;
	function logoWidth() {
		var firstTitle    = document.body.querySelector( '.entry-title' );
		var content       = document.getElementById( 'primary' );
		var siteLogo      = document.body.querySelector( '.site-logo' );

		if ( document.body.classList.contains( 'sticky-menu-enabled' ) || ! siteLogo ) {
			return;
		}
				
		if ( siteLogo.offsetHeight + 64 > content.getBoundingClientRect().top )	{
			// Subtract 64px based on the fact that the padding is already 32px, plus to give some extra space. 
			siteLogo.style.width = firstTitle.getBoundingClientRect().left - 64 + 'px';
			pageHeaderHeight( false );
		}
		
		if ( window.scrollY === 0 ) {
			siteLogo.style.width = initialLogoWidth + 'px';
			pageHeaderHeight( false );

			let intervalCount = 0;
			let adjustingWidthInterval = setInterval( function() {
				intervalCount++;
				pageHeaderHeight( false );
				
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
	window.addEventListener( 'resize',
		debounce( function() {
			if ( isResizing ) {
				return;
			}

			isResizing = true;
			setTimeout( function() {
				pageHeaderHeight();
				isResizing = false;
			}, 150 );
		} )
	);
	
	initialLogoWidth = document.body.querySelector( '.site-logo img' ).width;
	
	window.addEventListener( 'scroll', logoWidth );

	/**
	 * Run our page header height function
	 */
	pageHeaderHeight();
})();
