wp.customize( 'color_palette', ( value ) => {
	value.bind( ( newValue ) => {
		const newPalette = colorPalettes[ newValue ].colors;
		Object.keys( newPalette ).forEach( function ( slug ) {
			const color = newPalette[ slug ];
			wp.customize
				.control( userColorSectionKey + slug )
				.setting.set( color );
		} );
	} );
} );
