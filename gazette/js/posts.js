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
		$( '.hentry' ).each( function() {
			var entryMeta = $( this ).first( '.entry-meta' ),
			    catLinks = entryMeta.find( '.cat-links' ),
			    commentsLink = entryMeta.find( '.comments-link' );
			if ( catLinks.width() + commentsLink.width() >= entryMeta.width() ) {
				$( this ).addClass( 'long-meta' );
			} else {
				$( this ).removeClass( 'long-meta' );
			}

			if ( ! $( this ).hasClass( 'background-done' ) && $( this ).hasClass( 'has-post-thumbnail' ) && ( $( this ).hasClass( 'format-image' ) || $( this ).hasClass( 'format-gallery' ) ) && ! $( this ).parent().hasClass( 'featured-content' ) ) {
				var entryImage = $( this ).find( '.post-thumbnail' ),
				    thumbnail = $( this ).find( 'img' );
				if ( $.trim( $( this ).find( '.entry-summary' ).text() ) === '' ) {
					$( this ).find( '.entry-summary' ).remove();
					$( this ).addClass( 'no-summary' );
				}
				entryImage.css( {
					'background-image': 'url(' + thumbnail.attr( 'src' ) + ')',
					'height': $( this ).outerHeight() - $( this ).find( '.entry-meta' ).height() - 15,
					'top': $( this ).find( '.entry-meta' ).outerHeight() + 15
				} );
				$( this ).addClass( 'background-done' );
			}
		} );
	}

	$( window ).load( postsStyles ).resize( debounce( postsStyles, 500 ) );

	$( document ).on( 'post-load', postsStyles );

} )( jQuery );
