/**
 * File style-packs-customizer.js.
 *
 * Contains the customizer bindings for style packs.
 */

( function( $ ) {

	// Style packs data.
	var config = stylePacksData;
	var body = document.body;
	
	loadPreviewStylesheets();

	// Active style pack.
	wp.customize( 'active_style_pack', function( value ) {
		var currentStyle = value();
		value.bind( function( to ) {
			removeCustomStyles();
			if ( 'default' === to ) {
				removeStyle( currentStyle );
			} else {
				applyStyle( to, currentStyle );
			}
			fireEvent( 'change', {
				from: currentStyle,
				to: to
			} );
			body.classList.remove( getBodyClass( currentStyle ) );
			body.classList.add( getBodyClass( to ) );
			currentStyle = to;
		} );
	} );
	
	function fireEvent( evt, payload ) {
		$( document ).trigger( ['style_packs', evt].join( '.' ), payload );
	}

	function createLink( id, uri ) {
		var link = document.createElement( 'link' );
		link.setAttribute( 'rel', 'stylesheet' );
		link.setAttribute( 'id', id );
		link.setAttribute( 'href', uri );
		return link;
	}

	function getBodyClass( style ) {
		return stylePacksData.body_class_format.replace( '%s', style );
	}

	function applyStyle( style, prevStyle ) {
		if ( prevStyle ) {
			removeStyle( prevStyle );
		}

		var styleData = config.styles[ style ];

		if ( styleData ) {
			link = createLink( styleData.id, styleData.uri );
			document.head.appendChild( link );
		}

		_.each( config.fonts[ style ], function( uri, id ) {
			var link = createLink( id, uri );
			document.head.appendChild( link );
		} );
	}

	function removeStyle( style ) {
		if ( 'default' !== style ) {
			if ( config.styles[ style ] ) {
				$( 'head #' + config.styles[ style ].id ).remove();
			}
			_.each( config.fonts[ style ], function( uri, id ) {
				$( 'head #' + id ).remove();
			} );
		}
	}
	
	function loadPreviewStylesheets() {
		var style = config.preview_style, data = config.styles[ style ];
		_.each( config.fonts[ style ], function( uri, id ) {
			document.head.appendChild( createLink( id, uri ) );
		} );
		if ( data ) {
			document.head.appendChild( createLink( data.id, data.uri ) );
		}
	}
	
	function removeCustomStyles() {
		$( '#custom-colors-css, #custom-background-css, #jetpack-custom-fonts-css', document.head ).remove();
	}

} )( jQuery );
