/**
 * Header enhancements for more intelligent dynamic headers.
 *
 * This sets the masthead to the height of an uploaded image and applies sticky navigation.
 */

( function( $ ) {

	// Add SVG image zoom icon
	function imageZoomIcon() {
		$( '.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger' )
			.empty()
			.append( '<i class="fa fa-search-plus"></i>' );
	}

	// Initialize init on page load.
	$( document ).on( 'ready', function() {
		imageZoomIcon();
	});

} )( jQuery );
