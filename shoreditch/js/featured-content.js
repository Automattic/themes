( function( $ ) {

	var featuredContent

	function initSlider() {
		featuredContent
			.flexslider( {
				selector: '.featured-content-wrapper > .featured-post',
				animation: 'slide',
				smoothHeight: true,
				slideshow: false,
				animationSpeed: 500,
				directionNav: false,
				useCSS: false
			} )
			.animate( {
				'opacity': 1
			}, 500 );
	}

	$( document ).ready( function() {
		featuredContent = $( '.featured-content' );

		$( window ).on( 'load.shoreditch', initSlider );
	} );

} )( jQuery );
