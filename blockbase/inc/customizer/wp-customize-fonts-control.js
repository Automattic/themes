wp.customize.bind( 'ready', () => {
	let resetButton;
	let fontBodyControl;
	let fontHeadingControl;

	wp.customize.control(
		'customize-global-styles-fonts-reset-button',
		( control ) => {
			control.container
				.find( '.button' )
				.on( 'click', resetFontSelection );
			resetButton = control.container[ 0 ];
			resetButton.hidden = determineIfSetToDetault();
		}
	);

	// If the body and heading controls are null then the font customization is using
	// the old format. We need to hide these controls so that the user is forced to
	// reset to defaults before making other changes.
	wp.customize.control( 'customize-global-styles-fontsbody', ( control ) => {
		fontBodyControl = control.container[ 0 ];
		fontBodyControl.hidden = determineIfNull();
	} );
	wp.customize.control(
		'customize-global-styles-fontsheading',
		( control ) => {
			fontHeadingControl = control.container[ 0 ];
			fontHeadingControl.hidden = determineIfNull();
		}
	);

	wp.customize(
		'customize-global-styles-fontsbody',
		bindControlToHideResetButton
	);
	wp.customize(
		'customize-global-styles-fontsheading',
		bindControlToHideResetButton
	);

	function bindControlToHideResetButton( control ) {
		control.bind( () => {
			resetButton.hidden = false;
			fontHeadingControl.hidden = false;
			fontBodyControl.hidden = false;
		} );
	}

	function determineIfSetToDetault() {
		return (
			fontControlDefaultBody[ 0 ] ===
				wp.customize.settings.settings[
					'customize-global-styles-fontsbody'
				].value &&
			fontControlDefaultHeading[ 0 ] ===
				wp.customize.settings.settings[
					'customize-global-styles-fontsheading'
				].value
		);
	}

	function determineIfNull() {
		return ! (
			wp.customize.settings.settings[
				'customize-global-styles-fontsbody'
			].value &&
			wp.customize.settings.settings[
				'customize-global-styles-fontsheading'
			].value
		);
	}

	function resetFontSelection() {
		const shouldWeReload = determineIfNull();
		wp.customize( 'customize-global-styles-fontsbody', ( item ) => {
			item.set( fontControlDefaultBody[ 0 ] );
		} );
		wp.customize( 'customize-global-styles-fontsheading', ( item ) => {
			item.set( fontControlDefaultHeading[ 0 ] );
		} );
		resetButton.hidden = true;

		// If the body and heading controls are null then the font customization is using
		// the old format. We need to get the user to reset to default and then reload
		// before they make other customizations.
		if ( shouldWeReload ) {
			wp.customize.previewer.save();
			wp.customize.previewer.refresh();
		}
	}
} );
