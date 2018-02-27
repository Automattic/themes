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

	function headerStyle() {
		var featuredContent, featuredContentHeight;

		featuredContent = $( '#featured-content' );
		featuredContentHeight = 0;
		if ( featuredContent.length ) {
			featuredContentHeight = featuredContent.outerHeight();
		}

		if ( $( '.site-branding' ).outerWidth() === 0 ) {
			$( 'body' ).addClass( 'no-branding' );
		} else {
			$( 'body' ).removeClass( 'no-branding' );
		}

		if ( $( '.site-branding' ).outerWidth() + $( '.main-navigation' ).outerWidth() + 15 >= $( '.site-header-inner' ).outerWidth() && $( window ).width() > 839 ) {
			$( 'body' ).addClass( 'long-menu' );
			$( '.main-navigation' ).css( 'margin-top', '' );
		} else if ( $( window ).width() < 840 ) {
			$( 'body' ).removeClass( 'long-menu' );
			$( '.main-navigation' ).css( 'margin-top', '' );
		} else {
			$( 'body' ).removeClass( 'long-menu' );
			$( '.main-navigation' ).css( 'margin-top', ( $( '.site-header' ).height() - $( '.main-navigation' ).outerHeight() ) / 2 );
		}

		$( window ).scroll( function() {
			if ( $( document.body ).hasClass( 'unfixed-header' ) ) {
				return;
			}

			if ( $( document ).scrollTop() > featuredContentHeight && $( window ).width() > 959 ) {
				$( document.body ).addClass( 'fixed' ).css( 'padding-top', $( '#masthead' ).outerHeight() );
			} else {
				$( document.body ).removeClass( 'fixed' ).css( 'padding-top', '' );
			}
		} );
	}

	$( window ).load( headerStyle ).resize( debounce( headerStyle, 500 ) );

} )( jQuery );
