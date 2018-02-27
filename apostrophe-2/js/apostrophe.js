/**
 * apostrophe.js
 *
 * Handles the basic JS functionality for our theme.
 */
( function($) {
	/*
	 * Count the number of images in each row in order to create the proper clearings.
	 * For the most part, this isn't necessary, but there are certain instances where
	 * the grid breaks at the wrong spot, making the whole layout look funky.
	 * To fix that, we're counting where we are in the grid layout based on the space
	 * each article uses, and adding a clearing class each time we drop to a new row.
	 */
	function countGrid() {
		var $body = $( 'body' );
		var $container = $( '#main #posts-wrapper' );
		var $button = $( '.menu-toggle' );

		// Only initiate script if the mobile menu toggle isn't showing and we're on a page that uses the grid.
		// Return otherwise.
		if ( ( 0 !== $button.offsetWidth && 0 !== $button.offsetHeight ) &&
				 ! ( $body.hasClass( 'archive' ) || $body.hasClass( 'blog' ) || $body.hasClass( 'search' ) ) ) {
			return;
		}

		var $articles = $container.find( '.hentry' );
		// This variable is used to count how far across the grid we are.
		var gridcount = 0;
		var gridcount_increment;

		$articles.each( function() {
			// If the article is featured, it takes up two blocks. If not, it takes up one.
			if ( $( this ).hasClass( 'apostrophe-featured' ) ) {
				gridcount_increment = 2;
			} else {
				gridcount_increment = 1;
			}
			// If we're at a newline in the grid, add a class to clear the previous line, and reset the grid count.
			if ( 3 < gridcount + gridcount_increment ) {
				gridcount = 0;
				$( this ).addClass( 'clear' );
			}
			gridcount = gridcount + gridcount_increment;
		} );
	} // countGrid

	// Set width of h2 elements inside the grid to make sure post titles don't overflow the container, and we're breaking long, one-word titles correctly.
	function blockWidth() {
		var $body = $( 'body' );
		if ( $body.hasClass( 'archive' ) || $body.hasClass( 'blog' ) || $body.hasClass( 'search' ) ) {

			if ( $( window ).innerWidth() > 767 ) {
				$( '.hentry' ).each( function() {
					$( this ).find( '.entry-title' ).width( $( this ).width() );
				} );
			} else {
				$( '.hentry' ).each( function() {
					$( this ).find( '.entry-title' ).attr( 'style', '' );
				} );
			}
		}
	}

	// Count grid blocks on page load
	$( document ).on( 'ready', function() {
		countGrid();
		blockWidth();
	});

	// ...and on each subsequent Infinite Scroll load, as well.
	$( document ).on( 'post-load', function() {
		countGrid();
		blockWidth();
	});

	$( window ).resize( function() {
		blockWidth();
	});

} )(jQuery);
