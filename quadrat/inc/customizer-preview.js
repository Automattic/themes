//NOTE: The way this works currently only one variable at a time is customized
//since they (now) share a single <style> element.  Some part of this will need
//to be refactored now that we're using --preset instead of --custom

// Check that the settings object exists
if ( global_styles_settings ) {
	// For each of the controls add a listener
	global_styles_settings.controls.forEach( function ( control ) {
		var setting_name = global_styles_settings.slug + control.slug;

		wp.customize( setting_name, function ( value ) {
			console.log( 'setting name', setting_name );

			// Get a style element to inject the setting
			var styleElement = document.getElementById(
				'global-styles-customizations-inline-css'
			);

			value.bind( function ( to ) {
				console.log( 'to', to );
				// Build the CSS based on the settings
				styleElement.innerHTML =
					// Build the variable.
					control.selector +
					'{' +
					'--wp--preset--color--' +
					control.slug +
					': ' +
					to +
					';' +
					// Build the selector.
					control.property +
					':' +
					to +
					'}';
				console.log( 'innerHTML', styleElement.innerHTML );
			} );
		} );
	} );
}
