wp.customize.bind( 'ready', function () {
	wp.customize.control(
		'customize-global-styles-fonts-reset-button',
		function ( control ) {
			control.container
				.find( '.button' )
				.on( 'click', resetFontSelection );
		}
	);

	function resetFontSelection() {
		wp.customize( 'customize-global-styles-fontsbody', function ( item ) {
			item.set( fontControlDefaultBody[ 0 ] );
		} );

		wp.customize( 'customize-global-styles-fontsheading', function (
			item
		) {
			item.set( fontControlDefaultHeading[ 0 ] );
		} );
	}
} );
