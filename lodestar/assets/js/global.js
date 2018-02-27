( function( $ ) {

	var $header = $( '.header-top:first' ),
		$headerHeight = $( '.header-top' ).innerHeight(),
		$headerOffset = $( '.custom-header' ).innerHeight(),
		$headerHiddenClass = 'site-header-hidden',
		$headerFixedClass = 'site-header-fixed',

		$navigation = $( '.main-navigation' ),
		$navMenuItem = $navigation.find( '.menu-item' ),
		navigationHeight,
		navigationOuterHeight,
		navPadding,
		navMenuItemHeight,
		idealNavHeight,
		navIsNotTooTall;


	// adjust header margin based on height of menu
	function adjustHeaderMargin(){

		// check to see if on mobile by checking menu-toggle display
		if ( 'none' === $( '.menu-toggle').css( 'display') ) {

			// Don't define this 'til we're using it, it may change
			$headerHeight = $( '.header-top' ).innerHeight();

			// if yes, we want to bump the custom header down a bit, so the menu doesn't cut it off
			$( '.custom-header-image').css( 'margin-top', $headerHeight );
		}
	}

	// Make sure the nav isn't taller than two rows
	navigationHeight  = $navigation.height();
	navMenuItemHeight = $navMenuItem.outerHeight() * 3;
	idealNavHeight    = navMenuItemHeight;
	navIsNotTooTall   = navigationHeight <= idealNavHeight;

	//we add the scroll class to the navs
	function adjustScrollClass() {
		// Make sure we're not on a mobile screen
		if ( 'none' === $( '.menu-toggle').css( 'display') ) {
			if ( $( window ).scrollTop() <= $headerOffset && $header.hasClass( $headerFixedClass ) ) {
				$header.removeClass( $headerFixedClass );
				$header.addClass( $headerHiddenClass );

			} else if ( $( window ).scrollTop() >= $headerOffset ) { //If the scroll is more than the custom header

				// Make sure the menu is not too tall
				if ( navIsNotTooTall || navMenuItemHeight == 0 ) {

					// Don't define this 'til we're using it, it may change
					$headerHeight = $( '.header-top' ).innerHeight( true );

					// If not, fix that header!
					$header.addClass( $headerFixedClass );
					$header.removeClass( $headerHiddenClass );
					$( '.custom-header' ).css( 'margin-top', $headerHeight );
				}

			} else {
				//If not we remove it
				$header.removeClass( $headerFixedClass );
				$header.removeClass( $headerHiddenClass );
				$( '.custom-header' ).css( 'margin-top', 'auto' );
			}
		}
	}

	// Check to see if iOS device
	// iOS devices make a mess of background-attachment: fixed and background-size: cover

	function checkiOS() {
		return /iPad|iPhone|iPod/.test(navigator.userAgent) && ! window.MSStream;
	}

	/*
	* Test if background-attachment: fixed is supported.
	* @link http://stackoverflow.com/questions/14115080/detect-support-for-background-attachment-fixed
	*/
	function supportsFixedBackground() {
		var el = document.createElement('div'),
		isSupported;

		try {
			if ( ! ( 'backgroundAttachment' in el.style ) || checkiOS() ) {
				return false;
			}
			el.style.backgroundAttachment = 'fixed';
			isSupported = ( 'fixed' === el.style.backgroundAttachment );
			return isSupported;
		}
		catch (e) {
			return false;
		}
	}

	// Let's fire some JavaScript!
	$( document ).ready( function() {
		// On load, we want to adjust the header margin
		adjustHeaderMargin();
		adjustScrollClass();

		// We also want to check the device, and add a class if not iOS:
		if ( false === supportsFixedBackground() ) {
			document.documentElement.className += ' no-background-fixed';
		}
	} );

	// On scroll, we want to stick/unstick the header
	$( window ).on( 'scroll', function() {
		adjustScrollClass();
	} );

	// we also want to do the same on window rezize
	$( window ).on( 'resize', function() {
		setTimeout( adjustHeaderMargin, 500 );
	} );

	// Use mutant observer to check when .wf-active is added to theme for Custom Fonts.
	// That way we can make sure the header is the correct height when it happens.
	var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

    $.fn.attrchange = function(callback) {
        if (MutationObserver) {
            var options = {
                subtree: false,
                attributes: true
            };

            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(e) {
                    callback.call(e.target, e.attributeName);
                });
            });

            return this.each(function() {
                observer.observe(this, options);
            });
        }
    }

	$( 'html' ).attrchange( function( attrName ) {
		if( attrName == 'class' && $( 'html').hasClass( 'wf-active' ) ) {
			adjustHeaderMargin();
		}
	} );

} )( jQuery );
