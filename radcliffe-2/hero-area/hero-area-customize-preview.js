/**
 * File hero-area-customize-preview.js.
 *
 * Allows previewing of all the options in real time
 */
( function( $ ) {

	// Don't show the CTA if everything is empty
	$( '<style type="text/css">.hero-area.hero-no-title.hero-no-content.hero-no-buttontext.hero-no-buttonlink { display: none !important; } </style>' ).appendTo( 'head' );

	// Checkbox toggle
	wp.customize( 'radcliffe_2_hero_area_display', function( value ) {

		// Check to see if CTA is set to hidden; if yes, hide in the Customizer, too.
		if( false === wp.customize.settings.values.radcliffe_2_hero_area_display ) {
			$( '.hero-area' ).hide();
		}

		value.bind( function( to ) {
			if ( false === to ) {
				$( '.hero-area' ).hide();
			} else {
				$( '.hero-area' ).show();
			}
		} );
	} );

	// CTA Title
	wp.customize( 'radcliffe_2_hero_area_title', function( value ) {
		value.bind( function( to ) {
			$( '.hero-area-title' ).text( to );

			if ( '' === to ) {
				$( '.hero-area' ).addClass( 'hero-no-title' );
			} else {
				$( '.hero-area' ).removeClass( 'hero-no-title' );
			}
		} );
	} );

	// CTA Content
	wp.customize( 'radcliffe_2_hero_area_content', function( value ) {
		value.bind( function( to ) {
			$( '.hero-area-content' ).html( to );

			if ( '' === to ) {
				$( '.hero-area' ).addClass( 'hero-no-content' );
			} else {
				$( '.hero-area' ).removeClass( 'hero-no-content' );
			}
		} );
	} );

	// CTA Button Text
	wp.customize( 'radcliffe_2_hero_area_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.hero-area-button a' ).text( to );

			if ( '' === to ) {
				$( '.hero-area' ).addClass( 'hero-no-buttontext' );
			} else {
				$( '.hero-area' ).removeClass( 'hero-no-buttontext' );
			}
		} );
	} );

	// CTA Button Link
	wp.customize( 'radcliffe_2_hero_area_button_url', function( value ) {
		value.bind( function( to ) {
			$( '.hero-area-button a' ).attr( 'href', to );

			if ( '' === to ) {
				$( '.hero-area' ).addClass( 'hero-no-buttonlink' );
			} else {
				$( '.hero-area' ).removeClass( 'hero-no-buttonlink' );
			}
		} );
	} );

	// CTA Background Image
	wp.customize( 'radcliffe_2_hero_area_background', function( value ) {
		value.bind( function( to ) {
			if ( "" === to ) {
				$( '.hero-area' ).removeClass( 'has-post-thumbnail' ).css( 'background-image', 'none' );
			} else {
				$( '.hero-area' ).addClass( 'has-post-thumbnail' ).css( 'background-image', 'url(' + to + ')');
			}
		} );
	} );

	// CTA Background Overlay Opacity

	// Set up our preview CSS using increments of 10, up to 90
	$css = '';
	for ( $i = 0; $i <= 90; $i += 10 ) {
		$css += '.background-opacity-' + $i + '.hero-area:before { opacity: ' + ( $i/100 ) + '; }';
	}
	$( '<style type="text/css">' + $css + '</style>' ).appendTo( 'head' );

	// We can't append CSS to a :before element via JavaScript, since it's not in the DOM
	// So let's preview using classes instead!
	wp.customize( 'radcliffe_2_hero_overlay_opacity', function( value ) {
		value.bind( function( to ) {
			$( '.hero-area' ).each( function() {;
				// Lets get rid of any existing classes
				var prefix = 'background-opacity-';
				var classes = this.className.split( ' ' ).filter( function( c ) {
					return c.lastIndexOf( prefix, 0 ) !== 0;
				} );
				this.className = classes.join( ' ' ).trim();
			} );

			$( '.hero-area' ).addClass( 'background-opacity-' + to );
		} );
	} );

} )( jQuery );
