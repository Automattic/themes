/**
 * libretto.js
 *
 * Handles custom functions, primarily for images
 */

( function( $ ) {
	/* This calculates the size of each image in the entry content,
	 * then gives it a class to overlap the content area if it's wide enough.
	 * Certain images are ignored-—mostly those in galleries or video previews
	 */
	function formatImages() {

		$( 'article img' ).each( function() {
			// Never give overlap class to gallery images or video, unless you want things to implode
			// Leave comment images alone, as well.
			// "Medium" and "large" images are also excluded for logical reasons, as well as smileys
			if ( ! $( this ).hasClass( 'attachment-gallery' ) && ! $( this ).hasClass( 'videopress-poster' )
				&& ! $( this ).parents( '.tiled-gallery-item' ).length && ! $( this ).parents( '.gallery' ).length
				&& ! $( this ).parents( '.comment-content' ).length
				&& ! $( this ).hasClass( 'size-thumbnail' ) && ! $( this ).hasClass( 'size-medium' ) && ! $( this ).hasClass( 'wp-smiley' ) ) {

				// Determine actual, rather than computed, width of image, by creating a new image instance
				var computedImage = $( this );
				var actualImage = new Image();
				actualImage.src = computedImage.attr( 'src' )
				var imageWidth = actualImage.width;

				// If it's big enough, give it the oversized class for the overlap, and remove height & width attributes
				if ( imageWidth > 895 ) {
					// If we're inside a caption, the oversized class should instead be added to our caption.
					// We'll also remove the width property
					if ( $( this ).parents( 'figure' ).length ) {
						$( this ).parents( 'figure' ).addClass( 'libretto-oversized' );
						$( this ).parents( 'figure' ).css( "width", "" );
					} else {
						$( this ).addClass( 'libretto-oversized' );
					}
					$( this ).removeAttr( 'width' );
					$( this ).removeAttr( 'height' );
				}
			}
		});

		// Remove height & width attributes from featured images
		$( '.featured-image' ).each( function() {
			$( this ).removeAttr( 'width' );
			$( this ).removeAttr( 'height' );
		});
	}

	// Format images on each subsequent Infinite Scroll load, as well
	$( document ).on( 'post-load', function() {
		formatImages();
	});

	// Ensure that header images are no taller than the viewport height
	function fitHeader() {
		var windowHeight = $( window ).height();
		var windowWidth = $( window ).width();
		var navBarHeight = $( '.nav-bar' ).height();
		var wpAdminBar = $( '#wpadminbar' ).height() || 0;
		var effectiveViewportHeight = windowHeight - navBarHeight - wpAdminBar;
		var mastheadImageHeight = $( '#masthead' ).data('image-height');

		// we should only resize for larger devices (tablets and up)
		if ( windowWidth > 640 ) {
			if ( mastheadImageHeight >= effectiveViewportHeight ) {
				$( '#masthead' ).css( 'height', effectiveViewportHeight );
			} else {
				$( '#masthead' ).css( 'height', mastheadImageHeight );
			}
		}
	};

	// Wait for images to be loaded before calculating sizes
	$( window ).on( 'load', function() {
		formatImages();
	});

	$( document ).ready( function() {
		fitHeader();

		// Pull out the search bar when clicked
		$( '#site-navigation .search-form label' ).on( 'click', function(event) {
			var $form = $( this ).parent( 'form' );
			var $input = $form.find( '.search-field' );
			/*
			 * Only submit the form if we actually clicked on the label itself.
			 * There's an input inside the label (for entering your search term)
			 * and it's confusing if clicking that submits the form!
			 */
			if ( $form.hasClass( 'libretto-open' ) && $( event.target ).prop('tagName') === 'LABEL') {
				// Submit our search if there's a search term entered
				if ( $input.val() ) {
					$form.submit();
        // Otherwise, close the search box
      	} else {
      		$form.removeClass( 'libretto-open' );
          return false;
        }
			} else {
				$form.addClass( 'libretto-open' );
				$input.focus();
				return false;
			}

		});

		// And hide when it loses focus, too!
		$( '#site-navigation .search-form input[type="search"]' ).on( 'blur', function(event) {
			if ( event.target.attr('type') === 'search' ) {
				return;
			}
			$( '#site-navigation .search-form' ).removeClass( 'libretto-open' );
		});


	});

} )( jQuery );
