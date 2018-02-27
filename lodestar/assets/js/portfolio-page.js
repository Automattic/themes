/**
 * File portfolio-page.js
 *
 * JavaScript specific to the portfolio-page.php template.
 *
 * Loads Isotope, handles sorting and triggers lazy-loading for images
 */

( function( $ ) {

	// Define porfolio project wrapper
	$grid = $( '.portfolio-wrapper' );

	$( window ).load( function() {

		// Determine text direction
		var $ltr = true;
		if ( $('html' ).attr( 'dir' ) == 'rtl') {
			$ltr = false;
		}

		// Initialize Isotope
		$grid.isotope( {
			itemSelector: '.jetpack-portfolio',
			layoutMode: 'fitRows',
			animationEngine: 'best-available',
			originLeft: $ltr,
			columnWidth: $grid.width() / 2,
			resize: false
		} );
	} );

	// Portfolio Project filtering
	$( '.project-terms a' ).click( function( e ) {
		e.preventDefault();

		// Remove 'current-type' class from previously highlighted link
		$( '.project-terms a.current-type' ).removeClass( 'current-type' );

		// Add to link that was clicked
		$( this ).addClass( 'current-type' );

		// If the 'All' link was clicked, show all
		if ( $( this ).hasClass( 'types-all' ) ) {
			$grid.isotope( { filter: '*' } );

		// Otherwise, sort based on data attribute
		} else {
			// Returns format gettypeid-#### - we just want the numbers, so we split them off the end
			var $get_typeid = $(this).attr( 'data-get-typeid' ).split('-')[1];

			// Filter projects by class
			$grid.isotope( { filter: '.typeid-' + $get_typeid } );
		}

		// Make sure all the lazy loaded images are visible when filtering
		$( '.portfolio-featured-image' ).trigger( 'appear' );
	} );

	// Lazy load project images
	$(function() {
		$( '.portfolio-featured-image' ).lazyload( {
			effect: 'fadeIn',
			threshold: 200,
		} );
	} );

} )( jQuery );