// Check that the settings object exists
if ( global_styles_settings ) {
	// For each of the controls add a listener
	global_styles_settings.controls.forEach( function ( control ) {
		var setting_name = global_styles_settings.slug + control.slug;
		wp.customize( setting_name, function ( value ) {
			// Get a style element to inject the setting
			var styleElement = document.getElementById(
				setting_name + '-inline-css'
			);
			value.bind( function ( to ) {
				// Build the CSS based on the settings
				styleElement.innerHTML =
					control.selector +
					'{' +
					'--wp--style--color--' +
					control.slug +
					': ' +
					to +
					';' +
					control.property +
					':' +
					to +
					'}';
			} );
		} );
	} );
}
