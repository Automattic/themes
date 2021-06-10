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
	function pageHeaderHeight() {
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

			logoHeight();
		}
	};
	
	function logoHeight() {
		var firstTitle    = document.body.querySelector( '.entry-title' );
		var content       = document.getElementById( 'primary' );
		var siteLogo      = document.body.querySelector( '.site-logo' );
		
		if ( 
			! document.body.classList.contains( 'sticky-menu-enabled' ) &&
			siteLogo &&
			siteLogo.offsetHeight + 64 > content.getBoundingClientRect().top 
		)	{
				// Subtract 64px based on the fact that the padding is already 32px, plus to give some extra space. 
				siteLogo.style.maxWidth = firstTitle.getBoundingClientRect().left - 64 + 'px';
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
	
	window.addEventListener( 'scroll', logoHeight );

	/**
	 * Run our page header height function
	 */
	pageHeaderHeight();
})();
