// Check that the settings object exists
if ( global_styles_settings ) {
	// For each of the controls add a listener
	global_styles_settings.controls.forEach( function ( control ) {
		var setting_name = global_styles_settings.slug + control.variable;
		wp.customize( setting_name, function ( value ) {
			// Get a style element to inject the setting
			var styleElement = document.getElementById(
				setting_name + '-inline-css'
			);

			value.bind( function ( to ) {
				// Build the CSS based on the settings
				var css =
					// Build the variable.
					'body{' +
					control.variable +
					': ' +
					to +
					';}' +
					// Build the selector.
					control.selector +
					'{' +
					control.declaration +
					':' +
					to +
					'}';

				console.log( setting_name );
				console.log( styleElement );

				styleElement.innerHTML = css;
			} );
		} );
	} );
}
