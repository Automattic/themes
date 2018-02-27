( function( $ ) {

	$( window ).load( function() {
		$( '.entry-meta, .entry-title' ).wrapAll( '<div class="entry-header-inner" />' );
		$( '.entry-header-inner' ).wrap( '<div class="entry-header-wrapper" />' );
		$( '.entry-header' ).insertBefore( '.site-content-inner' )
		                    .addClass( 'entry-hero' );
	} );

} )( jQuery );
