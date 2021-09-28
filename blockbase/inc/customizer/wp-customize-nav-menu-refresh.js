( function () {
	// Refresh the preview when menu controls are changed
	wp.customize.control.bind( 'change', ( control ) => {
		if ( control.extended( wp.customize.Menus.MenuItemControl ) ) {
			wp.customize.previewer.refresh();
		}
	} );

	// Refresh the preview when menu items are removed
	wp.customize.control.bind( 'remove', ( control ) => {
		if ( control.extended( wp.customize.Menus.MenuItemControl ) ) {
			wp.customize.previewer.refresh();
		}
	} );
} )();
