/**
 * File customize-preview.js.
 *
 * Brings logo resizing technology to the Customizer.
 *
 * Contains handlers to make Customizer preview changes asynchronously.
 */
( function( $ ) {

	var api = wp.customize;
	var Logo = new RadcliffeLogo();
	var initial = null;

	api( 'custom_logo', function( value ) {
		handleLogoDetection( value() );
		value.bind( handleLogoDetection );
	} );

	api( 'logo_size', function( value ) {
		Logo.resize( value() );
		value.bind( Logo.resize );
	} );

	api( 'ready', function() {
		initial = api( 'custom_logo' )._value;
	} );

	function handleLogoDetection( to, initial ) {
		if ( '' === to ) {
			Logo.remove();
		} else if ( undefined === initial ) {
			Logo.add();
		} else {
			Logo.change();
		}
		initial = to;
	}

	function RadcliffeLogo() {
		var intId = 0;
		var hasLogo = null;
		var min = 48;

		var self = {
			resize: function( to ) {
				if ( hasLogo ) {
					var img = new Image();
					var logo = $( '.custom-logo' );

					var size = {
						width: parseInt( logo.attr( 'width' ), 10 ),
						height: parseInt( logo.attr( 'height' ), 10 ),
					}

					var max = new Object();
					max.width = $.isNumeric( logo.css( 'max-width' ) ) ? parseInt( logo.css( 'max-width' ), 10 ) : size.width;
					max.height = $.isNumeric( logo.css( 'max-height' ) ) ? parseInt( logo.css( 'max-height' ), 10 ) : size.height;

					img.onload = function() {
						var output = new Object();

						if ( size.width >= size.height ) {
							// landscape or square, calculate height as short side
							output = logo_min_max( size.height, size.width, max.height, max.width, to, min );
							size = {
								height: output.a,
								width: output.b,
							}
						} else if ( size.width < size.height ){
							// portrait, calculate height as long side
							output = logo_min_max( size.width, size.height, max.width, max.height, to, min );
							size = {
								height: output.b,
								width: output.a,
							}
						}

 						logo.css( {
							width: size.width,
							height: size.height,
						} );
					}

					img.src = logo.attr( 'src' );
				}
			},

			add: function() {
				intID = setInterval( function() {
					var logo = $( '.custom-logo[src]' );
					if ( logo.length ) {
						clearInterval( intID );
						hasLogo = true;
					}
				}, 500 );
			},

			change: function() {
				var oldlogo = $( '.custom-logo' ).attr( 'src' );
				intID = setInterval( function() {
					var logo = $( '.custom-logo' ).attr( 'src' );
					if ( logo != oldlogo ) {
						clearInterval( intID );
						hasLogo = true;
						self.resize( 50 );
					}
				}, 100 );
			},

			remove: function() {
				hasLogo = null;
			}

		}

		return self;

	}

	// a is short side, b is long side
	// x is short css max, y is long css max
	// p is percent, m is minimum short side
	function logo_min_max( a, b, amax, bmax, p, m ){
		var ppp,
			ratio,
			max = new Object(),
			size = new Object();

		ratio = ( b / a );
		max.b = ( bmax >= b ) ? b : bmax;
		max.a = ( amax >= ( max.b / ratio ) ) ? Math.floor( max.b / ratio ) : amax;

		// number of pixels per percentage point
		ppp = ( max.a - m ) / 100;

		// at 0%, the minimum is set, scale up from there
		size.a = Math.floor( m + ( p * ppp ) );
		// long side is calculated from the image ratio
		size.b = Math.floor( size.a * ratio );

		return size;
	}

} )( jQuery );
