/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	/**
	 * Create function to check length of site description
	 * if displayed instead of slideshow or static front page
	 *
	 * We want to add/remove a class to show/hide decorative elements
	 * to make the Customizer preview correctly.
	 */

	function checkDescLength() {
		var descLength = $.trim( $( '.entry-title.site-description' ).text() ).length;
		if ( descLength === 0 ) {
			$( '.banner-description' ).addClass( 'hide-deco' );
		} else {
			$( '.banner-description' ).removeClass( 'hide-deco' );
		}
	}

	checkDescLength();

	// Fire the above function if featured content is edited
	wp.customize( 'featured-content[tag-name]', function( value ) {
		value.bind( function() {
			checkDescLength();
		} );
	} );

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
			checkDescLength();
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-branding .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-branding .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );

} )( jQuery );
