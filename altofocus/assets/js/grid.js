/*!
 * Setup Isotope Grid
 *
 * JavaScript specific to posts displayed in a grid templates
 *
 * Initiates Isotope, handles sorting and triggers lazy-loading for images
 *
 * @package Altofocus
 */

/* global loadedPosts */
( function( $ ) {

	// Define initial variable for Isotope
	var $body        = $( document.body ),
	    $isotopeWrap = $( '.hfeed:not(.error404, .search-no-results) #main' ),
	    isoOptions   = {
			layoutMode: 'masonry',
			itemSelector: '.grid-item',
			masonry: {
				columnWidth: '.grid-sizer',
				gutter: '.gutter-sizer'
			},
			percentPosition: true
		};

	/**
	 * Debounce script
	 */
	function altofocus_debounce(func, wait, immediate) {
		var timeout;
		return function() {

			var context = this,
				args = arguments;

			var later = function() {
				timeout = null;
				if (!immediate) {
					func.apply(context, args);
				}
			};

			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) {
				func.apply(context, args);
			}
		};
	}

	/**
	 * Init Isotope
	 *
	 * - Add Isotope class
	 * - Add empty grid sizing elements for resposnive isotope sizing
	 */
	function initIsotope() {

		// Init Isotope
		$isotopeWrap
			.append( "<div class=\'grid-sizer\'></div><div class=\'gutter-sizer\'></div>" );
	}

	/**
	 * Run Isotope
	 */
	function runIsotope() {

		$isotopeWrap.imagesLoaded().fail( function() {

			// broken images
			// console.log('All images loaded but at least one is broken');

			// Initialize Isotope
			$isotopeWrap.isotope( isoOptions );

		} ).done( function() {

			// Initialize Isotope
			$isotopeWrap.isotope( isoOptions );

		} );

		// jQuery
		$isotopeWrap.on( 'layoutComplete', function() {

			$isotopeWrap.addClass( "has-isotope" );
		} );
	}

	/**
	 * Triggers re-layout on Isotope wrapper after infinite scroll has loaded new posts
	 */
	function reLayoutIsotope() {

		// Set array for newly added post IDs
		var newPostIds = [];

		// If new posts have been loaded from Infinite Scroll, attach them to the isotope wrapper and lay them out
		// note: loadedPosts variable is set globally in altofocus_infinite_scroll_render(). See jetpack.php
		if ( typeof loadedPosts !== 'undefined' ) {

			// Create post IDs from IS results and push into post ID array
			$.each( loadedPosts, function( index, value ) {

				var $appendedPost = '#post-'+ value;

				newPostIds.push( $appendedPost );

			});

			// Place infinite scroll results into a jQuery object
			var $newPostObj = $( newPostIds.join( ", " ) ),
			    $appendedPosts = $( $newPostObj );

			// Get each new post, add it to Isotope, and relayout Isotope
			$appendedPosts

				// Hide newly loaded posts to prevent animation jumping
				.hide()

				// Get each post with an image and without
				.each( function() {

					var $this = $( this );

					// Cue posts with images separately to account for varying image load times
					if ( $this.find( "img" ).length > 0 ) {

						// Make sure images are loaded before laying them out
						$this.imagesLoaded()

							// After image load completes, append newly loaded posts to Isotope wrapper and lay them out
							.done( altofocus_debounce( function() {

									$isotopeWrap

										// Append this post
										.append( $this )

										// Layout this post
										.isotope( 'appended', $this );

								}, 200, 1 ) );

					// Append and layout posts without images normally
					} else {

						$isotopeWrap

							// Append this post
							.append( $this )

							// Layout this post
							.isotope( 'appended', $this );
					}

				});
		}
	}

	/**
	 * Document calls
	 */
	$( document )
		.ready( initIsotope )
		.ready( function() {

			/**
			 * Relayout Isotope on post-load (Infinite Scroll)
			 */
			$body.on( 'post-load', reLayoutIsotope );

			/**
			 * Window calls
			 */
			$( window )
				.load( runIsotope );
		} );

} )( jQuery );
