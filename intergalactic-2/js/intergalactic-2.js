( function( $ ) {
	var $window = $( window );

	/*
	 * Toggle slide menu
	 */
	function slideControl() {
		$( '.menu-toggle' ).on( 'click', function( e ) {
			e.preventDefault();
			$( '.slide-menu' ).toggleClass( 'expanded' ).resize();
			$( 'body' ).toggleClass( 'sidebar-open' );
			$( this ).toggleClass( 'toggle-on' );
		} );
	}

	/*
	 * Close slide menu with escape key
	 */
	$( document ).keyup( function( e ) {
		if ( e.keyCode === 27 && $( '.slide-menu' ).hasClass( 'expanded' ) ) {
			$( 'body' ).removeClass( 'sidebar-open' );
			$( '.menu-toggle' ).removeClass( 'toggle-on' );
			$( '.slide-menu' ).removeClass( 'expanded' );
		}
	} );

	/*
	 * Wrap tiled gallery
	 */
	function galleryWrapper() {
		$( '.entry-content' ).find( '.tiled-gallery' ).each( function() {
			if ( ! $( this ).hasClass( 'gallery-wrapped' ) ) {
				$( this ).wrap( '<div class="tiled-gallery-wrapper"></div>' );
				$( this ).addClass( 'gallery-wrapped' );
				$( this ).resize();
			}
		} );
	}

	/*
	 * Add extra class to large images
	 */
	function outdentImages() {
		$( '.entry-content img' ).each( function() {
			var img = $( this ),
				caption = $( this ).closest( 'figure' ),
				new_img = new Image();

			new_img.src = img.attr('src');
			var img_width = new_img.width;

			if ( img_width >= 1000 && $( this ).parents( '[class^="wp-block-"]').length === 0 ) {

				$( this ).addClass( 'size-big' );
				$( this ).parents( 'p' ).addClass( 'size-big-wrapper' );

				if ( $.trim( $( this ).parents( 'p' ).text() ) != '' ) {
					$( this ).parents( 'p' ).contents().filter( 'a, img' ).wrap( '<span class="size-big-wrapper" />' );
					$( this ).parents( 'p' ).removeClass( 'size-big-wrapper' );
				}
			}
			if ( caption.hasClass( 'wp-caption' ) && img_width >= 1000 ) {
				$( this ).removeClass( 'size-big' );
				caption.addClass( 'caption-big' );
			}
		} );
	}

	/*
	 * Manage full-screen featured images
	 */
	function fullScreenImages() {
		var $entryBackground = $( '.entry-background' ),
			singleThumbnail = $( 'body' ).hasClass( 'single-thumbnail' );

		if ( ! singleThumbnail ) {
			return;
		}

		if ( 768 < $window.width() ) {
			$entryBackground.height( $window.height() + 'px' );
		} else {
			$entryBackground.height( 'auto' );
		}

		$( 'html, .single.single-thumbnail' ).height( 'auto' );
	}

	//After DOM is ready
	$( document ).ready( function() {
		slideControl();
		fullScreenImages();
	} );

	// After page loads
	$window.load( function() {
		galleryWrapper();
		outdentImages();
	} );

	// On window resize
	$window.on( 'resize', function() {
		fullScreenImages();
	});

	// After infinite scroll loads
	$window.on( 'post-load', function() {
		galleryWrapper();
		outdentImages();
	} );

} )( jQuery );
