( function( $ ) {

	// Layout posts that arrive via infinite scroll
	$( document.body ).on( 'post-load', function () {
		$( '.site-main > .hentry' ).appendTo( $( '.portfolio-projects' ) );
	} );

} )( jQuery );
