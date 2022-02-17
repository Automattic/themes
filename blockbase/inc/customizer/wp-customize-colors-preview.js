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
}
