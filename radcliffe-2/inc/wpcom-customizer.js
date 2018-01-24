/*
 * WordPress.com-specific.
 * Track the clicks for certain theme features.
 */
( function() {
	wp.customize.bind( 'ready', function() {
		logoResize = document.querySelector( '#customize-control-logo_size input[type=range]' );
		callToActionSection = document.getElementById( 'accordion-section-radcliffe_2_hero_area' );
		contactInfoSection = document.getElementById( 'accordion-section-radcliffe_2_contact_info' );
		stylePacksSection = document.getElementById( 'accordion-section-style_pack_theme_options' );
		callToActionSectionButton  = callToActionSection.getElementsByTagName( 'h3' )[0];
		contactInfoSectionButton  = contactInfoSection.getElementsByTagName( 'h3' )[0];
		stylePacksSectionButton  = stylePacksSection.getElementsByTagName( 'h3' )[0];

		// Tracking for Logo Resizer clicks.
		if ( logoResize ) {
			logoResize.addEventListener( 'click', function() {
				window._tkq = window._tkq || [];
				window._tkq.push( [
					'recordEvent',
					'wpcom_radcliffe2_customize_logo_resize_click',
					{ status: 'clicked' }
				] );
			} );
		}

		// Tracking for Call to Action clicks.
		if ( callToActionSection ) {
			if ( callToActionSectionButton ) {
				callToActionSectionButton.addEventListener( 'click', function() {
					window._tkq = window._tkq || [];
					window._tkq.push( [
						'recordEvent',
						'wpcom_radcliffe2_customize_call_to_action_click',
						{ status: 'clicked' }
					] );
				} );
			}
		}

		// Tracking for Contact Info clicks.
		if ( contactInfoSection ) {
			if ( contactInfoSectionButton ) {
				contactInfoSectionButton.addEventListener( 'click', function() {
					window._tkq = window._tkq || [];
					window._tkq.push( [
						'recordEvent',
						'wpcom_radcliffe2_customize_contact_info_click',
						{ status: 'clicked' }
					] );
				} );
			}
		}

		// Tracking for Style Packs clicks.
		if ( stylePacksSection ) {
			if ( stylePacksSectionButton ) {
				stylePacksSectionButton.addEventListener( 'click', function() {
					window._tkq = window._tkq || [];
					window._tkq.push( [
						'recordEvent',
						'wpcom_radcliffe2_customize_style_packs_click',
						{ status: 'clicked' }
					] );
				} );
			}
		}
	} );
} ).call( this );
