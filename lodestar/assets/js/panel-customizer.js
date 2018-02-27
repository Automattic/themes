/**
 * Theme Customizer enhancements, specific to panels, for a better user experience.
 *
 * This allows us to detect when the user has opened specific sections within the Customizer,
 * and adjust our preview pane accordingly.
 */

( function( $ ) {

	wp.customize.bind( 'ready', function() {

		// Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
		wp.customize.section( 'lodestar_panel1' ).expanded.bind( function( isExpanding ) {
			// isExpanding will = true if you're entering the section, false if you're leaving it
			wp.customize.previewer.send( 'section-highlight', { section: 'lodestar-panel1', expanded: isExpanding } );
		} );

		// Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
		wp.customize.section( 'lodestar_panel2' ).expanded.bind( function( isExpanding ) {
			// isExpanding will = true if you're entering the section, false if you're leaving it
			wp.customize.previewer.send( 'section-highlight', { section: 'lodestar-panel2', expanded: isExpanding } );
		} );

		// Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
		wp.customize.section( 'lodestar_panel3' ).expanded.bind( function( isExpanding ) {
			// isExpanding will = true if you're entering the section, false if you're leaving it
			wp.customize.previewer.send( 'section-highlight', { section: 'lodestar-panel3', expanded: isExpanding } );
		} );

		// Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
		wp.customize.section( 'lodestar_panel4' ).expanded.bind( function( isExpanding ) {
			// isExpanding will = true if you're entering the section, false if you're leaving it
			wp.customize.previewer.send( 'section-highlight', { section: 'lodestar-panel4', expanded: isExpanding } );
		} );

		// Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
		wp.customize.section( 'lodestar_footer_settings' ).expanded.bind( function( isExpanding ) {
			// isExpanding will = true if you're entering the section, false if you're leaving it
			wp.customize.previewer.send( 'section-highlight', { section: 'lodestar-footer-settings', expanded: isExpanding } );
		} );

	} );
} )( jQuery );
