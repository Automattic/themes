/* global photosScreenReaderText */
( function( $ ) {

	var body, header, menuToggle, siteNavContain, siteNavigation, siteBranding, resizeTimer;

	header         = $( '#masthead' );
	menuToggle     = header.find( '.menu-toggle' );
	siteNavigation = header.find( '.main-navigation' );
	siteBranding   = header.find( '.site-branding' );

	// Enable menuToggle.
	( function() {
		// Return early if menuToggle is missing.
		if ( ! menuToggle.length ) {
			return;
		}

		// Add an initial value for the attribute.
		menuToggle.attr( 'aria-expanded', 'false' );

		menuToggle.on( 'click', function() {
			$( this ).toggleClass( 'toggled-on' );
			header.toggleClass( 'overlay' );
			siteNavigation.toggleClass( 'toggled-on' );

			$( this ).attr( 'aria-expanded', siteNavigation.hasClass( 'toggled-on' ) );
		} );
	} )();

	// Checks if the action bar is visible at the bottom of the screen
	checkactionbar = function() {
		if ( 'none' == menuToggle.css( 'display' ) ) return;

		if ( $( '#actionbar' ).length ){
			if ( ! $( '#actionbar' ).hasClass( 'actnbr-hidden' ) ) {
				menuToggle.addClass( 'actnbr-visible' );
			} else {
				menuToggle.removeClass( 'actnbr-visible' );
			}
		}
	};

	setInterval( checkactionbar, 200 );

	// Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
	( function() {
		if ( ! siteNavigation.length || ! siteNavigation.children().length ) {
			return;
		}

		// Toggle `focus` class to allow submenu access on tablets.
		function toggleFocusClassTouchScreen() {
			if ( 'none' === $( '.menu-toggle' ).css( 'display' ) ) {

				$( document.body ).on( 'touchstart', function( e ) {
					if ( ! $( e.target ).closest( '.main-navigation li' ).length ) {
						$( '.main-navigation li' ).removeClass( 'focus' );
					}
				} );

				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a, .menu-item.site-header-cart > a' )
					.on( 'touchstart', function( e ) {
						var el = $( this ).parent( 'li' );

						if ( ! el.hasClass( 'focus' ) ) {
							e.preventDefault();
							el.toggleClass( 'focus' );
							el.siblings( '.focus' ).removeClass( 'focus' );
						}
					} );

			} else {
				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a, .menu-item.site-header-cart > a' ).unbind( 'touchstart' );
			}
		}

		if ( 'ontouchstart' in window ) {
			$( window ).on( 'resize', toggleFocusClassTouchScreen );
			toggleFocusClassTouchScreen();
		}

		siteNavigation.find( 'a' ).on( 'focus blur', function() {
			$( this ).parents( '.menu-item, .page_item' ).toggleClass( 'focus' );
		} );
	} )();

	// Initiate navigation.
	function initMainNavigation( container ) {
		// Add dropdown toggle that displays child menu items.
		var dropdownToggle = $( '<button />', { 'class': 'dropdown-toggle', 'aria-expanded': false })
			.append( photosScreenReaderText.icon )
			.append( $( '<span />', { 'class': 'screen-reader-text', text: photosScreenReaderText.expand } ) );

		container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).after( dropdownToggle );

		// Set the active submenu dropdown toggle button initial state.
		container.find( '.current-menu-ancestor > button' )
			.addClass( 'toggled-on' )
			.attr( 'aria-expanded', 'true' )
			.find( '.screen-reader-text' )
			.text( photosScreenReaderText.collapse );
		// Set the active submenu initial state.
		container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

		container.find( '.dropdown-toggle' ).click( function( e ) {
			var _this = $( this ),
				screenReaderSpan = _this.find( '.screen-reader-text' );

			e.preventDefault();
			_this.toggleClass( 'toggled-on' );
			_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );

			_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );

			screenReaderSpan.text( screenReaderSpan.text() === photosScreenReaderText.expand ? photosScreenReaderText.collapse : photosScreenReaderText.expand );
		} );
	}

	// Change dropdown direction depending on the width.
	function dropdownDirection() {
		var innerHeader = siteNavigation.outerWidth() + siteBranding.outerWidth();

		if ( innerHeader <= header.width() ) {
			body.addClass( 'menu-direction-left' );
		} else {
			body.removeClass( 'menu-direction-left' );
		}
	}

	$( document ).ready( function() {
		body = $( document.body );

		$( window )
			.on( 'load', function() {
				initMainNavigation( $( '.main-navigation' ) );
				dropdownDirection();
			} )
			.on( 'resize', function() {
				clearTimeout( resizeTimer );
				resizeTimer = setTimeout( function() {
					dropdownDirection();
				}, 500 );
			} );
	} );

	$( document ).on( 'customize-preview-menu-refreshed', function( e, params ) {
		if ( 'menu-1' === params.wpNavMenuArgs.theme_location ) {
			$( document.body ).resize();
		}
	} );

} )( jQuery );
