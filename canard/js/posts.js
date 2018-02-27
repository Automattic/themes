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

	function postsStyles() {
		var marginSize = 30;
		if ( $( window ).width() > 599 ) {
			marginSize = 60;
		}
		$( '.site-main .hentry' ).each( function() {
			if ( $( this ).hasClass( 'has-post-thumbnail' ) && ( $( this ).hasClass( 'format-image' ) || $( this ).hasClass( 'format-gallery' ) ) && ! $( this ).parent().hasClass( 'featured-content' ) ) {
				var postThumbnail = $( this ).find( '.post-thumbnail' ),
				    thumbnail = $( this ).find( 'img' );
				postThumbnail.css( {
					'background-image': 'url(' + thumbnail.attr( 'src' ) + ')',
					'height': $( this ).outerHeight() - marginSize
				} );
			}
		} );
	}

	$( window ).load( postsStyles ).resize( debounce( postsStyles, 500 ) );

	$( document ).on( 'post-load', postsStyles );

} )( jQuery );
