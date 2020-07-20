( function( $ ) {

	var debounce = function( func, wait ) {
		var timeout, args, context, timestamp;
		return function() {
			context = this;
			args = [].slice.call( arguments, 0 );
			timestamp = new Date();
			var later = function() {
				var last = ( new Date() ) - timestamp;
				if ( last < wait ) {
					timeout = setTimeout( later, wait - last );
				} else {
					timeout = null;
					func.apply( context, args );
				}
			};
			if ( ! timeout ) {
				timeout = setTimeout( later, wait );
			}
		};
	};

	function menuDropdownToggle() {
		$( '.main-navigation .page_item_has_children > a, .main-navigation .menu-item-has-children > a, .widget_nav_menu .page_item_has_children > a, .widget_nav_menu .menu-item-has-children > a' ).each( function() {
			if ( ! $( this ).find( '.dropdown-toggle' ).length ) {
				$( this ).append( '<button class="dropdown-toggle" aria-expanded="false"/>' );
			}
		} );

		if ( $( window ).width() > 959 ) {
			$( '.main-navigation .dropdown-toggle' ).remove();
		}
	}

	$( window ).load( menuDropdownToggle ).resize( debounce( menuDropdownToggle, 500 ) );

	$( window ).load( function() {
		var menu = $( '#masthead' ).find( 'div' );
		if ( ! menu || ! menu.children().length ) {
			return;
		}

		$( '.dropdown-toggle' ).click( function( event ) {
			event.preventDefault();
			$( this ).toggleClass( 'toggled' );
			$( this ).parent().next( '.children, .sub-menu' ).toggleClass( 'toggled' );
			$( this ).attr( 'aria-expanded', $( this ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		} );

		if ( 'ontouchstart' in window ) {
			menu.find( '.menu-item-has-children > a' ).on( 'touchstart', function( e ) {
				var el = $( this ).parent( 'li' );

				if ( ! el.hasClass( 'focus' ) ) {
					e.preventDefault();
					el.toggleClass( 'focus' );
					el.siblings( '.focus' ).removeClass( 'focus' );
				}
			} );
		}

		menu.find( 'a' ).on( 'focus blur', function() {
			$( this ).parents( '.menu-item' ).toggleClass( 'focus' );
		} );
	} );

} )( jQuery );

( function() {

	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}
	menu.setAttribute( 'aria-expanded', 'false' );

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};
	
	
	// Keyboard accessibility
	const  focusableElements =
		'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
	const modal = document.querySelector( '#site-navigation' );
	const firstFocusableElement = modal.querySelectorAll( focusableElements )[0];
	const focusableContent = modal.querySelectorAll( focusableElements );
	const lastFocusableElement = focusableContent[focusableContent.length - 1];
	
	document.addEventListener( 'keydown', function( e ) {
		let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
	
		if ( !isTabPressed ) {
			return;
		}
	
		if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
			if ( document.activeElement === firstFocusableElement ) {
				lastFocusableElement.focus(); // add focus for the last focusable element
				e.preventDefault();
			}
		} else { // if tab key is pressed
			if ( document.activeElement === lastFocusableElement ) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
				firstFocusableElement.focus(); // add focus for the first focusable element
				e.preventDefault();
			}
		}
	});

} )();
