( function( $ ) {

	var body, header, content, hero, adminBar, adminHeight = 0, headerHeight = 0, extraSpacing = 0, resizeTimer;

	function contentPadding() {
		if ( window.innerWidth >= 658 ) {
			content.css( 'padding-top', header.outerHeight() );
		} else {
			content.css( 'padding-top', '' );
		}
	}

	$( document ).ready( function() {
		body     = $( document.body );
		header   = $( '#masthead' );
		content  = $( '#content' );
		adminBar = $( '#wpadminbar' );

		$( window )
			.on( 'load', function() {
				contentPadding();
			} )
			.on( 'resize', function() {
				clearTimeout( resizeTimer );
				resizeTimer = setTimeout( function() {
					contentPadding();
				}, 500 );
			} );
	} );

} )( jQuery );
