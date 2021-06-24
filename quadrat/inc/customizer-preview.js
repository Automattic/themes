if ( user_color_palette ) {
	// For each of the palette items add a listener
	user_color_palette.forEach( ( palette_item ) => {
		let setting_name = 'customize-global-styles' + palette_item.slug;
		wp.customize( setting_name, ( value ) => {
			value.bind( ( newValue ) => {
				palette_item.color = newValue;
				updatePreview( user_color_palette );
			} );
		} );
	} );
}

function updatePreview( palette ) {
	// build the CSS variables to inject
	let innerHTML = ':root,body{';
	palette.forEach( ( palette_item ) => {
		innerHTML += `--wp--preset--color--${ palette_item.slug }:${ palette_item.color };`;
	} );
	innerHTML += ';}';

	// inject them into the body
	let styleElement = document.getElementById(
		'global-styles-customizations-inline-css'
	);
	styleElement.innerHTML = innerHTML;
}
