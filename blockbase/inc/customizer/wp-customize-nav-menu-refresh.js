( function () {
	// Augment each menu item control once it is added and embedded.
	wp.customize.control.bind( 'change', ( control ) => {
		if ( control.extended( wp.customize.Menus.MenuItemControl ) ) {
			wp.customize.previewer.refresh();
		}
	} );
} )();
