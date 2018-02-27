/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

/* global wp */

( function( $ ) {

	// Blog name
	wp.customize( 'blogname', function( value ) {

		value.bind( function( to ) {

			$( '.site-title a' ).text( to );
		});
	});

	// Blog description
	wp.customize( 'blogdescription', function( value ) {

		value.bind( function( to ) {

			$( '.site-description' ).text( to );
		});
	});

	// Header text display
	wp.customize( 'header_textcolor', function( value ) {

		value.bind( function( to ) {

			// if header text display is set to false
			if ( 'blank' === to ) {

				$( '.site-identity, .site-title, .site-description' ).css({
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute'
				});

				$( 'body' ).addClass( 'hide-site-title-description' );

			} else {

				$( '.site-identity, .site-title, .site-description' ).css({
					clip: 'auto',
					position: 'relative'
				});

				// Update body class.
				$( 'body' ).removeClass( 'hide-site-title-description' );
			}
		});
	});

	// Background colour
	wp.customize( 'background_color', function( value ) {

		value.bind( function( to ) {

			if ( '' === to ) {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-color: #ffffff; }</style>' ).appendTo( 'head' );

			} else {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-color: ' + to + '; }</style>' ).appendTo( 'head' );
			}
		});
	});

	// Background image
	wp.customize( 'background_image', function( value ) {
		value.bind( function( to ) {

			if ( '' === to ) {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-image: inherit; }</style>' ).appendTo( 'head' );

			} else {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-image: url("' + to + '"); }</style>' ).appendTo( 'head' );

			}
		});
	});

	// Background position X
	wp.customize( 'background_position_x', function( value ) {
		value.bind( function( to ) {
			if ( '' === to ) {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-position-x: inherit; }</style>' ).appendTo( 'head' );

			} else {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-position-x: ' + to + '; }</style>' ).appendTo( 'head' );
			}
		});
	});

	// Background position Y
	wp.customize( 'background_position_y', function( value ) {
		value.bind( function( to ) {
			if ( '' === to ) {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-position-y: inherit; }</style>' ).appendTo( 'head' );

			} else {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-position-y: ' + to + '; }</style>' ).appendTo( 'head' );
			}
		});
	});

	// Background size
	wp.customize( 'background_size', function( value ) {
		value.bind( function( to ) {
			if ( '' === to ) {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-size: inherit; }</style>' ).appendTo( 'head' );

			} else {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-size: ' + to + '; }</style>' ).appendTo( 'head' );
			}
		});
	});

	// Background repeat
	wp.customize( 'background_repeat', function( value ) {
		value.bind( function( to ) {
			if ( '' === to ) {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-repeat: inherit; }</style>' ).appendTo( 'head' );

			} else {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-repeat: ' + to + '; }</style>' ).appendTo( 'head' );
			}
		});
	});

	// Background attachment
	wp.customize( 'background_attachment', function( value ) {
		value.bind( function( to ) {
			if ( '' === to ) {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-attachment: inherit; }</style>' ).appendTo( 'head' );

			// Make sure background images with 'scroll' background-attachment display properly
			} else if ( 'scroll' === to ) {

				$( '<style>html { background-attachment: ' + to + '; } body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-image: none !important; background-color: transparent !important; }</style>' ).appendTo( 'head' );

			} else {

				$( '<style>html, body.custom-background, .site-header, .site-content, .single .entry-media, .widget-area, .top-navigation > div { background-attachment: ' + to + '; }</style>' ).appendTo( 'head' );
			}
		});
	});

} )( jQuery );