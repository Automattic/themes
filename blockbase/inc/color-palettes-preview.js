wp.customize( 'color_palette', ( value ) => {
	value.bind( ( newValue ) => {
		const newPalette = colorPalettes[ newValue ].colors;
		newPalette.forEach( function ( paletteColor ) {
			wp.customize
				.control( 'customize-global-styles' + paletteColor.slug )
				.setting.set( paletteColor.color );
		} );
	} );
} );
