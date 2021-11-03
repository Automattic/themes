var enabledDuotone = duotoneVars[ 'duotoneControl' ] === '1' ? true : false;

wp.customize( 'duotone_control', ( value ) => {
	value.bind( ( newValue ) => {
		enabledDuotone = newValue;
		toggleDuotoneFilter( '#wp-duotone-default-filter', enabledDuotone );
		toggleDuotoneFilter( '#wp-duotone-custom-filter', enabledDuotone );
	} );
} );

if ( userColorPalette && userColorSectionKey ) {
	// For each of the palette items add a listener
	userColorPalette.forEach( ( paletteItem ) => {
		const settingName = userColorSectionKey + paletteItem.slug;
		wp.customize( settingName, ( value ) => {
			value.bind( ( newValue ) => {
				paletteItem.color = newValue;
				blockBaseUpdateColorsPreview( userColorPalette );
				console.log( userColorPalette );
			} );
		} );
	} );
}

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

	if ( duotoneVars[ 'userColorDuotone' ] ) {
		const colors = palette.map( ( paletteItem ) => paletteItem.color );
		//we are inverting the order when we have a darker background so that duotone looks good.
		colors.sort( ( first, second ) => {
			if (
				colord( first ).brightness() > colord( second ).brightness()
			) {
				return 1;
			}

			return -1;
		} );

		const colorValues = getValuesFromColors( colors );

		updateDuotoneFilter( '#wp-duotone-default-filter', colorValues );
		updateDuotoneFilter( '#wp-duotone-custom-filter', colorValues );
	}
}

function updateDuotoneFilter( filterID, colors ) {
	if ( document.querySelector( filterID ) ) {
		toggleDuotoneFilter( filterID, enabledDuotone );
		document
			.querySelector( filterID + ' feFuncR' )
			.setAttribute( 'tableValues', colors.r.join( ' ' ) );
		document
			.querySelector( filterID + ' feFuncG' )
			.setAttribute( 'tableValues', colors.g.join( ' ' ) );
		document
			.querySelector( filterID + ' feFuncB' )
			.setAttribute( 'tableValues', colors.b.join( ' ' ) );
	}
}

function toggleDuotoneFilter( filterID, enable ) {
	console.log( enable );
	//This effectively disables the duotone filter
	if ( document.querySelector( filterID ) ) {
		let colorMatrix = document.querySelector( filterID + ' feColorMatrix' );
		let matrixValues = '';
		if ( enable ) {
			matrixValues = colorMatrix.getAttribute( 'oldValues' );
			colorMatrix.setAttribute( 'values', matrixValues );
			colorMatrix.setAttribute( 'oldValues', '' );
			document
				.querySelector( filterID + ' feFuncR' )
				.setAttribute( 'type', 'table' );
			document
				.querySelector( filterID + ' feFuncG' )
				.setAttribute( 'type', 'table' );
			document
				.querySelector( filterID + ' feFuncB' )
				.setAttribute( 'type', 'table' );
		} else {
			matrixValues = colorMatrix.getAttribute( 'values' );
			colorMatrix.setAttribute( 'oldValues', matrixValues );
			colorMatrix.setAttribute( 'values', '' );
			document
				.querySelector( filterID + ' feFuncR' )
				.setAttribute( 'type', 'identity' );
			document
				.querySelector( filterID + ' feFuncG' )
				.setAttribute( 'type', 'identity' );
			document
				.querySelector( filterID + ' feFuncB' )
				.setAttribute( 'type', 'identity' );
		}
	}
}

// This function is from Gutenberg.
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
