( function( $ ) {

	$( window ).load( function() {

		function searchAddClass() {
			$( this ).closest( '.search-form' ).addClass( 'hover' );
		}
		function searchRemoveClass() {
			$( this ).closest( '.search-form' ).removeClass( 'hover' );
		}
		var searchSubmit = $( '.search-submit' );
		searchSubmit.hover( searchAddClass, searchRemoveClass );
		searchSubmit.focusin( searchAddClass );
		searchSubmit.focusout( searchRemoveClass );

	} );

} )( jQuery );

( function() {

	var container, button, form, siteHeaderInner, siteNavigation, div;
	var windowWidth = window.innerWidth;

	container = document.getElementById( 'search-header' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	form = container.getElementsByTagName( 'form' )[0];
	if ( 'undefined' === typeof form ) {
		button.style.display = 'none';
		return;
	}
	form.setAttribute( 'aria-expanded', 'false' );

	siteHeaderInner = document.getElementsByClassName( 'site-header-inner' )[0];

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			document.body.className = document.body.className.replace( ' search-toggled', '' );
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			form.setAttribute( 'aria-expanded', 'false' );
		} else {
			document.body.className += ' search-toggled';
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			form.setAttribute( 'aria-expanded', 'true' );
		}
	};

	siteNavigation = document.getElementById( 'site-navigation' );
	if ( ! siteNavigation ) {
		return;
	}

	div = siteNavigation.getElementsByTagName( 'div' )[0];

	function searchPosition() {
		if ( window.innerWidth > 599 ) {
			siteHeaderInner.appendChild( container );
			document.body.className = document.body.className.replace( ' search-toggled', '' );
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			form.setAttribute( 'aria-expanded', 'false' );
		} else {
			div.insertBefore( container, div.firstChild );
			document.body.className += ' search-toggled';
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			form.setAttribute( 'aria-expanded', 'true' );
		}
	}

	window.onload = function() {
		searchPosition();
	};

	window.onresize = function() {
		// Prevent the Android keyboard from triggering searchPosition
		if ( windowWidth !== window.innerWidth ) {
			searchPosition();
		}

		windowWidth = window.innerWidth;
	}

} )();
