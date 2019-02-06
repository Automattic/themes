/**
 * Button 2 Javascript
 */

( function( $ ) {

	function fancyImages() {
		var imgs = $( '.entry-content img.fancy, .entry-content .is-style-fancy, .entry-content .wp-block-image.fancy' );

		for ( var i = 0, imgslength = imgs.length; i < imgslength; i++ ) {
			if ( '' !== $( imgs[i] ) ) {

				$( imgs[i] ).wrap( '<span class="fancy-image"></span>' );

				var fancyImg = $( imgs[i] ).closest( '.fancy-image' );

				if ( '' == $( imgs[i] ).closest( 'figure' ) ) {
					//This image is not captioned; carry over the classes
					fancyImg.addClass( $( imgs[i] ).attr( 'class' ) );
					fancyImg.removeClass( 'fancy' );
				}

				fancyImg.wrapInner( '<span class="corners"></span>' );
				fancyImg.append( '<span class="shadow"></span>' );
			}
		}
	}

	// After window loads
	$( window ).load( function() {
		fancyImages();
	} );

	// After infinite scroll loads new posts
	$( window ).on( 'post-load', function() {
		fancyImages();
	} );

} )( jQuery );
