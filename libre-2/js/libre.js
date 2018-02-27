(function($) {
	var stickyHeader = $( '.site-header' );
	var body = $( 'body' );
	var adminBar = libreadminbar; //localized in functions.php
	var stickyHeaderOffset;
	var brandingWidth = $( '.site-branding' ).width();
	var titleWidth = $( '.site-title' ).width();
	var taglineWidth = $( '.site-description' ).width();

	if ( adminBar > 0 ) {
		stickyHeaderOffset = stickyHeader.offset().top - 32;
	} else {
		stickyHeaderOffset = stickyHeader.offset().top;
	}

	var stickyTime = function() {
		if( $(window).scrollTop() > stickyHeaderOffset ) {
			body.addClass( 'sticking' );
		} else {
			body.removeClass( 'sticking' );
		}
	}

	/* Remove border from linked images */
	function linkedImages() {
		var imgs = $( '.entry-content img' );

		for ( var i = 0, imgslength = imgs.length; i < imgslength; i++ ) {
			if ( '' !== $( imgs[i] ).closest( 'a' ) ) {
				$( imgs[i] ).closest( 'a' ).addClass( 'no-line' );
			}
		}
	}

	// Avoid stress cases with site title and tagline lengths.
	function brandingWidthMagic() {
		if ( ! body.hasClass( 'sticking' ) ) {
			if ( titleWidth || taglineWidth <=  brandingWidth / 2 ) {
				$( '.site-description' ).css( { 'display': 'inline-block', 'margin-bottom': '0' } );
			}
		} else {
			$( '.site-description' ).removeAttr( 'style' );
		}
	}


	// After window loads
	$( window ).load( function() {
		linkedImages();
		stickyTime();
		brandingWidthMagic();
	} );

	// After scrolling
	$( window ).scroll( function() {
		stickyTime();
		brandingWidthMagic();
	} );

	// After window is resized or infinite scroll loads new posts
	$( window ).on( 'resize post-load', function() {
		linkedImages();
		brandingWidthMagic();
	} );
})(jQuery);