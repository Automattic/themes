/**
 * File frontpage.js.
 *
 * Handles scrolling navigation for the front-page.php template
 */

( function( $ ) {

	$( document ).ready( function() {

		var navHeight = $( '.header-wrapper' ).outerHeight();

		$( '.panel-navigation a' ).on( 'click', function( e ) {

			e.preventDefault();

			var panel = $( this ).attr( 'href' );

			$( 'body, html' ).animate( {
				scrollTop: $( panel ).offset().top - navHeight - 30,
			}, 1000 );

		});

	});

	$( document ).on ( 'scroll', function( e ) {

		e.preventDefault();

		var navHeight       = $( '.header-wrapper' ).outerHeight();
		var currentPosition = window.pageYOffset;
		var topPanel        = $( 'body' ).offset().top;
		var counter         = 1;

		if ( currentPosition >= topPanel ) {

			$( '.panel-navigation a' ).removeClass( 'active' );

			$( '.panel-navigation a.panel0' ).addClass( 'active' );

		}

		$( '.panel' ).each( function() {

			var panelPosition = parseInt( $( this ).offset().top ) - navHeight - 30;

			if ( currentPosition >= panelPosition ) {

				$( '.panel-navigation a' ).removeClass( 'active' );

				$( '.panel-navigation a.panel' + counter ).addClass( 'active' );
			}

			counter++;

		} );

	});

} )( jQuery );