/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

/* global altoFocusScreenReaderText */
( function( $ ) {

	var body,
		masthead           = $( '#masthead' ),
		menuToggle         = masthead.find( '.menu-toggle' ),
		siteMenu           = masthead.find( '.top-navigation' ),
		siteNavigation     = masthead.find( '.top-navigation > div' ),
		siteBrandingHeight = masthead.find( '.site-branding-wrap' ).outerHeight(),
		topNavigation      = $( '.top-navigation' );

	/**
	 * Initialize the main navigation
	 */
	function initMainNavigation( container ) {

		// Add parent class to sub-menu parent items
		container.find( '.sub-menu, .children' ).parents( 'li' ).addClass( 'menu-item-has-children' );

		// Add dropdown toggle button
		var dropdownToggle = $( '<button />', {
				'class': 'dropdown-toggle',
				'aria-expanded': false
			} ).append( $( '<span />', {
				'class': 'screen-reader-text',
				text: altoFocusScreenReaderText.expand
			})).append( '<span class="meta-nav" aria-hidden="true"><svg class="dropdown-icon dropdown-icon-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"><polyline class="line" points="2.5,3.8 5,6.2 7.5,3.8 "/></svg><svg class="dropdown-icon dropdown-icon-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"><line class="line" x1="2.5" y1="7.5" x2="7.5" y2="2.5"/><line class="line" x1="2.5" y1="2.5" x2="7.5" y2="7.5"/></svg></span>' );

		container.find( '.menu-item-has-children > a' ).after( dropdownToggle );

		// Change menu items with submenus to aria-haspopup="true".
		container.find( '.menu-item-has-children' ).attr( 'aria-haspopup', 'true' );

		// Drop down toggle setup
		container.find( '.dropdown-toggle' ).click( function( e ) {

			var _this            = $( this ),
			    otherSubMenus    = _this.parents( '.menu-item-has-children' ).siblings( '.menu-item-has-children' ),
			    screenReaderSpan = _this.find( '.screen-reader-text' );

			// Disable default behavior
			e.preventDefault();

			// Stop click outside area function
			e.stopPropagation();

			// Reveal sub-menus
			_this.not( '.menu-toggle' ).toggleClass( 'toggled-on' );
			_this.not( '.menu-toggle' ).parent().toggleClass( 'toggled-on' );
			_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );

			// Close other sub-menus if they're open
			otherSubMenus.removeClass( 'toggled-on' );
			otherSubMenus.find( '.toggled-on' ).removeClass( 'toggled-on' );

			// jscs:disable
			_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			// jscs:enable

			// Update screen reader text
			screenReaderSpan.text( altoFocusScreenReaderText.text() === altoFocusScreenReaderText.expand ? altoFocusScreenReaderText.collapse : altoFocusScreenReaderText.expand );

		} );

		// Navigation height should never be shorter than site branding height
		container.css( "min-height", siteBrandingHeight );

		// Close sub-menus when click outside of menus
		$( 'html' ).click( function() {

			container.find( '.toggled-on' ).removeClass( 'toggled-on' );
		});

		// Close expanded sub-menus when clicking links
		container.find( 'a' ).click( function( e ) {

			var _this         = $( this ),
				anchor        = _this.attr( 'href' ),
				otherSubMenus = container.find( '.toggled-on' );

			//console.log(anchor);
			e.preventDefault();

			otherSubMenus.removeClass( 'toggled-on' ).attr( 'aria-expanded', 'false' ).attr( 'aria-haspopup', 'false' );

			window.location.href = anchor;

		} );
	}

	/**
	 * Enable menuToggle
	 */
	function enableMenuToggle() {

		// Return early if menuToggle is missing.
		if ( ! menuToggle.length ) {

			return;
		}

		// Add an initial values for the attribute.
		menuToggle.add( siteNavigation ).attr( 'aria-expanded', 'false' );

		menuToggle.on( 'click.altofocus', function() {

			$( this ).toggleClass( 'toggled-on' );

			$( this ).add( siteMenu ).add( siteNavigation ).toggleClass( 'toggled-on' );

			// jscs:disable
			$( this ).add( siteMenu ).add( siteNavigation ).attr( 'aria-expanded', $( this ).add( siteNavigation ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			// jscs:enable
		} );
	}

	/**
	 * Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility
	 */
	function addTouchSupport() {

		if ( ! siteNavigation.length || ! siteNavigation.children().length ) {

			return;
		}

		// Toggle `focus` class to allow submenu access on tablets.
		function toggleFocusClassTouchScreen() {

			//	if ( window.innerWidth >= 896 ) {
			$( document.body ).on( 'touchstart.altofocus', function( e ) {

				if ( ! $( e.target ).closest( '.top-navigation li' ).length ) {

					$( '.top-navigation li' ).removeClass( 'focus' );
				}
			} );

			siteNavigation.find( '.menu-item-has-children > a' ).on( 'touchstart.altofocus', function( e ) {

				var el = $( this ).parent( 'li' );

				if ( ! el.hasClass( 'focus' ) ) {

					e.preventDefault();
					el.toggleClass( 'focus' );
					el.siblings( '.focus' ).removeClass( 'focus' );
				}
			} );
		}

		if ( 'ontouchstart' in window ) {

			$( window ).on( 'resize.altofocus', toggleFocusClassTouchScreen );
			toggleFocusClassTouchScreen();
		}

		siteNavigation.find( 'a' ).on( 'focus.altofocus blur.altofocus', function() {

			$( this ).parents( '.menu-item' ).toggleClass( 'focus' );
		} );
	}

	/**
	 * Add the default ARIA attributes for the menu toggle and the navigations
	 */
	function onResizeARIA() {

		if ( window.innerWidth < 896 ) {

			if ( menuToggle.hasClass( 'toggled-on' ) ) {

				menuToggle.attr( 'aria-expanded', 'true' );
				siteMenu.attr( 'aria-expanded', 'true' );
				siteNavigation.attr( 'aria-expanded', 'true' );

			} else {

				menuToggle.attr( 'aria-expanded', 'false' );
				siteMenu.attr( 'aria-expanded', 'false' );
				siteNavigation.attr( 'aria-expanded', 'false' );
			}

		} else {

			menuToggle.removeAttr( 'aria-expanded' );
			siteMenu.removeAttr( 'aria-expanded' );
			siteNavigation.removeAttr( 'aria-expanded' );
		}
	}

	/**
	 * Re-initialize the main navigation when it is updated in the customizer
	 * - Borrowed from twentysixteen: https://goo.gl/O6msL1
	 */
	$( document ).on( 'customize-preview-menu-refreshed', function( e, params ) {

		if ( 'menu-1' === params.wpNavMenuArgs.theme_location ) {

			initMainNavigation( params.newContainer );
		}
	});

	/**
	 * Execute functions
	 */
	$( document )
		.ready( initMainNavigation( topNavigation ) )
		.ready( enableMenuToggle )
		.ready( addTouchSupport )
		.ready( function() {

			body = $( document.body );

			$( window )
				.on( 'load.altofocus', onResizeARIA )
				.on( 'resize.altofocus', onResizeARIA );
		});

} )( jQuery );
