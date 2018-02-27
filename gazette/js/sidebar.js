( function() {

	var sidebar, button, footer;

	sidebar = document.getElementById( 'secondary' );
	if ( ! sidebar ) {
		return;
	}

	button = document.getElementsByClassName( 'sidebar-toggle' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	footer = document.getElementById( 'colophon' );

	sidebar.setAttribute( 'aria-expanded', 'false' );

	button.onclick = function() {
		if ( -1 !== sidebar.className.indexOf( 'toggled' ) ) {
			sidebar.className = sidebar.className.replace( ' toggled', '' );
			button.className = button.className.replace( ' toggled', '' );
			footer.className = footer.className.replace( ' sidebar-toggled', '' );
			sidebar.setAttribute( 'aria-expanded', 'false' );
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			sidebar.className += ' toggled';
			button.className += ' toggled';
			footer.className += ' sidebar-toggled';
			sidebar.setAttribute( 'aria-expanded', 'true' );
			button.setAttribute( 'aria-expanded', 'true' );
		}
	};

} )();
