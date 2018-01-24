/**
 * File contact-info-area-customize-preview.js.
 *
 * Allows previewing of the background overlay opacity control.
 */
( function( $ ) {

	// Don't show the CTA if everything is empty
	$css = '.contact-info-area.contact-info-no-address.contact-info-no-phone.contact-info-no-email.contact-info-no-hours, .contact-info-area.contact-info-footer-display,';
	$css += ".contact-info-no-address .contact-info-address,";
	$css += ".contact-info-no-phone .contact-info-phone,";
	$css += ".contact-info-no-email .contact-info-email,";
	$css += ".contact-info-no-hours .contact-info-hours,";
	$css += '#masthead .contact-info-area.contact-info-header-no-display,';
	$css += '#content + .contact-info-area.contact-info-footer-no-display';
	$css += '{ display: none; }'

	$( '<style type="text/css">' + $css + '</style>' ).appendTo( 'head' );

	// Contact info in Footer or Header toggle
	wp.customize( 'radcliffe_2_contact_info_location', function( value ) {
		value.bind( function( to ) {
			if ( 'header' === to ) {
				$( '.contact-info-area' ).addClass( 'contact-info-footer-no-display' ).removeClass( 'contact-info-header-no-display' );
			} else {
				$( '.contact-info-area' ).addClass( 'contact-info-header-no-display' ).removeClass( 'contact-info-footer-no-display' );
			}
		} );
	} );

	// Update the contact info address in real time...
	wp.customize( 'radcliffe_2_contact_info_address', function( value ) {
		value.bind( function( to ) {
			$( '.contact-info-area .contact-info-address .contact-info-label' ).text( to );

			if ( '' === to ) {
				$( '.contact-info-area' ).addClass( 'contact-info-no-address' );
				$( '.contact-info-area .contact-info-address' ).hide();
			} else {
				$( '.contact-info-area' ).removeClass( 'contact-info-no-address' );
				$( '.contact-info-area .contact-info-address' ).show();
			}
		} );
	} );

	// Update the contact info phone in real time...
	wp.customize( 'radcliffe_2_contact_info_phone', function( value ) {
		value.bind( function( to ) {
			$( '.contact-info-area .contact-info-phone .contact-info-label' ).text( to );

			if ( '' === to ) {
				$( '.contact-info-area' ).addClass( 'contact-info-no-phone' );
				$( '.contact-info-area .contact-info-phone' ).hide();
			} else {
				$( '.contact-info-area' ).removeClass( 'contact-info-no-phone' );
				$( '.contact-info-area .contact-info-phone' ).show();
			}
		} );
	} );

	// Update the contact info email in real time...
	wp.customize( 'radcliffe_2_contact_info_email', function( value ) {
		value.bind( function( to ) {
			$( '.contact-info-area .contact-info-email .contact-info-label' ).text( to );

			if ( '' === to ) {
				$( '.contact-info-area' ).addClass( 'contact-info-no-email' );
				$( '.contact-info-area .contact-info-email' ).hide();
			} else {
				$( '.contact-info-area' ).removeClass( 'contact-info-no-email' );
				$( '.contact-info-area .contact-info-email' ).show();
			}
		} );
	} );

	// Update the contact info hours in real time...
	wp.customize( 'radcliffe_2_contact_info_hours', function( value ) {
		value.bind( function( to ) {
			$( '.contact-info-area .contact-info-hours .contact-info-hours-text' ).text( to );

			if ( '' === to ) {
				$( '.contact-info-area' ).addClass( 'contact-info-no-hours' );
				$( '.contact-info-area .contact-info-hours' ).hide();
			} else {
				$( '.contact-info-area' ).removeClass( 'contact-info-no-hours' );
				$( '.contact-info-area .contact-info-hours' ).show();
			}
		} );
	} );

/*
	// Update the contact info address in real time...
	wp.customize( 'radcliffe_2_contact_info_address', function( value ) {
		value.bind( function( newval ) {
			$( '.contact-info-address .contact-info-label' ).html( newval );
		} );
	} );

	// Update the contact info phone in real time...
	wp.customize( 'radcliffe_2_contact_info_phone', function( value ) {
		value.bind( function( newval ) {
			$( '.contact-info-phone .contact-info-label' ).html( newval );
		} );
	} );

	// Update the contact info email in real time...
	wp.customize( 'radcliffe_2_contact_info_email', function( value ) {
		value.bind( function( newval ) {
			$( '.contact-info-email .contact-info-label' ).html( newval );
		} );
	} );

	// Update the contact info hours in real time...
	wp.customize( 'radcliffe_2_contact_info_hours', function( value ) {
		value.bind( function( newval ) {
			$( '.contact-info-hours .contact-info-hours-text' ).html( newval );
		} );
	} );
*/

} )( jQuery );
