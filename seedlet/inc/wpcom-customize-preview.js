/**
 * File wpcom-customize-preview.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience,
 * targeting the updates needed to hide the page title on the homepage on WordPress.com.
 */

( function( $ ) {
	// Hide Front Page Title
	wp.customize( 'hide_front_page_title', function( value ) {
		value.bind( function( to ) {
			if ( true === to ) {
				$( 'body' ).addClass( 'hide-homepage-title' );

			} else {
				$( 'body' ).removeClass( 'hide-homepage-title' );
			}
		} );
	} );

	// The wpcom colors plugin does not handle live updates of extra CSS.
	// This function provides the CSS updates via JavaScript.
	wp.customize( 'colors_manager[colors]', function( value ) {
		value.bind( function( to ) {
			const { bg, fg1, fg2 } = to;
			const extraCSS = `/*
				* Site title text shadow.
				*/
				.site-title a {
					background-image: linear-gradient(to right, ${ fg1 } 100%, transparent 100%);
					text-shadow: 1px 0px ${ bg },
								-1px 0px ${ bg },
								-2px 0px ${ bg },
								2px 0px ${ bg },
								-3px 0px ${ bg },
								3px 0px ${ bg },
								-4px 0px ${ bg },
								4px 0px ${ bg },
								-5px 0px ${ bg },
								5px 0px ${ bg };
				}

				/*
				* Custom gradients.
				*/
				.has-hard-diagonal-gradient-background {
					background: linear-gradient(to bottom right, ${ fg1 } 49.9%, ${ fg2 } 50%);
				}

				.has-hard-diagonal-inverted-gradient-background {
					background: linear-gradient(to top left, ${ fg1 } 49.9%, ${ fg2 } 50%);
				}

				.has-diagonal-gradient-background {
					background: linear-gradient(to bottom right, ${ fg1 }, ${ fg2 });
				}

				.has-diagonal-inverted-gradient-background {
					background: linear-gradient(to top left, ${ fg1 }, ${ fg2 });
				}

				.has-hard-horizontal-gradient-background {
					background: linear-gradient(to bottom, ${ fg1 } 50%, ${ fg2 } 50%);
				}

				.has-hard-horizontal-inverted-gradient-background {
					background: linear-gradient(to top, ${ fg1 } 50%, ${ fg2 } 50%);
				}

				.has-horizontal-gradient-background {
					background: linear-gradient(to bottom, ${ fg1 }, ${ fg2 });
				}

				.has-horizontal-inverted-gradient-background {
					background: linear-gradient(to top, ${ fg1 }, ${ fg2 });
				}

				.has-stripe-gradient-background {
					background: linear-gradient(to bottom, transparent 20%, ${ fg1 } 20%, ${ fg1 } 80%, transparent 80%);
				}`;

			// Append an extra style element that overrides the previous extra CSS
			if ( $('#custom-colors-extra-css').length ) {
				$( '#custom-colors-extra-css' ).html( extraCSS );
			} else {
				$( 'head' ).append( `<style id="custom-colors-extra-css">${ extraCSS }</style>` );
			}
		} );
	} );
} )( jQuery );
