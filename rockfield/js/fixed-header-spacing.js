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
		var body = document.body;

		if ( document.documentElement.clientWidth <= 640 ) {
			document.getElementById( "primary" ).style.marginTop = 0;
			body.classList.remove( 'wp-sticky-header' );
		} else {
			var header  = document.getElementById( 'masthead' );
			var content = document.getElementById( 'primary' );
			var headerOffsetHeight = 0;

			if ( header ) {
				headerOffsetHeight = header.offsetHeight;
				content.style.marginTop = headerOffsetHeight + "px";
			}

			if ( document.documentElement.clientHeight / 5 - headerOffsetHeight >= 0 ) {
				body.classList.add( 'wp-sticky-header' );
			} else {
				body.classList.remove( 'wp-sticky-header' );
			}
		}
	};

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

	/**
	 * Run our page header height function
	 */
	window.addEventListener( 'load', pageHeaderHeight );
	pageHeaderHeight();
})();
