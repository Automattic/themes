/**
 * Theme Customizer enhancements, specific to panels, for a better user experience.
 *
 * This allows us to detect when the user has opened specific sections within the Customizer,
 * and adjust our preview pane accordingly.
 */

( function( $ ) {

  wp.customize.bind( 'ready', function() {

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel1' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel1', expanded: isExpanding } );
    } );

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel2' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel2', expanded: isExpanding } );
    } );

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel3' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel3', expanded: isExpanding } );
    } );

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel4' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel4', expanded: isExpanding } );
    } );

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel5' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel5', expanded: isExpanding } );
    } );

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel6' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel6', expanded: isExpanding } );
    } );

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel7' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel7', expanded: isExpanding } );
    } );

    // Detect when the section for each panel is expanded (or closed) so we can adjust preview accordingly
    wp.customize.section( 'pique_panel8' ).expanded.bind( function( isExpanding ) {
      // isExpanding will = true if you're entering the section, false if you're leaving it
      wp.customize.previewer.send( 'section-highlight', { section: 'pique-panel8', expanded: isExpanding } );
    } );

    /*
    var panels = [ '1', '2', '3', '4', '5', '6', '7', '8' ];
    // Add a listener for each panel
    for ( i=0; panels[i] =< 8; i++ ) {
      console.log ( panels[i] );
      wp.customize.section( 'pique_panel' + panels[i] ).expanded.bind( function( isExpanding ) {
        // this will return true you're entering the section, false if you're leaving it
        wp.customize.previewer.send( 'section-highlight', { section: 'pique_panel' + panels[], expanded: isExpanding } );
      } );
    }
    */

  } );

} )( jQuery );
