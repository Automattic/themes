/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Collect information from panel-customizer.js about which panels are opening
	wp.customize.bind( 'preview-ready', function() {
		wp.customize.preview.bind( 'section-highlight', function( data ) {

			if ( $( '.' + data.section ).length ) {

				// If there's an expanded panel section, scroll down to that panel & highlight in the preview
				if ( true === data.expanded ) {

					$( 'body' ).animate( {
						scrollTop: $( '.' + data.section ).offset().top - $( '.header-wrapper' ).outerHeight(), //Accounts for fixed header height
					}, 600 );

					$( '.' + data.section ).addClass( 'affinity-highlight' );
				// If we've left the panel, remove the highlight and scroll back to the top
				} else {
					$( 'body' ).animate( {
						scrollTop: 0,
					}, 600 );
					$( '.' + data.section ).removeClass( 'affinity-highlight' );
				}

			}
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
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description a' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header overlay opacity.
	wp.customize( 'affinity_overlay', function( value ) {
		value.bind( function( to ) {
			$( '.custom-header-image' ).css( {
				'opacity': to,
			} );
		} );
	} );

	// Display the excerpt when Blog Display is set to Full post
	wp.customize( 'jetpack_content_blog_display', function( value ) {
		value.bind( function( to ) {
			// make sure we're not on a single page
			if ( ! $( 'body.hfeed' ).length ) return;

			if ( 'content' == to ){
				if ( $( '.entry-summary' ).length ) {
					$( '.entry-summary' ).show();
				} else {
					$( '.entry-content' ).each( function() {
						var the_excerpt = $( this + ' .jetpack-the-excerpt' ).html()
						// add an excerpt to each article
						$( this ).prepend( the_excerpt );
					});
				}
			} else {
				$( '.entry-summary' ).hide();
			}
		} );
	} );

	/* Featured Images background attachment.
	 * Disabled because the Customizer doesn't like fixed-position backgrounds
	wp.customize( 'affinity_scrolling', function( value ) {
		value.bind( function( to ) {

			if ( 1 == to ) {
				$( '.custom-header-image' ).css( 'background-attachment', 'fixed' );
			} else {
				$( '.custom-header-image' ).css( 'background-attachment', 'scroll' );
			}

		} );
	} );*/

} )( jQuery );