( function($) {

		$( '.flex-viewport-wrapper' ).flexslider( {
			animation: "slide",
			slideshow: false,
			animationLoop: true,
			controlNav: false,
			directionNav: true,
			carousel: false,
			itemMargin: 0,
			itemWidth: 1092
		} );

		$(window).on( 'resize', $( '.flex-viewport-wrapper' ).flexslider() );

		/**
		 * Disable default click behavior in
		 * More Projects list on
		 * portfolio current project item
		 */
		$( '.project-navigation-wrapper li.current' ).on( 'click', function( e ) {
			e.preventDefault();
			$( this ).css( 'cursor', 'default' );
		});

} )(jQuery);