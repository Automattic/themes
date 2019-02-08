/**
 * Theme frontend scripts
 *
 * @package    dyad
 *
 */

( function( $ ) {

	var $window = $( window );

	$( '.no-js' ).removeClass( 'no-js' );

	/**
	 * Banner slider
	 */

	if ( $().slick ) {

		$( '#site-banner.enable-slider .site-banner-inner' ).slick( {
			'adaptiveHeight' : false,
			'autoplay'       : true,
			'autoplaySpeed'  : ( ! jQuery( '#site-banner' ).data( 'speed' ) ) ? ( 5400 ) : ( jQuery( '#site-banner' ).data( 'speed' ) ),
			'cssEase'        : 'ease-in-out',
			'dots'           : false,
			'draggable'      : false,
			'easing'         : 'easeInOutBack',
			'fade'           : true,
			'pauseOnHover'   : true,
			'slide'          : 'article',
			'speed'          : 600,
			'swipeToSlide'   : true,
			'prevArrow'      : '<div class="slider-nav slider-nav-prev"><button type="button" class="slick-prev"><span class="genericon genericon-expand"></span></button></div>',
			'nextArrow'      : '<div class="slider-nav slider-nav-next"><button type="button" class="slick-next"><span class="genericon genericon-expand"></span></button></div>'
		} );

	}


	/**
	 * Page scrolled?
	 */

	if ( 0 == $window.scrollTop() ) {
		$( 'body' ).addClass( 'not-scrolled' )
	}

	$window.on( 'scroll', function( e ) {
		if ( 0 == $window.scrollTop() ) {
			$( 'body' ).addClass( 'not-scrolled' ).removeClass( 'is-scrolled' );
		} else {
			$( 'body' ).addClass( 'is-scrolled' ).removeClass( 'not-scrolled' );
		}
	} );


	/*
	 * Add 'focus' style to contact form
	 */

	$('.comment-form-author input, .comment-form-email input, .comment-form-url input, .comment-form-comment textarea').focus( function() {
		$( this ).parent().addClass( 'focus' );
	} ).blur( function() {
		if( "" == $( this). val() ) {
			$( this ).parent().removeClass( 'focus' );
		}
	} );

	/*
	 * Make sure 'Add Yours' comment link doesn't overshoot the form when header is fixed
	 */

	$( '.add-comment-link' ).click( function( e ) {
		if( $( window ).width() > 1400 ) {
			e.preventDefault();
			var offset = $( '#respond' ).offset();
			var scrollto = offset.top - ( $('#masthead').innerHeight() + 50 );
			$('html, body').animate({scrollTop:scrollto}, 0);
		}
	} );


	/**
	 * Make sure content isn't too high in grid view
	 */

	function adjustPosts() {
		$('.posts .entry-inner').each( function() {
			var $contain = $(this),
				$innerContainHeight = $('.entry-inner-content', this ).height(),
				$linkMoreHeight = $( '.link-more', this ).height();
				$header = $('.entry-header', this),
				$headerHeight = $header.innerHeight(),
				$content = $('.entry-content', this),
				$contentHeight = $content.innerHeight(),
				$wholeContentHeight = $headerHeight + $contentHeight;

			if ( ( $innerContainHeight - $linkMoreHeight ) < $wholeContentHeight ) {
				$contain.parent().addClass('too-short');
			} else {
				$contain.parent().removeClass('too-short');
			}
		} );
	}


	/**
	 * Adjust header height
	 */

	function adjustHeaderHeight() {
	 	var $header = $('#masthead'),
	 		$headerHeight = $header.outerHeight() + 50;

	 	if( $('body').hasClass('blog') || $('body').hasClass('home')  ) {
			if( $('.site-banner-header').length !== 0 && $('.site-banner-header').offset().top <= $headerHeight ) {
		 		$('.site-banner').addClass('too-tall');
			}

		} else {
			$('body:not(.blog, .home, .single-format-image.has-post-thumbnail) .site-content').css('padding-top', $headerHeight );
		}
	}

	/**
	 * Masonry for footer widgets
	 */

	function widgetMasonry() {

	 	// Make sure we're on a larger screen
		if ( 'none' !== $( '#colophon .widget-area .widget:first-of-type' ).css( 'float' ) ) {
			// Determine text direction
			var ltr = true;
			if ( $('html' ).attr( 'dir' ) == 'rtl') {
				ltr = false;
			}

			$grid = $( '.grid-container' ).masonry( {
				itemSelector: '.widget',
				columnWidth: '.widget-area aside',
				isOriginLeft: ltr,
			} );

			// Re-fire masonry after set of time, for any late-loading widgets
			setTimeout( function() { $grid.masonry( 'layout' ); }, 2000 );
		}
	}

	/**
	 * Firing events
	 */

	// Fire on load
	$( window ).on( 'load', function() {
		widgetMasonry();
	} );

	// Fire on document ready
	$( document ).ready(function(){
		adjustPosts();
		adjustHeaderHeight();

		// Make sure we're on a larger screen
		if ( 'none' !== $( '#colophon .widget-area .widget:first-of-type' ).css( 'float' ) ) {

			// Set some min-heights to help improve Masonry's treatment of these widgets

			// Get Twitter widgets and set a min-height on parent elements
			$( 'a.twitter-timeline' ).each( function() {

				var thisHeight = $( this ).attr( 'data-height' );

				// Set the widget to have this height
				$( this ).parent().css( 'min-height', thisHeight + 'px' );
			} );

			// Get Facebook widgets and set a min-height on parent elements
			$( '.fb-page' ).each( function() {

				// Get some settings from the initial markup:
				var $set_height = $( this ).data( 'height' ),
					$hide_cover = $( this ).data( 'hide-cover' ),
					$show_facepile = $( this ).data( 'show-facepile' ),
					$show_posts = $( this ).data( 'show-posts' ), // AKA stream
					$min_height = $set_height; // set the default 'min-height'

				// These values are defaults from the FB widget.
				var $no_posts_no_faces = 130,
					$no_posts = 220;

				if ( $show_posts ) {
					// Showing posts; may also be showing faces and/or cover - the latter doesn't affect the height at all.
					$min_height = $set_height;

				} else if ( $show_facepile ) {
					// Showing facepile with or without cover image - both would be same height.
					// If the user selected height is lower than the no_posts height, we'll use that instead
					$min_height = ( $set_height < $no_posts ) ? $set_height : $no_posts;

				} else {
					// Either just showing cover, or nothing is selected (both are same height).
					// If the user selected height is lower than the no_posts_no_faces height, we'll use that instead
					$min_height = ( $set_height < $no_posts_no_faces ) ? $set_height : $no_posts_no_faces;
				}

				// apply min-height to .fb-page container
				$( this ).css( 'min-height', $min_height + 'px' );
			} );
		}
	} );

	//Fire on window resize
	var resizeTimer;

	$( window ).on( 'resize', function() {
		clearTimeout( resizeTimer );
		resizeTimer = setTimeout( function() {
			adjustPosts();
			adjustHeaderHeight();

			// Fire Masonry, in case we're moving from mobile to desktop
			widgetMasonry();
		}, 250 );
	} );

	// if Infinite Scroll, fire again when new posts are loaded
	$( document.body ).on( 'post-load', function() {
		adjustPosts();
	} );

} )( jQuery );
