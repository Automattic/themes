( function( domReady ) {

	/* 
		TODO: 
		  Determine when all the CSS variables have been loaded.
			Is that something we can add as a dependency to the  wp_enqueue_script?
			If so I haven't yet been able to get that to work.

		  Determine when the editor styles wrapper has been loaded.
			Alternative tester element included below

		  Replace brightnessByColor function (random copy/pasta) with standard color luminosity utils (is there one?)
		  Ensure Lumenosity value is approprate for switching
	*/
	    
    // domReady( function() {
	setTimeout(()=>{

		const body = document.getElementsByTagName("BODY")[0]; 

		//create an element we know will be assigned the variables
		const variableTester = document.createElement('div');
		variableTester.classList.add('editor-styles-wrapper');
		body.appendChild(variableTester);

		//grab that element
		const editorWrapper = document.getElementsByClassName('editor-styles-wrapper')[0];

		//pull the color value
		const colorVariable = getComputedStyle(editorWrapper).getPropertyValue('--global--color-background');

		//now get rid of the tester
		body.removeChild(variableTester);
		delete variableTester;

		//calculate the luminosity (0 - 255)
		const brightness = brightnessByColor(colorVariable);

		if(brightness < 100) {
			body.classList.add('is-dark-theme');
		}

    // });
	}, 3000)


	/**
	 * Calculate brightness value by RGB or HEX color.
	 * @param color (String) The color value in RGB or HEX (for example: #000000 || #000 || rgb(0,0,0) || rgba(0,0,0,0))
	 * @returns (Number) The brightness value (dark) 0 ... 255 (light)
	 */
	function brightnessByColor(color) {
		color = color.replace(/\s+/g, '');
		if (color.indexOf("#") == 0) {
			const hasFullSpec = color.length == 7;
			var m = color.substr(1).match(hasFullSpec ? /(\S{2})/g : /(\S{1})/g);
			if (m) var r = parseInt(m[0] + (hasFullSpec ? '' : m[0]), 16), g = parseInt(m[1] + (hasFullSpec ? '' : m[1]), 16), b = parseInt(m[2] + (hasFullSpec ? '' : m[2]), 16);
		}
		if (color.indexOf("rgb") == 0) {
			var m = color.match(/(\d+){3}/g);
			if (m) var r = m[0], g = m[1], b = m[2];
		}
		if (typeof r != "undefined") return ((r * 299) + (g * 587) + (b * 114)) / 1000;
	}

}( wp.domReady ) );
