( function( $ ) {

	/*
	 * Resize portfolio-wrapper for full width on small screens.
	 */
	function calc() {

		$( '.portfolio-wrapper' ).each( function() {
			if( $( window ).width() < 768 ) {
	    		$( this ).css( 'width', '100%' ).css( 'width', '+=40px' );
	    		if ( $( 'body' ).hasClass( 'rtl' ) ) {
		    		$( this ).css( 'margin-right', '-20px' );
	    		} else {
		    		$( this ).css( 'margin-left', '-20px' );
	    		}
			} else if( $( window ).width() < 960 ) {
	    		$( this ).css( 'width', '100%' ).css( 'width', '+=120px' );
	    		if ( $( 'body' ).hasClass( 'rtl' ) ) {
		    		$( this ).css( 'margin-right', '-60px' );
	    		} else {
		    		$( this ).css( 'margin-left', '-60px' );
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
		 * Wrap portfolio-featured-image in a div.
		 */
		$( '.portfolio-featured-image' ).each( function() {
			$( this ).wrap( '<div class="portfolio-thumbnail" />' );
		} );

		calc();

		var portfolio_wrapper = $( '.portfolio-wrapper, .jetpack-portfolio-shortcode' );

		portfolio_wrapper.imagesLoaded( function() {
			if ( $( 'body' ).hasClass( 'rtl' ) ) {
				portfolio_wrapper.masonry( {
					columnWidth: 1,
					itemSelector: '.portfolio-entry',
					transitionDuration: 0,
					isOriginLeft: false
				} );
			} else {
				portfolio_wrapper.masonry( {
					columnWidth: 1,
					itemSelector: '.portfolio-entry',
					transitionDuration: 0
				} );
			}

			// Show the blocks
			$( '.portfolio-entry' ).animate( {
				'opacity' : 1
			}, 250 );
		} );

		$( window ).resize( function () {

			// Force layout correction after 1500 milliseconds
			setTimeout( function () {
				calc();
				portfolio_wrapper.masonry();
			}, 1500 );

		} );

		// Layout posts that arrive via infinite scroll
		$( document.body ).on( 'post-load', function () {

			var new_items = $( '.infinite-wrap .portfolio-entry' );

			portfolio_wrapper.append( new_items );
			portfolio_wrapper.masonry( 'appended', new_items );

			// Force layout correction after 1500 milliseconds
			setTimeout( function () {

				portfolio_wrapper.masonry();

				// Show the blocks
				$( '.portfolio-entry' ).animate( {
					'opacity' : 1
				}, 250 );

			}, 1500 );

		} );

	} );

} )( jQuery );
