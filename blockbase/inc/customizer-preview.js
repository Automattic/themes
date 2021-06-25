if ( userColorPalette ) {
	// For each of the palette items add a listener
	userColorPalette.forEach( ( paletteItem ) => {
		const settingName = 'customize-global-styles' + paletteItem.slug;
		wp.customize( settingName, ( value ) => {
			value.bind( ( newValue ) => {
				paletteItem.color = newValue;
				updatePreview( userColorPalette );
			} );
		} );
	} );
}

function updatePreview( palette ) {
	// build the CSS variables to inject
	let innerHTML = ':root,body{';
	palette.forEach( ( paletteItem ) => {
		innerHTML += `--wp--preset--color--${ paletteItem.slug }:${ paletteItem.color };`;
	} );
	innerHTML += ';}';

	// inject them into the body
	const styleElement = document.getElementById(
		'global-styles-customizations-inline-css'
	);
	styleElement.innerHTML = innerHTML;
}
