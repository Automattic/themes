( function( $ ) {

	function loadFlexslider() {
		$( '.flex-viewport-wrapper' ).flexslider( {
			animation: "fade",
			slideshow: false,
			animationLoop: true,
			controlNav: false,
			directionNav: $('.flexslider .slides > .hero-content-wrapper').length > 1, //Hide navigation controls when we only have 1 post.
			carousel: false,
			itemMargin: 0,
			itemWidth: 1180,
			itemHeight: 600,
			smoothHeight: true,
			selector: '.slides > .hero-content-wrapper'
		} );
	}

	$(document).on( 'ready', function() {
		$(window).on( 'load', loadFlexslider );
	} );

} )(jQuery);
