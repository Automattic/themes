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

	function authorInfo() {
		var authorInfo = $( '.author-info' );
		if ( authorInfo.length ) {
			if ( $( window ).width() > 959 ) {
				authorInfo.prependTo( '.widget-area' );
			} else {
				authorInfo.insertAfter( '.entry-content' );
			}
		}
	}

	$( window ).load( authorInfo ).resize( debounce( authorInfo, 500 ) );

	$( window ).load( function() {
		// Move Sharedaddy & Related Posts
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
	} );

} )( jQuery );
