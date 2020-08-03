/**
 * @author Per Soderlind
 * @link https://github.com/soderlind/2016-customizer-demo
 * global wp, seedletValidateWCAGColorContrastExports
 * global seedletValidateContrastText
 * exported validateWCAGColorContrast
**/
( function( $, api, exports ) {
	var self = {
		validate_color_contrast: []
	};
	if ( exports ) {
		$.extend( self, exports );
	}

	var code = 'contrast_warning';

	/**
	 * Add contrast validation to a control if it is entitled (is a valid color control).
	 *
	 * @param {wp.customize.Control} setting                   - Control.
	 * @param {wp.customize.Value}   setting.validationMessage - Validation message.
	 * @return {boolean} Whether validation was added.
	 */
	self.addWCAGColorContrastValidation = function( setting ) {
		var initialValidate;
		if ( ! self.isColorControl( setting ) ) {
			return false;
		}

		initialValidate = setting.validate;

		/**
		 * Wrap the setting's validate() method to do validation on the value to be sent to the server.
		 *
		 * @param {mixed} value   - New value being assigned to the setting.
		 * @returns {*}
		 */
		setting.validate = function (value){
			var failsWCAG = false;

			_.each ( self.validate_color_contrast[setting.id], function( color_to_compare_id ){
				var color_to_compare = $( '#customize-control-' + color_to_compare_id + ' .wp-color-result')[0].style.backgroundColor.match(/\d+/g);
				var contrast	= self.rgb( [ parseInt(color_to_compare[0]), parseInt(color_to_compare[1]), parseInt(color_to_compare[2]) ], self.hexRgb( value ) );
				var score		= self.score( contrast );
				if ( score === 'Fail' ){
					failsWCAG = true;
				} 
			});

			if ( failsWCAG ){
				var validationWarning = new api.Notification( code, { message: seedletValidateContrastText, type: 'warning' } );
				setTimeout( function(){
					self.custom_colors_setting.notifications.add( code, validationWarning );
				}, 400);
			} else {
				setTimeout( function(){
					self.custom_colors_setting.notifications.remove( code );
				}, 400);
			}

			return value;
		} 
	};

	/**
	 * Return whether the setting is entitled (i.e. if it is a title or has a title).
	 *
	 * @param {wp.customize.Setting} setting - Setting.
	 * @returns {boolean}
	 */
	self.isColorControl = function( setting ) {
		return _.findKey( self.validate_color_contrast, function( key, value ) {
			return value == setting.id;
		} );
	};

	api.bind( 'add', function( setting ) {
		self.addWCAGColorContrastValidation( setting );
	} );

	api( 'custom_colors_active', function( setting ) {
		self.custom_colors_setting = setting;
		setting.validate = function( value ) {
			if ( value == 'default' ){
				setting.notifications.remove( code );
			}
			return value;
		}
	});

	self.sprintf = function( format ) {
		for( var i=1; i < arguments.length; i++ ) {
			format = format.replace( /%s/, arguments[i] );
		}
		return format;
	};

	/**
	 * Methods used to calculate WCAG Color Contrast
	 */

	// from https://github.com/sindresorhus/hex-rgb
	self.hexRgb = function (hex) {
		if (typeof hex !== 'string') {
			throw new TypeError('Expected a string');
		}

		hex = hex.replace(/^#/, '');

		if (hex.length === 3) {
			hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
		}

		var num = parseInt(hex, 16);

		return [num >> 16, num >> 8 & 255, num & 255];
	};

	// from https://github.com/tmcw/relative-luminance
	// # Relative luminance
	//
	// http://www.w3.org/TR/2008/REC-WCAG20-20081211/#relativeluminancedef
	// https://en.wikipedia.org/wiki/Luminance_(relative)
	// https://en.wikipedia.org/wiki/Luminosity_function
	// https://en.wikipedia.org/wiki/Rec._709#Luma_coefficients

	// red, green, and blue coefficients
	var rc = 0.2126,
	  gc = 0.7152,
	  bc = 0.0722,
	  // low-gamma adjust coefficient
	  lowc = 1 / 12.92;

	self.adjustGamma = function( g ) {
	  return Math.pow((g + 0.055) / 1.055, 2.4);
	};

	/**
	 * Given a 3-element array of R, G, B varying from 0 to 255, return the luminance
	 * as a number from 0 to 1.
	 * @param {Array<number>} rgb 3-element array of a color
	 * @returns {number} luminance, between 0 and 1
	 * @example
	 * var luminance = require('relative-luminance');
	 * var black_lum = luminance([0, 0, 0]); // 0
	 */
	self.relativeLuminance = function (rgb) {
	  var rsrgb = rgb[0] / 255;
	  var gsrgb = rgb[1] / 255;
	  var bsrgb = rgb[2] / 255;

	  var r = rsrgb <= 0.03928 ? rsrgb * lowc : self.adjustGamma(rsrgb),
	    g = gsrgb <= 0.03928 ? gsrgb * lowc : self.adjustGamma(gsrgb),
	    b = bsrgb <= 0.03928 ? bsrgb * lowc : self.adjustGamma(bsrgb);

	  return r * rc + g * gc + b * bc;
	};


	// from https://github.com/tmcw/wcag-contrast
	/**
	 * Get the contrast ratio between two relative luminance values
	 * @param {number} a luminance value
	 * @param {number} b luminance value
	 * @returns {number} contrast ratio
	 * @example
	 * luminance(1, 1); // = 1
	 */
	self.luminance = function(a, b) {
	  var l1 = Math.max(a, b);
	  var l2 = Math.min(a, b);
	  return (l1 + 0.05) / (l2 + 0.05);
	};

	/**
	 * Get a score for the contrast between two colors as rgb triplets
	 * @param {array} a
	 * @param {array} b
	 * @returns {number} contrast ratio
	 * @example
	 * rgb([0, 0, 0], [255, 255, 255]); // = 21
	 */
	self.rgb = function(a, b) {
	  return self.luminance(self.relativeLuminance(a), self.relativeLuminance(b));
	};

	/**
	 * Get a score for the contrast between two colors as hex strings
	 * @param {string} a hex value
	 * @param {string} b hex value
	 * @returns {number} contrast ratio
	 * @example
	 * hex('#000', '#fff'); // = 21
	 */
	self.hex = function(a, b) {
	  return self.rgb(self.hexRgb(a), self.hexRgb(b));
	};

	/**
	 * Get a textual score from a numeric contrast value
	 * @param {number} contrast
	 * @returns {string} score
	 * @example
	 * score(10); // = 'AAA'
	 */
	self.score = function(contrast) {
	  return contrast >= 7 ? "AAA" : contrast >= 4.5 ? "AA" : "Fail";
	};

	return self;

} )( jQuery, wp.customize, seedletValidateWCAGColorContrastExports );