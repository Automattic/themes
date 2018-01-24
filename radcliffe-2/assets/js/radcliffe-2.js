/**
 *
 * This is the main JavaScript file for Radcliffe.
 */

( function( $ ) {

	var $window = $( window );

	// Toggle search form.
	function searchToggle() {
		$( '.search-toggle' ).on( 'click', function() {
			$( this ).toggleClass( 'active' );
			$( '.header-search' ).slideToggle();
			$( '.header-search .s' ).focus();
			return false;
		} );
	}

	// Manage full-screen featured images.
	function fullScreenImages() {
		var $entryBackground = $( '.entry-thumbnail' ),
			$heroArea        = $( '.hero-area' ),
			$windowWidth     = $window.width();

		if ( $entryBackground ) {
			$entryBackground.height( Math.round( $windowWidth / 1.33 ) + 'px' );
		}

		if ( $heroArea && $windowWidth > '768' ) { // Set a fixed height for larger screens
			$heroArea.css( { 'height' : Math.round( $windowWidth / 1.33 ) + 'px', 'min-height' : 'auto' } );
		}
		else if ( $heroArea ) { // Set a min-height for smaller screens
			$heroArea.css( { 'min-height' : Math.round( $windowWidth / 1.33 ) + 'px', 'height' : 'auto' } );
		}

		$entryBackground.height( Math.round( $windowWidth / 1.33 ) + 'px' );
	}

	// Add SVG image zoom icon
	function imageZoomIcon() {
		$( '.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger' )
			.empty()
			.append( screenReaderText.icon_zoom );
	}

	// Initialize init on page load.
	$( document ).on( 'ready', function() {
		searchToggle();
		fullScreenImages();
		imageZoomIcon();
	});

	// ...and on each subsequent Infinite Scroll load, as well.
	$( document ).on( 'post-load', function() {
		fullScreenImages();
	});

	// On window resize.
	$( window ).on( 'resize', function() {
		fullScreenImages();
	});

} )( jQuery );
