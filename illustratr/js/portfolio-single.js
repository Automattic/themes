( function( $ ) {

	/*
	 * Resize video-wrapper and portfolio-gallery for full width on small screens.
	 */
	function calc() {

		$( '.portfolio-entry .video-wrapper, .portfolio-gallery' ).each( function() {
			if( $( window ).width() < 768 ) {
	    		$( this ).css( 'width', '100%' ).css( 'width', '+=40px' );
	    		if ( $( 'body' ).hasClass( 'rtl' ) ) {
		    		$( this ).css( 'margin-right', '-20px' );
	    		} else {
		    		$( this ).css( 'margin-left', '-20px' );
	    		}
			} else if( $( window ).width() < 960 ) {
	    		$( this ).css( 'width', '100%' ).css( 'width', '+=80px' );
	    		if ( $( 'body' ).hasClass( 'rtl' ) ) {
		    		$( this ).css( 'margin-right', '-40px' );
	    		} else {
		    		$( this ).css( 'margin-left', '-40px' );
	    		}
			} else {
				$( this ).css( {
					'width': '',
					'margin-right': '',
					'margin-left': ''
				} );
			}
		} );

	}

	$( window ).load( function() {

		/*
		 * Wrap galleries in a div.
		 */
		$( '.portfolio-entry .gallery, .portfolio-entry .tiled-gallery' ).each( function() {
			$( this ).wrap( '<div class="portfolio-gallery" />' );
			// Trigger resize to make sure tiled galleries are full width.
			$( this ).trigger( 'resize' );
		} );

		calc();

	} ).resize( _.debounce( calc, 100 ) );;

} )( jQuery );
