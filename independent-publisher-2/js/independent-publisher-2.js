( function () {
	// Helper matches function (not a polyfill), compatible with IE 11.
	function matches( el, sel ) {
		if ( Element.prototype.matches ) {
			return el.matches( sel );
		}

		if ( Element.prototype.msMatchesSelector ) {
			return el.msMatchesSelector( sel );
		}
	}

	// Helper closest parent node function (not a polyfill) based on
	// https://developer.mozilla.org/en-US/docs/Web/API/Element/closest#Polyfill
	function closest( el, sel ) {
		if ( el.closest ) {
			return el.closest( sel );
		}

		var current = el;

		do {
			if ( matches( el, sel ) ) {
				return current;
			}
			current = current.parentElement || current.parentNode;
		} while ( current !== null && current.nodeType === 1 );

		return null;
	}

	function emitResizeEvent() {
		if ( typeof( Event ) === 'function' ) {
			window.dispatchEvent( new Event( 'resize' ) );
		} else {
			var event = window.document.createEvent( 'UIEvents' );
			event.initUIEvent( 'resize', true, false, window, 0 );
			window.dispatchEvent( event );
		}
	}

	function updatePage() {
		galleryWrapper();
		outdentMedia();
	}

	// Wrap tiled galleries so we can outdent them
	function galleryWrapper() {
		var galleries = document.querySelectorAll( '.entry-content .tiled-gallery' );
		var shouldOutdent = false;

		for( var i = 0; i < galleries.length; i++ ) {
			var gallery = galleries[ i ];
			var parent = gallery.parentNode;

			// If this tiled gallery has not yet been wrapped, add a wrapper.
			if ( parent && ! parent.classList.contains( 'tiled-gallery-wrapper' ) ) {
				var div = document.createElement( 'div' );
				parent.insertBefore( div, gallery );
				parent.removeChild( gallery );
				div.appendChild( gallery );
				div.classList.add( 'tiled-gallery-wrapper' );

				// Outdent in the next event loop.
				shouldOutdent = true;
			}
		}

		if ( shouldOutdent ) {
			emitResizeEvent();
		}
	}

	// Add an extra class to large images and videos to outdent them.
	function outdentMedia() {
		var images = document.querySelectorAll( '.entry-content img, .post-image-link img' );

		for ( var i = 0; i < images.length; i++ ) {
			var img = images[ i ];
			var caption = closest( img, 'figure' );
			var newImg = new Image();

			newImg.addEventListener(
				'load',
				// Use an IIFE to avoid scoping issues.
				( function ( img, caption, newImg ) {
					return function () {
						var imgWidth = newImg.offsetWidth;

						if ( imgWidth >= 1100 &&
								! closest( img, '.tiled-gallery-item-large' ) &&
								! closest( img, '[class^="wp-block-"]' ) ) {
							img.classList.add( 'size-big' );
						}

						if ( caption && caption.classList.contains( 'wp-caption' ) && imgWidth >= 1100 ) {
							caption.classList.add( 'size-big' );
						}
					}
				} )( img, caption, newImg )
			);

			newImg.src = img.getAttribute( 'src' );
		}

		var wrappers = document.querySelectorAll( '.entry-content .jetpack-video-wrapper' );

		for ( var j = 0; j < wrappers.length; j++ ) {
			var wrapper = wrappers[ j ];
			var firstChild = wrapper.querySelector( ':first-child' );

			if ( firstChild && firstChild.offsetWidth >= 1100 ) {
				wrapper.classList.add( 'caption-big' );
			}
		}
	}

	// After DOM is ready.
	if ( document.readyState !== 'loading' ) {
		updatePage();
	} else {
		document.addEventListener( 'DOMContentLoaded', updatePage );
	}

	// After window loads.
	if ( document.readyState === 'complete' ) {
		outdentMedia();
	} else {
		window.addEventListener( 'load', outdentMedia );
	}

	// After window is resized or infinite scroll loads new posts
	window.addEventListener( 'resize', updatePage );
	document.body.addEventListener( 'is.post-load', updatePage );

} )();
