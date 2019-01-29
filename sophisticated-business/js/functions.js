/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */
( function( $ ) {
	var $body             = $( document.body ),
		$window           = $( window ),
		mastheadHeight    = $( '#masthead' ).outerHeight( true ),
		coverImage        = $( '.home.page .entry-content > .wp-block-cover' ),
		entryHeaderHeight = $body.is( '.hide-homepage-title' ) ? 0 : $( '.home.page .entry > .entry-header' ).outerHeight( true ),
		coverImageHeight  = coverImage.height(),
		windowWidth       = window.innerWidth,
		toolbarHeight,
		resizeTimer;

	// Make Featured image full-screen.
	function fullscreenCoverImage() {

		if ( ! coverImage ) {
			return;
		}

		toolbarHeight = $body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;

		coverImage.css( {
			'height': $window.height() - ( toolbarHeight + mastheadHeight + entryHeaderHeight ) + 'px'
		} );
	}

	$( document ).ready( function() {
		$window.on( 'resize.sophisticatedbusiness', function() {
			windowWidth = window.innerWidth;
			clearTimeout( resizeTimer );
			resizeTimer = setTimeout( function() {
				fullscreenCoverImage();
			}, 300 );
		} );

		fullscreenCoverImage();
	} );
} )( jQuery );
