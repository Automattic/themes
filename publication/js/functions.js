( function( $ ) {

	var $body        = $( document.body ),
	    $window      = $( window ),
	    hero         = $( '.hero' ),
	    header       = $( '#masthead' ),
	    sidebar      = $( '#secondary' ),
	    searchSubmit = $( '.search-submit' ),
	    resizeTimer;

	// Add dropdown toggle that display child menu items.
	$( '.main-navigation .menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

	// Toggle buttons and submenu items with active children menu items.
	$( '.main-navigation .current-menu-ancestor > a' ).addClass( 'toggled' );
	$( '.main-navigation .current-menu-ancestor > button' ).addClass( 'toggled' );
	$( '.main-navigation .current-menu-ancestor > .sub-menu' ).addClass( 'toggled' );

	// Click on dropdown toggle.
	$( '.dropdown-toggle' ).click( function( e ) {
		var _this = $( this );
		e.preventDefault();
		_this.toggleClass( 'toggled' );
		_this.prev( 'a' ).toggleClass( 'toggled' );
		_this.next( '.children, .sub-menu' ).toggleClass( 'toggled' );
		_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		_this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
		$window.resize();
	} );

	function searchAddClass() {
		$( this ).closest( '.search-form' ).addClass( 'hover' );
	}
	function searchRemoveClass() {
		$( this ).closest( '.search-form' ).removeClass( 'hover' );
	}
	searchSubmit.hover( searchAddClass, searchRemoveClass );
	searchSubmit.focusin( searchAddClass );
	searchSubmit.focusout( searchRemoveClass );

	// Make Featured image full-screen.
	function heroFullScreen() {
		var toolbarHeight, heroHeight, headerHeight, windowWidth, hentryInnerCalc;

		if ( ! hero.length ) {
			return;
		}

		toolbarHeight      = $body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;
		heroHeight         = $window.height();
		headerHeight       = header.outerHeight() + toolbarHeight;
		heroHeightNoHeader = heroHeight - headerHeight;
		windowWidth        = $window.innerWidth();
		hentryInnerCalc    = hero.find( '.hentry-inner' ).height() + headerHeight;

		if ( $window.height() < hentryInnerCalc ) {
			heroHeight         = hentryInnerCalc;
			heroHeightNoHeader = hentryInnerCalc - headerHeight;
		}

		if ( windowWidth >= 768 ) {
			hero.css( {
				'height': heroHeight + 'px',
				'margin-top': '-' + headerHeight + 'px',
				'padding-top': headerHeight + 'px',
			} );
		} else if ( windowWidth >= 540 ) {
			hero.css( {
				'height': heroHeight + 'px',
				'margin-top': '-' + headerHeight + 'px',
				'padding-top': headerHeight + 'px',
			} );
		} else {
			hero.css( {
				'height': '',
				'margin-top': '-' + headerHeight + 'px',
				'padding-top': headerHeight + 'px',
			} );
		}

		if ( ! sidebar.length ) {
			return;
		}

		if ( windowWidth >= 1056 ) {
			sidebar.css( {
				'margin-top': heroHeightNoHeader + 'px'
			} );
		} else {
			sidebar.removeAttr( 'style' );
		}

	}

	function contentHeight() {
		var toolbarHeight     = $body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0,
		    screenHeight      = $window.height() - toolbarHeight,
		    elementsHeight    = header.outerHeight() + $( '#colophon' ).outerHeight();

		$( '#content' ).css( {
			'min-height': screenHeight - elementsHeight + 'px'
		} );
	}

	function moveSidebar() {

		//First check if sidebar 1 or 2 exist at all.
		if ( ! $( '#sidebar-1' ).length && ! $( '#sidebar-2' ).length ) {
			return;
		}

		// Check if we're on desktop or mobile. The sidebars are initially rendered in the mobile location.
		if ( $window.width() >= 1056 ) {
			// Check if sidebar 2 exists in the mobile location, if so then move.
			if ( $( '#tertiary #sidebar-2' ).length ) {
				$( "#sidebar-2" ).prependTo( $( "#secondary" ) );
			}
			// Check if sidebar 1 exists in the mobile location, if so then move.
			if ( $( '#tertiary #sidebar-1' ).length ) {
				$( "#sidebar-1" ).prependTo( $( "#secondary" ) );
			}
		} else {
			// Check if sidebar 2 exists in the desktop location, if so then move.
			if ( $( '#secondary #sidebar-2' ).length ) {
				$( "#sidebar-2" ).prependTo( $( "#tertiary" ) );
			}
			// Check if sidebar 1 exists in the desktop location, if so then move.
			if ( $( '#secondary #sidebar-1' ).length ) {
				$( "#sidebar-1" ).prependTo( $( "#tertiary" ) );
			}
		}

	}

	$window.load( function() {
		$( 'html' ).addClass( 'js' );

		// Move Sharedaddy & Related Posts.
		var sharedaddy = $( '.sd-sharing-enabled:not(#jp-post-flair), .sd-like.jetpack-likes-widget-wrapper, .sd-rating' ),
		    relatedPosts = $( '#jp-relatedposts' );
		if ( sharedaddy.length ) {
			sharedaddy.appendTo( '.entry-footer' );
		}
		if ( relatedPosts.length ) {
			$( "#jp-post-flair" ).insertAfter( '.entry-footer' );
		}

		// Make sure tables don't overflow in Entry Content.
		$( '.entry-content' ).find( 'table' ).each( function() {
			if ( $( this ).width() > $( this ).parent().width() ) {
				$( this ).css( 'table-layout', 'fixed' );
			}
		} );

		// Remove box-shadow from linked images.
		$( '.entry-content a, .comment-content a' ).each( function() {
			$( this ).has( 'img' ).addClass( 'is-image' );
		} );

		$window
			.on( 'resize.publication', function() {
				clearTimeout( resizeTimer );
				resizeTimer = setTimeout( function() {
					heroFullScreen();
					contentHeight();
				}, 300 );
				moveSidebar();
			} );

		heroFullScreen();
		contentHeight();

		for ( var i = 1; i < 4; i++ ) {
			setTimeout( heroFullScreen, 100 * i );
			setTimeout( contentHeight, 100 * i );
		}
	} );

	// After DOM is ready
    $( document ).ready( function() {
		moveSidebar();
	} );

} )( jQuery );
