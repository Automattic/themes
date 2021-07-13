if ( fontSettings ) {
	Object.keys( fontSettings ).forEach( function ( selector ) {
		wp.customize( 'customize-global-styles-fonts' + selector, function (
			control
		) {
			control.bind( ( newFont ) => {
				fontFamily = googleFonts[ newFont ][ 'fontFamily' ];
				fontSettings[ selector ] = fontFamily;
				blockBaseUpdateFontPreview();
			} );
		} );
	} );
}

function blockBaseUpdateFontPreview() {
	// Build the new CSS variables.
	let innerHTML = ':root,body{';
	innerHTML += `--wp--custom--body--typography--font-family:${ fontSettings[ 'body' ] };`;
	innerHTML += `--wp--custom--heading--typography--font-family:${ fontSettings[ 'heading' ] };`;
	innerHTML += '}';

	// Inject them into the body.
	const styleElement = document.getElementById(
		'global-styles-fonts-customizations-inline-css'
	);
	styleElement.innerHTML = innerHTML;
}
