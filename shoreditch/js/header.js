( function() {

	var body, header, content;
	body    = document.body;
	header  = document.getElementById( 'masthead' );
	content = document.getElementById( 'content' );

	/* Add a padding top equivalend to #masthead's height to #content depending on the screen width (breakpoint 600px) */
	function contentPadding() {
		content.removeAttribute( 'style' );

		if ( body.clientWidth >= 896 ) {
			content.style.paddingTop = header.offsetHeight + 'px';
		} else {
			content.removeAttribute( 'style' );
		}
	}

	window.onload   = contentPadding;

	/* Recalculate contentPadding() on screen resize after 600ms */
	function contentPaddingResize() {
		setTimeout( contentPadding , 600);
	}

	window.onresize = contentPaddingResize;

	/* Toggle body 'scrolling' class when scrolling */
	function scrollPage() {
	    if ( window.pageYOffset > 0 ) {
	        body.classList.add( 'scrolling' );
	    } else {
	        body.classList.remove( 'scrolling' );
	    }
	}

	window.onscroll = scrollPage;

} )();
