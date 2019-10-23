/**
 *
 * This is the main JavaScript file for Radcliffe.
 */

( function( $ ) {

	var $window = $( window );

	// Manage full-screen featured images.
	function fullScreenImages() {
		var $entryBackground = $( '.entry-thumbnail' ),
			$heroArea        = $( '.hero-area' ),
			$windowWidth     = $window.width(),
			$height			 = Math.round( $windowWidth / 1.33 );

		if ( $entryBackground ) {
			// if we're on a blog/archive page, there may be more than one
			if ( $entryBackground.length > 1 ){
				$entryBackground.each( function() {
					// reset the height
					$this_height = $height;
					// find the .entry-header height
					$entryHeader = $( this ).siblings( '.entry-header' );
					if ( $height < $entryHeader.outerHeight() ) {
						// pick the taller of the two
						$this_height = $entryHeader.outerHeight();
					}
					$( this ).height( $this_height + 'px' );
				} );
			} else {
				$entryBackground.height( Math.round( $windowWidth / 1.33 ) + 'px' );
			}
		}

		if ( $heroArea && $windowWidth > '768' ) { // Set a fixed height for larger screens
			$heroArea.css( { 'height' : Math.round( $windowWidth / 1.33 ) + 'px', 'min-height' : 'auto' } );
		}
		else if ( $heroArea ) { // Set a min-height for smaller screens
			$heroArea.css( { 'min-height' : Math.round( $windowWidth / 1.33 ) + 'px', 'height' : 'auto' } );
		}
	}

	// Add SVG image zoom icon
	function imageZoomIcon() {
		$( '.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger' )
			.empty()
			.append( screenReaderText.icon_zoom );
	}

	// Initialize init on page load.
	$( document ).on( 'ready', function() {
		fullScreenImages();
		imageZoomIcon();
	});

	// ...and on each subsequent Infinite Scroll load, as well.
	$( document ).on( 'post-load', function() {
		fullScreenImages();
	});

	// One more time after everything (eg: Custom Fonts) has loaded for better height accuracy
	$( window ).load( function() {
		fullScreenImages();
	});

	// On window resize.
	$( window ).on( 'resize', function() {
		fullScreenImages();
	});

} )( jQuery );
