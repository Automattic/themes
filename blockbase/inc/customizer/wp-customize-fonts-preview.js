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
	let innerHTML = 'body {';
	innerHTML += `--wp--preset--font-family--body-font:${ fontSettings[ 'body' ] };`;
	innerHTML += `--wp--preset--font-family--heading-font:${ fontSettings[ 'heading' ] };`;
	innerHTML += '}';

	// Inject them into the body.
	const styleElement = document.getElementById(
		'global-styles-fonts-customizations-inline-css'
	);
	styleElement.innerHTML = innerHTML;
}
