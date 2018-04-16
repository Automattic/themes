/*!
 * Script for AltoFocus
 *
 * @package Altofocus
 */

/* global altoFocusFlexSliderText */
( function( $ ) {

	/**
	 * Set variables
	 */
	var body,
		$wrapper        = $( '.js body' ),
		$widgetlist     = $( '.widget > ul' ).not( '.widget_wpcom_social_media_icons_widget > ul, .widget_author_grid > ul, .jetpack_widget_social_icons > ul' ),
		$gallery_slider = $( '.flexslider' );

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
	 * Stick header to window when scrolling passes the masthead height threshold
	 */
	function stickyPageHeader() {

		// get the amount the window has scrolled
		var scroll        = $( this ).scrollTop(),
			header_height = $( '#masthead' ).outerHeight(),
			$page_header  = $( '.hfeed .page-header' );

		// add the 'fixed' class to the header menu based on the window position
		if ( scroll >= header_height ) {

			$page_header.addClass( 'sticky' );

		} else {

			$page_header.removeClass( 'sticky' );
		}
	}

	/**
	 * Split widget lists
	 */
	function initColumnLists() {

		$widgetlist.columnlist({
			size           : 2,
			'class'        : 'widget-list',
			incrementClass : 'widget-list-'
		});
	}

	/**
	 * Init Gallery Slider
	 */
	function initGallerySlider() {

		// Determine text direction
		var $text_direction = true;
		if ( $( 'html' ).attr( 'dir' ) === 'rtl' ) {

			$text_direction = false;
		}

		$gallery_slider.flexslider({
			// options
			animation:    "slide",
			selector:     ".slides > .slide",
			smoothHeight: true,
			slideshow:    false,
			rtl:          $text_direction,
			prevText:     '<span class="screen-reader-text">'+ altoFocusFlexSliderText.previous +'</span> <span class="meta-nav" aria-hidden="true"><svg class="arrow-icon left-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><rect class="rectangle" x="0" y="0" width="40" height="40" /><polyline class="arrow" points="27,6 13,20 27,34" /></svg></span>',
			nextText:     '<span class="screen-reader-text">'+ altoFocusFlexSliderText.next +'</span> <span class="meta-nav" aria-hidden="true"><svg class="arrow-icon right-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><rect class="rectangle" x="0" y="0" width="40" height="40" /><polyline class="arrow" points="13 34 27 20 13 6" /></svg></span>',
		});
	}

	/*
	 * Fade in page
	 * - only if js is enabled
	 */
	function fadeInPage() {

		$wrapper.animate({
			opacity: 1,
		}, 100);
	}

	/**
	 * Execute functions
	 */
	$( document )
		.ready( initColumnLists )
		.ready( initGallerySlider )
		.ready( function() {

			body = $( document.body );

			window.addEventListener( 'scroll', altofocus_debounce( stickyPageHeader, 20, 1 ) );

			/**
			 * Window calls
			 */
			$( window )
				.load( fadeInPage );
		} );

})(jQuery);
