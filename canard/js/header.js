( function() {

	var siteBranding = document.getElementsByClassName( 'site-branding' )[0];
	if ( siteBranding.clientHeight > 0 ) {
		return;
	}
	document.body.className += ' no-site-branding';

} )();
