/* global textBookSearchToggleText */
( function( $ ) {

	var $window      = $( window ),
		testimonials = $( '.testimonials-carousel' ),
		wrapper      = $( '.js body' );

	// Search toggle.
	$( '.search-toggle' ).on( 'click.textbook', function( event ) {
		var that         = $( this ),
			wrapper      = $( '#search-container' ),
			container    = that.find( 'a' );

		event.preventDefault();

		that.toggleClass( 'active' );

		wrapper.toggleClass( 'show' );
		wrapper.parent().find('div').first().toggleClass( 'hide' );

		if ( that.hasClass( 'active' ) ) {

			container.attr( 'aria-expanded', 'true' );
			that.find( 'span' ).html( textBookSearchToggleText.close );

		} else {

			container.attr( 'aria-expanded', 'false' );
			that.find( 'span' ).html( textBookSearchToggleText.search );
		}

		if ( that.is( '.active' ) || $( '.search-toggle .screen-reader-text' )[0] === event.target ) {

			wrapper.find( '.search-field' ).focus();
		}
	} );

	// Move Jetpack sharing and post flair into the entry-footer
	$( '.entry-footer' ).after( jQuery( '#jp-post-flair, .geo-post, .entry-content > .sharedaddy' ).detach() );

	// On Load
	$( document ).ready( function() {

		// Init Testimonials Carousel
		testimonials.flexslider({
			// options
			animation:    "slide",
			selector:     ".slides > div",
			smoothHeight: true,
			slideshow:    false,
			rtl:          true,
			prevText: '<span class="screen-reader-text">Previous</span><svg version="1.1" id="previous-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve"><polygon points="8,12.7 1.3,6 2.7,4.6 8,9.9 13.3,4.6 14.7,6 "/></svg>',
			nextText: '<span class="screen-reader-text">Next</span><svg version="1.1" id="next-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve"><polygon points="8,12.7 1.3,6 2.7,4.6 8,9.9 13.3,4.6 14.7,6 "/></svg>'
		});

		// Fade in body
		wrapper.animate({
			opacity: 1,
		}, 30);

		// Triggers resize event to make sure video widgets in the footer maintain the correct aspect ratio
		setTimeout( function(){
			if ( typeof( Event ) === 'function' ) {
				window.dispatchEvent( new Event( 'resize' ) );
			} else {
				var event = window.document.createEvent( 'UIEvents' );
				event.initUIEvent( 'resize', true, false, window, 0 );
				window.dispatchEvent( event );
			}
		} );

	} );

} )( jQuery );
