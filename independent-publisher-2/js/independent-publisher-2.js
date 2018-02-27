( function( $ ) {

    /*
     * Wrap tiled galleries so we can outdent them
     */
    function galleryWrapper() {
        var gallery = $( '.entry-content' ).find( '.tiled-gallery' );

        //If this tiled gallery has not yet been wrapped, add a wrapper
        if ( ! gallery.parent().hasClass( 'tiled-gallery-wrapper' ) ) {
            gallery.wrap( '<div class="tiled-gallery-wrapper"></div>' );
            gallery.resize();
        }
    }

    /*
     * Add an extra class to large images and videos to outdent them
     */
    function outdentMedia() {

        $( '.entry-content img, .post-image-link img' ).each( function() {

            var img = $( this ),
                caption = $( this ).closest( 'figure' ),
                new_img = new Image();

                new_img.src = img.attr( 'src' );

                $( new_img ).load( function() {

                    var img_width = new_img.width;

                    if ( img_width >= 1100 && img.parents( '.tiled-gallery-item-large' ).length === 0 ) {
                        $( img ).addClass( 'size-big' );
                    }

                    if ( caption.hasClass( 'wp-caption' ) && img_width >= 1100 ) {
                        caption.addClass( 'size-big' );
                    }
                } );
        } );

        $( '.entry-content .jetpack-video-wrapper' ).each( function() {
            if ( $( this ).find( ':first-child' ).width >= 1100 ) {
                $( this ).addClass( 'caption-big' );
            }
        } );
    }

    // After DOM is ready
    $( document ).ready( function() {
        galleryWrapper();
        outdentMedia();
    } );

    // After window loads
    $( window ).load( function() {
        outdentMedia();
    } );

    // After window is resized or infinite scroll loads new posts
    $( window ).on( 'resize post-load', function() {
        galleryWrapper();
        outdentMedia();
    } );

} )( jQuery );
