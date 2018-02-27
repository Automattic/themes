( function( $ ) {

	/*
	 * Add dropdown toggle that display child menu items.
	 */
	function primary_nav() {

		$( '.main-navigation ul .genericon' ).remove();

		if( $( window ).width() < 960 ) {
			$( '.main-navigation .page_item_has_children > a, .main-navigation .menu-item-has-children > a' ).append( '<span class="genericon genericon-expand" />' );
			$( '.main-navigation ul .genericon' ).click( function( event ) {
				event.preventDefault();
				$( this ).toggleClass( 'genericon-expand' ).toggleClass( 'genericon-collapse' );
				$( this ).closest( 'li' ).toggleClass( 'toggle-on' );
				$( this ).parent().next( '.children, .sub-menu' ).toggleClass( 'toggle-on' );
			} );
		}

	}

	/*
	 * Add classes to images and captions if image post format.
	 */
	function image_post_format() {

		$( '.hentry.format-image img, .portfolio-entry .entry-content img' ).each( function() {
			var img = $( this ),
			    caption = $( this ).closest( 'div' ),
			    new_img = new Image();

			new_img.src = img.attr('src');
			var img_width = new_img.width;

			if ( img_width >= 1100 ) {
				$( this ).addClass( 'image-big' );
				$( this ).parents( 'p' ).addClass( 'image-big-wrapper' );
				if ( $.trim( $( this ).parents( 'p' ).text() ) != '' ) {
					$( this ).parents( 'p' ).contents().filter( 'a, img' ).wrap( '<span class="image-big-wrapper" />' );
					$( this ).parents( 'p' ).removeClass( 'image-big-wrapper' );
				}
			}
			if ( caption.hasClass( 'wp-caption' ) && img_width >= 1080 ) {
				$( this ).removeClass( 'image-big' );
				caption.addClass( 'caption-big' );
			}
		} );

	}

	/*
	 * Remove Flash Fallback from HTML5 Audio in audio post format.
	 */
	function audio_post_format() {

		$( '.hentry.format-audio .entry-media audio' ).each( function() {
			var audio_id = $( this ).attr( 'id' );
			$( this ).next( '#' + audio_id + '-flash' ).remove();
			$( this ).parent().siblings( '.entry-content' ).find( '#' + audio_id + '-flash' ).parents( 'span' ).remove();
		} );

	}

	/*
	 * Remove content if empty.
	 */
	function content() {

		$( '.page-content, .hentry:not(.portfolio-entry) .entry-content, .entry-summary, .entry-sharedaddy, .sharedaddy' ).each( function() {
			if ( ! $( this ).find( 'iframe' ).length && ! $( this ).find( 'img' ).length && $.trim( $( this ).text() ) === '' ) {
				$( this ).remove();
			}
		} );

	}

	/*
	 * Resize entry-thumbnail, entry-gallery, entry-media, video-wrapper (video post format), caption-big and image-big for full width on small screens.
	 */
	function calc() {

		$( '.entry-thumbnail, .entry-gallery, .entry-media, .hentry.format-video > .video-wrapper, .caption-big' ).each( function() {
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
		$( '.caption-big' ).each( function() {
			if( $( window ).width() < 960 ) {
	    		$( this ).css( 'max-width', '200%' );
			} else {
				$( this ).css( 'max-width', '' );
			}
		} );
		$( '.image-big' ).each( function() {
			if( $( window ).width() < 768 ) {
	    		$( this ).parents( '.image-big-wrapper' ).css( {
	    			'display': 'block',
	    			'width': '100%',
	    		} ).css( 'width', '+=40px' );
	    		if ( $( 'body' ).hasClass( 'rtl' ) ) {
		    		$( this ).parents( '.image-big-wrapper' ).css( 'margin-right', '-20px' );
	    		} else {
		    		$( this ).parents( '.image-big-wrapper' ).css( 'margin-left', '-20px' );
	    		}
			} else if( $( window ).width() < 960 ) {
	    		$( this ).parents( '.image-big-wrapper' ).css( {
	    			'display': 'block',
	    			'width': '100%',
	    		} ).css( 'width', '+=80px' );
	    		if ( $( 'body' ).hasClass( 'rtl' ) ) {
		    		$( this ).parents( '.image-big-wrapper' ).css( 'margin-right', '-40px' );
	    		} else {
		    		$( this ).parents( '.image-big-wrapper' ).css( 'margin-left', '-40px' );
	    		}
			} else {
				$( this ).parents( '.image-big-wrapper' ).css( {
					'display': '',
					'width': '',
					'margin-right': '',
					'margin-left': ''
				} );
			}
		} );

	}

	/*
	 * Wrap sharedaddy in a div and move it after entry-header for aside, quote and status post format.
	 */
	function sharedaddy() {

		$( '.hentry.format-aside .entry-content > .sharedaddy, .hentry.format-quote .entry-content > .sharedaddy, .hentry.format-status .entry-content > .sharedaddy' ).each( function() {
			$( this ).wrap( '<div class="entry-sharedaddy" />' );
		} );
		$( '.entry-sharedaddy' ).each( function() {
			$( this ).insertAfter( $( this ).closest( '.hentry' ).find( '.entry-header' ) );
		} );

	}

	/*
	 * Load all the functions.
	 */
	function load_functions() {

		primary_nav();
		image_post_format();
		audio_post_format();
		content();
		calc();
		sharedaddy();

	}
	$( window ).load( load_functions ).resize( _.debounce( load_functions, 100 ) );
	$( document ).on( 'post-load', load_functions );

} )( jQuery );
