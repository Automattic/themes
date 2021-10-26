( function () {
	if ( userColorPalette && userColorSectionKey ) {
		// For each of the palette items add a listener
		userColorPalette.forEach( ( paletteItem ) => {
			const settingName = userColorSectionKey + paletteItem.slug;
			wp.customize( settingName, ( value ) => {
				value.bind( ( newValue ) => {
					paletteItem.color = newValue;
					blockBaseUpdateColorsPreview( userColorPalette );
				} );
			} );
		} );
	}
} )();

function blockBaseUpdateColorsPreview( palette ) {
	// build the CSS variables to inject
	let innerHTML = ':root,body{';
	palette.forEach( ( paletteItem ) => {
		innerHTML += `--wp--preset--color--${ paletteItem.slug }:${ paletteItem.color };`;
	} );
	innerHTML += ';}';

	// inject them into the body
	const styleElement = document.getElementById(
		'global-styles-colors-customizations-inline-css'
	);
	styleElement.innerHTML = innerHTML;

	if ( userColorDuotone ) {
		let colors = palette.map( ( paletteItem ) => paletteItem.color );
		//we are inverting the order when we have a darker background so that duotone looks good.
		colors = colors.sort( ( first, second ) => {
			return colord( first ).brightness() > colord( second ).brightness();
		} );
		const colorValues = getValuesFromColors( colors );

		if ( document.querySelector( '#wp-duotone-default-filter' ) ) {
			updateDuotoneFilter( 'wp-duotone-default-filter', colorValues );
		}
		if ( document.querySelector( '#wp-duotone-custom-filter' ) ) {
			updateDuotoneFilter( 'wp-duotone-custom-filter', colorValues );
		}
	}
}

function updateDuotoneFilter( filterID, colors ) {
	document
		.querySelector( '#' + filterID + ' feFuncR' )
		.setAttribute( 'tableValues', colors.r.join( ' ' ) );
	document
		.querySelector( '#' + filterID + ' feFuncG' )
		.setAttribute( 'tableValues', colors.g.join( ' ' ) );
	document
		.querySelector( '#' + filterID + ' feFuncB' )
		.setAttribute( 'tableValues', colors.b.join( ' ' ) );
}

function getValuesFromColors( colors = [] ) {
	const values = { r: [], g: [], b: [] };

	colors.forEach( ( color ) => {
		const rgbColor = colord( color ).toRgb();
		values.r.push( rgbColor.r / 255 );
		values.g.push( rgbColor.g / 255 );
		values.b.push( rgbColor.b / 255 );
	} );

	return values;
}
