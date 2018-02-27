jQuery( document ).ready( function( $ ) {
	$( function() {
		$( '.testimonials' ).masonry( {
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
			itemSelector : '.testimonials .hentry'
		} );
	} );
} );
