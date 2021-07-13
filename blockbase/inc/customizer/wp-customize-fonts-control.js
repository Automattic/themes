wp.customize.bind( 'ready', () => {
	let resetButton;

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

	function resetFontSelection() {
		wp.customize( 'customize-global-styles-fontsbody', ( item ) => {
			item.set( fontControlDefaultBody[ 0 ] );
		} );
		wp.customize( 'customize-global-styles-fontsheading', ( item ) => {
			item.set( fontControlDefaultHeading[ 0 ] );
		} );
		resetButton.hidden = true;
	}
} );
