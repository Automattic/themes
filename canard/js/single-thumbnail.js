( function( $ ) {

	$( window ).load( function() {

		$( '.page .hentry.has-post-thumbnail .entry-header .entry-meta, .single .hentry.has-post-thumbnail .entry-header .entry-meta, .page .hentry.has-post-thumbnail .entry-header .entry-title, .single .hentry.has-post-thumbnail .entry-header .entry-title' ).wrapAll( '<div class="entry-header-inner" />' );
		$( '.entry-header-inner' ).wrap( '<div class="entry-header-wrapper" />' );
		$( '.page .hentry.has-post-thumbnail .entry-header, .single .hentry.has-post-thumbnail .entry-header' ).insertBefore( '.site-content-inner' )
		                    .addClass( 'entry-hero' );

	} );

} )( jQuery );
