/**
 * Theme Customizer enhancements, specific to panels, for a better user experience.
 *
 * This allows us to detect when the user has opened specific sections within the Customizer,
 * and adjust our preview pane accordingly.
 */

( function( $ ) {

	wp.customize.bind( 'ready', function() {

		// Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
		wp.customize.section( 'affinity_panel1' ).expanded.bind( function( isExpanding ) {
			// isExpanding will = true if you're entering the section, false if you're leaving it
			wp.customize.previewer.send( 'section-highlight', { section: 'affinity-panel1', expanded: isExpanding } );
		} );

		wp.customize.section( 'affinity_panel2' ).expanded.bind( function( isExpanding ) {
			wp.customize.previewer.send( 'section-highlight', { section: 'affinity-panel2', expanded: isExpanding } );
		} );

		wp.customize.section( 'affinity_panel3' ).expanded.bind( function( isExpanding ) {
			wp.customize.previewer.send( 'section-highlight', { section: 'affinity-panel3', expanded: isExpanding } );
		} );

		wp.customize.section( 'affinity_panel4' ).expanded.bind( function( isExpanding ) {
			wp.customize.previewer.send( 'section-highlight', { section: 'affinity-panel4', expanded: isExpanding } );
		} );

		wp.customize.section( 'affinity_panel5' ).expanded.bind( function( isExpanding ) {
			wp.customize.previewer.send( 'section-highlight', { section: 'affinity-panel5', expanded: isExpanding } );
		} );

	} );

} )( jQuery );
