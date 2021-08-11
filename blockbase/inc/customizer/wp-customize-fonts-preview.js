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
	// Build the new body CSS
	let innerHTML = 'body{';
	innerHTML += `font-family:${ fontSettings[ 'body' ] };`;
	innerHTML += '}';
	// Build the new heading CSS
	innerHTML += 'h1,h2,h3,h4,h5,h6{';
	innerHTML += `font-family:${ fontSettings[ 'heading' ] };`;
	innerHTML += '}';

	// Inject them into the body.
	const styleElement = document.getElementById(
		'global-styles-fonts-customizations-inline-css'
	);
	styleElement.innerHTML = innerHTML;
}
