( function( $ ) {

	/*
	 * Wrap sharedaddy in a div and move it after portfolio-wrapper.
	 */
	$( window ).load( function() {

		$( '.page-content > .sharedaddy' ).wrap( '<div class="portfolio-sharedaddy" />' );
		$( '.portfolio-sharedaddy' ).insertAfter( $( '.portfolio-wrapper' ) );

	} );

} )( jQuery );
