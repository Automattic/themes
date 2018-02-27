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

	var featuredContent, header, primary;
	featuredContent = $( '#featured-content' );
	header = $( '#masthead' );
	primary = $( '#primary' );

	if ( ! featuredContent.length ) {
		return;
	}

	/* Use Featured Image as a Background Image */
	featuredContent.find( '.hentry' ).each( function() {
		if ( ! $( this ).hasClass( 'background-done' ) && $( this ).hasClass( 'has-post-thumbnail' ) ) {
			var entryImage = $( this ).find( '.post-thumbnail' ),
			    thumbnail = $( this ).find( 'img' );
			entryImage.css( 'background-image', 'url(' + thumbnail.attr( 'src' ) + ')' );
			$( this ).addClass( 'background-done' );
		}
	} );

	if ( ! header.length || ! primary.length ) {
		return;
	}

	/* Move Featured Content in the DOM depending on the screen size */
	function featuredContentPosition() {
		if ( $( window ).width() > 959 ) {
			featuredContent.insertBefore( header );
		} else {
			featuredContent.insertBefore( primary );
		}
		featuredContent.show();
	}

	$( window ).load( featuredContentPosition ).resize( debounce( featuredContentPosition, 500 ) );

} )( jQuery );
