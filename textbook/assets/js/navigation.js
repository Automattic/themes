/* global textBookScreenReaderText, textBookMenuToggleText */
( function( $ ) {

	var body, masthead, menuToggle, siteMenu, siteNavigation;

	masthead          = $( '#masthead' );
	siteMenu          = masthead.find( '.main-navigation' );
	menuToggle        = masthead.find( '.menu-toggle' );
	siteNavigation    = masthead.find( '.main-navigation > div' );

	function initMainNavigation( container ) {

		// Create dropdown toggle that displays child menu items.
		var dropdownToggle = $( '<button />', {
			'class': 'dropdown-toggle',
			'aria-expanded': false,
			'tabindex': -1
		} ).append( $( '<span />', {
			'class': 'screen-reader-text',
			text: textBookScreenReaderText.expand
		} ) ).append( $( '<svg x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" xml:space="preserve"><polygon points="13,7 9,7 9,3 7,3 7,7 3,7 3,9 7,9 7,13 9,13 9,9 13,9 "/></svg>' ) );

		// Add dropdown toggle to menu items with children.
		container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).after( dropdownToggle );

		// Toggle buttons and submenu items with active children menu items.
		container.find( '.current-menu-ancestor > button, .current_page_ancestor > button' ).addClass( 'toggled-on' );
		container.find( '.current-menu-ancestor > ul, .current_page_ancestor > ul' ).addClass( 'toggled-on' );

		// Add aria-haspopup="true" to menu items with submenus.
		container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).attr( 'aria-haspopup', 'true' );
		container.find( '.menu-item-has-children > ul, .page_item_has_children > ul' ).attr( 'aria-hidden', 'true' );

		// Click actions for dropdown toggle.
		container.find( '.dropdown-toggle' ).click( function( e ) {
			var _this            = $( this ),
				textBookScreenReaderSpan = _this.find( '.screen-reader-text' );

			// Disable default click actions.
			e.preventDefault();

			// Make sure submenus get collapsed when parent submenus are collapsed.
			if ( _this.hasClass( 'toggled-on' ) && _this.next( '.children, .sub-menu' ).hasClass( 'toggled-on' ) ) {
				_this.removeClass( 'toggled-on' );
				_this.next( '.children, .sub-menu' ).removeClass( 'toggled-on' )
					.find( '.children, .sub-menu, .dropdown-toggle' ).removeClass( 'toggled-on' );
			} else {
				_this.addClass( 'toggled-on' );
				_this.next( '.children, .sub-menu, .children .children, .sub-menu .sub-menu' ).addClass( 'toggled-on' );
			}

			// jscs:disable
			_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			// jscs:enable

			// Update screen reader text.
			textBookScreenReaderSpan.text( textBookScreenReaderSpan.text() === textBookScreenReaderText.expand ? textBookScreenReaderText.collapse : textBookScreenReaderText.expand );
		} );
	}
	initMainNavigation( siteMenu );

	/*
	 * Add separators to split menu items horizontally
	 */
	function addNavigationSeparators( container ) {

		// Count how many top-level menus exist.
		var siteMenuItemCount = container.children( 'div' ).eq( 0 ).find( '> ul > .menu-item, > ul > .page_item' ).length;

		if ( siteMenuItemCount >= 6 ) { // If there are more than 5 menu items, add visual separators to menus.
			container.addClass( 'add-seperators' );
		} else { // otherwise, remove visual separators to menus.
			container.removeClass( 'add-seperators' );
		}
	}
	addNavigationSeparators( siteMenu );

	/**
	 * Re-initialize the main navigation when it is updated in the customizer.
	 *
	 * Borrowed from twentysixteen.
	 *
	 * @link https://goo.gl/O6msL1
	 */
	$( document ).on( 'customize-preview-menu-refreshed', function( e, params ) {
		if ( 'header' === params.wpNavMenuArgs.theme_location ) {
			initMainNavigation( params.newContainer );
			// Add separators to live customizer preview
			addNavigationSeparators( params.newContainer.parents('nav') );
		}
	});

	// Enable menuToggle.
	( function() {

		// Return early if menuToggle is missing.
		if ( ! menuToggle.length ) {
			return;
		}

		// Add an initial values for the attribute.
		menuToggle.add( siteNavigation ).attr( 'aria-expanded', 'false' );

		menuToggle.on( 'click.textbook', function() {
			var _this = $( this );
			_this.add( siteMenu ).add( siteNavigation ).toggleClass( 'toggled-on' );
			// jscs:disable
			_this.add( siteMenu ).add( siteNavigation ).attr( 'aria-expanded', _this.add( siteNavigation ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			// jscs:enable
			_this.text( _this.text() === textBookMenuToggleText.menu ? textBookMenuToggleText.close : textBookMenuToggleText.menu );
		} );
	} )();

	// Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
	( function() {

		if ( ! siteNavigation.length || ! siteNavigation.children().length ) {
			return;
		}

		// Toggle `focus` class to allow submenu access on tablets.
		function toggleFocusClassTouchScreen() {
			if ( window.innerWidth >= 896 ) {
				$( document.body ).on( 'touchstart.textbook', function( e ) {
					if ( ! $( e.target ).closest( '.main-navigation li' ).length ) {
						$( '.main-navigation li' ).removeClass( 'focus' );
					}
				} );
				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a' ).on( 'touchstart.textbook', function( e ) {
					var el = $( this ).parent( 'li' );

					if ( ! el.hasClass( 'focus' ) ) {
						e.preventDefault();
						el.toggleClass( 'focus' );
						el.siblings( '.focus' ).removeClass( 'focus' );
					}
				} );
				siteNavigation.find( 'button' ).attr( 'tabindex', '-1' );
			} else {
				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a' ).unbind( 'touchstart.textbook' );
				siteNavigation.find( 'button' ).removeAttr( 'tabindex' );
			}
		}

		if ( 'ontouchstart' in window ) {
			$( window ).on( 'resize.textbook', toggleFocusClassTouchScreen );
			toggleFocusClassTouchScreen();
		}

		siteNavigation.find( 'a' ).on( 'focus.textbook blur.textbook', function() {
			$( this ).parents( '.menu-item, .page_item' ).toggleClass( 'focus' );
		} );
	} )();

	// Add the default ARIA attributes for the menu toggle and the navigations.
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

	$( document ).ready( function() {
		body = $( document.body );

		$( window )
			.on( 'load.textbook', onResizeARIA )
			.on( 'resize.textbook', onResizeARIA );
	} );

} )( jQuery );
