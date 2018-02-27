/*!
 * Script for Rebalance
 */
( function( $ ) {

	// Determine if our site is RTL (Right-To-Left)
	var ltr = true;

	if ( 1 == Rebalance.is_rtl ) {
		ltr = false;
	}

	// Code inside here fires when the DOM is loaded.
	$( document ).ready( function() {

		/**
		 * Set variable
		 */
		var $container = $( '#infinite-wrap' );

		/**
		 * Append HTML to masonry wrapper for responsive sizing
		 * - see: http://masonry.desandro.com/options.html#columnwidth
		 */
		$container.append(
			'<div class="grid-sizer"></div>\
			<div class="grid-item"></div>\
			<div class="grid-item grid-item--width2"></div>'
		);

		/**
		 * Move Jetpack sharing and post flair into the entry-footer
		 */
		$( '.entry-footer' ).append( $( '#jp-post-flair' ).detach() );

	});

	$( window ).on( 'load', function() {

		/**
		 * Set variables
		 */
		var $wrapper = $( '.js body' ),
			$container = $( '#infinite-wrap' );

		/*
		 * Fade in page
		 * - only if js is enabled
		 */
		$wrapper.animate({
			opacity: 1,
		}, 30);

		/**
		 * Initiate Masonry
		 */
		$( function() {
			$container.imagesLoaded( function() {
				$container.masonry({
					columnWidth: '.grid-sizer',
					gutter: 0,
					percentPosition: true,
					itemSelector: '.card',
					transitionDuration: 0,
					isFitWidth: false,
					isOriginLeft: ltr
				});
			});
			// Fade blocks in after images are ready (prevents jumping and re-rendering)
			$container.find( '.card' ).animate( {
				'opacity' : 1
			} );
		});

		// Handle new items appended by infinite scroll
		$( document ).on( 'post-load', function() {
			$container.imagesLoaded( function() {
				$container.masonry( 'reloadItems').masonry( 'layout' );
				// Fade in cards
				$container.find( '.card' ).animate( {
					'opacity' : 1
				});
			});
		});
	});
} )( jQuery );