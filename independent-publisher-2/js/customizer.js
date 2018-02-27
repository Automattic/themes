/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description, #hero-header #hero-social-navigation' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				if ( '#333332' === to ) {
					$( '#independent-publisher-2-custom-header-css' ).remove();
					$( '.site-title, .site-description, .site-header .social-navigation li a, .site-header .menu-toggle' ).removeAttr( 'style' )
				} else {
					$( '.site-title, .site-description, .site-header .social-navigation li a, .site-header .menu-toggle' ).css( {
						'clip': 'auto',
						'color': to,
						'position': 'relative'
					} );

					$( '.site-header .menu-toggle' ).css( {
						'border-color': to
					} );

					$( '.site-header .social-navigation, #hero-header #hero-social-navigation' ).css( {
						'clip': 'auto',
						'position': 'relative'
					} );

					$( '.site-description' ).css( {
						'opacity' : 0.8
					} );
				}
			}
		} );
	} );
} )( jQuery );
