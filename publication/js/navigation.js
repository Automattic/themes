(function( $ ) {

	var $body         = $( document.body ),
	    $window       = $( window ),
	    bodyWrapper   = $( '#body-wrapper' ),
	    header        = $( '#masthead' ),
	    slideMenu     = $( '#slide-menu' ),
	    menuToggle    = $( '.menu-toggle' ),
	    menuWrapper   = $( '.menu-wrapper' ),
	    resizeTimer;

	if ( ! slideMenu.length ) {
		return;
	}

	function menuSlide() {
		menuToggle.attr( {
			'role': 'button',
			'aria-controls': 'menu-wrapper',
			'aria-expanded': 'false'
		} );

		// Do this on open.
		var openMenu = function() {
			menuToggle.attr( {
				'aria-expanded': 'true'
			} );
			menuWrapper.attr( {
				'aria-expanded': 'true',
				'tabindex': '-1'
			} );
		};

		// Do this on close.
		var closeMenu = function() {
			menuToggle.attr( {
				'aria-expanded': 'false'
			} );
			menuWrapper.attr( {
				'aria-expanded': 'false'
			} );
			menuWrapper.removeAttr(
				'tabindex'
			);
			bodyWrapper.removeAttr(
				'style'
			);
		};

		// Toggle all the things on click.
		menuToggle.on( 'click', function( e ) {
			e.preventDefault();
			$body.toggleClass( 'menu-open' );
			$( this ).toggleClass( 'toggled' );
			$( this ).attr( 'aria-expanded' ) == 'true' ? closeMenu() : openMenu();
		} );

		// Close with escape key.
		$( document ).keyup( function( e ) {
			if ( e.keyCode === 27 && $body.hasClass( 'menu-open' ) ) {
				$body.removeClass( 'menu-open' );
				menuToggle.toggleClass( 'toggled' );
				closeMenu();
			}
		} );
	}

	function menuFocus() {
		// Get all the elements in there.
		var o = slideMenu.find( '*' );

		// Store only the elements that would be focusable.
		var focuasable = '#slide-menu a[href], #slide-menu area[href], #slide-menu input:not([disabled]), #slide-menu select:not([disabled]), #slide-menu textarea:not([disabled]), #slide-menu button:not([disabled]), #slide-menu iframe, #slide-menu object, #slide-menu embed, #slide-menu *[tabindex], #slide-menu *[contenteditable]';

		// Now, filter through all the elements and get the first focusable item that's visisble.
		var firstFocusable = o.filter( focuasable ).filter(':visible').first();

		// Now, filter through all the elements and get the last focusable item that's visisble.
		var lastFocusable = o.filter( focuasable ).filter(':visible').last();

		// At end of slide menu block, return focus to navigation menu toggle.
		$( lastFocusable ).on( 'keydown', function( e ) {
			if ( e.keyCode === 9 ) {
				if ( ! e.shiftKey ) {
					e.preventDefault();
					menuToggle.focus();
				}
			}
		} );

		// At start of slide menu block, refocus navigation menu toggle on SHIFT+TAB.
		$( '#site-navigation li:first a' ).on( 'keydown', function( e ) {
			if ( e.keyCode === 9 ) {
				if ( e.shiftKey ) {
					e.preventDefault();
					menuToggle.focus();
				}
			}
		} );

		// If the menu/sidebar is visible, always TAB into it from the menu button.
		$( '.menu-toggle[aria-expanded]' ).on( 'keydown', function( e ) {
			if ( e.keyCode === 9 ) {
				if ( $( this ).attr( 'aria-expanded' ) == 'true' ) {
					if ( ! e.shiftKey ) {
						e.preventDefault();
						$( firstFocusable ).focus();
					} else {
						if ( e.shiftKey ) {
							e.preventDefault();
							$( '#masthead' ).attr( 'tabindex', '-1' ).focus();
						}
					}
				}
			}
		} );

		// Shift focus to slide container, if open.
		menuToggle.on( 'click', function() {
			if ( $( this ).attr( 'aria-expanded' ) == 'true' ) {
				$( '#slide-menu' ).focus();
			}
		} );
	}

	function menuResponsive() {
		var bodyWrapperHeight = function() {
			bodyWrapper.css( {
				'height': slideMenu.outerHeight() + 'px',
			} );
		};

		if ( $body.hasClass( 'menu-open' ) ) {
			bodyWrapperHeight();
		}

		// Toggle #body-wrapper height
		menuToggle.on( 'click', function( e ) {
			e.preventDefault();
			if ( $body.hasClass( 'menu-open' ) ) {
				bodyWrapperHeight();
			}
		} );

		var closeMenu = function() {
			menuToggle.attr( {
				'aria-expanded': 'false'
			} );
			menuWrapper.attr( {
				'aria-expanded': 'false'
			} );
			menuWrapper.removeAttr(
				'tabindex'
			);
			bodyWrapper.removeAttr(
				'style'
			);
		};

		// Make sure #slide-menu is closed when menus are missing
		if ( $window.width() > 1056 && $body.hasClass( 'no-menu' ) ) {
			$body.removeClass( 'menu-open' );
			menuToggle.removeClass( 'toggled' );
			closeMenu();
		}
	}

	$window.load( function() {
		$window.on( 'resize.publication', function() {
			clearTimeout( resizeTimer );
			resizeTimer = setTimeout( function() {
				menuResponsive();
			}, 300 );
		} );

		menuSlide();
		menuFocus();
		menuResponsive();

		for ( var i = 1; i < 4; i++ ) {
			setTimeout( menuResponsive, 100 * i );
		}
	} );

} )( jQuery );
