/**
 * File customize-preview-wpcom.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience,
 * targeting the updates needed for WordPress.com custom colours.
 */

( function( $ ) {
	wp.customize.bind( 'preview-ready', function() {
		// Changes colours in top of standard post format 'paper'
		wp.customize( 'background_color', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.entry-title a, .entry-meta a, .blog .entry-meta a.post-edit-link, .archive .entry-meta a.post-edit-link, .search .entry-meta a.post-edit-link, .page-links a, .page-links a .page-number, .entry-footer a, .entry-footer .cat-links a, .entry-footer .tags-links a, .edit-link a, .post-navigation a, .logged-in-as a, .comment-navigation a, .comment-metadata a, .comment-metadata a.comment-edit-link, .comment-reply-link, a .nav-title, .pagination a, .comments-pagination a, .widget .widget-title a, .widget ul li a, .site-footer .widget-area ul li a, .site-info a, .widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a, .site-footer .widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a, div#jp-relatedposts .jp-relatedposts-post-title a' ).css( {
							'-webkit-box-shadow' : 'inset 0 -1px 0 rgba(255, 255, 255, 1)',
							'box-shadow' : 'inset 0 -1px 0 rgba(255, 255, 255, 1)'
					} );
					$( '.entry-content a img, .widget a img' ).css( {
							'-webkit-box-shadow' : '0 0 0 8px #fff',
							'box-shadow' : '0 0 0 8px #fff'
					} );
				} else {
					$( '.entry-title a, .entry-meta a, .blog .entry-meta a.post-edit-link, .archive .entry-meta a.post-edit-link, .search .entry-meta a.post-edit-link, .page-links a, .page-links a .page-number, .entry-footer a, .entry-footer .cat-links a, .entry-footer .tags-links a, .edit-link a, .post-navigation a, .logged-in-as a, .comment-navigation a, .comment-metadata a, .comment-metadata a.comment-edit-link, .comment-reply-link, a .nav-title, .pagination a, .comments-pagination a, .widget .widget-title a, .widget ul li a, .site-footer .widget-area ul li a, .site-info a, .widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a, .site-footer .widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a, div#jp-relatedposts .jp-relatedposts-post-title a' ).css( {
							'-webkit-box-shadow' : 'inset 0 -1px 0 ' + to,
							'box-shadow' : 'inset 0 -1px 0 ' + to
					} );
					$( '.entry-content a img, .widget a img' ).css( {
							'-webkit-box-shadow' : '0 0 0 8px ' + to,
							'box-shadow' : '0 0 0 8px ' + to
					} );

				}
			} );
		} );

		// Background Colour
		wp.customize( 'background_color', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.site-content-contain' ).css( {
						'background-color' : '#ffffff',
					} );
				} else {
					$( '.site-content-contain' ).css( {
						'background-color' : to,
					} );
				}
			} );
		} );

		// Background Image
		wp.customize( 'background_image', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.site-content-contain' ).css( {
						'background-image' : 'none',
					} );
				} else {
					$( '.site-content-contain' ).css( {
						'background-image' : 'url("' + to + '")',
					} );
				}
			} );
		} );

		// Background Position X
		wp.customize( 'background_position_x', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.site-content-contain' ).css( {
						'background-position-x' : 'left',
					} );
				} else {
					$( '.site-content-contain' ).css( {
						'background-position-x' : to,
					} );
				}
			} );
		} );

		// Background Position Y
		wp.customize( 'background_position_y', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.site-content-contain' ).css( {
						'background-position-y' : 'top',
					} );
				} else {
					$( '.site-content-contain' ).css( {
						'background-position-y' : to,
					} );
				}
			} );
		} );

		// Background Size
		wp.customize( 'background_size', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.site-content-contain' ).css( {
						'background-size' : 'auto',
					} );
				} else {
					$( '.site-content-contain' ).css( {
						'background-size' : to,
					} );
				}
			} );
		} );

		// Background Repeat
		wp.customize( 'background_repeat', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.site-content-contain' ).css( {
						'background-repeat' : 'repeat',
					} );
				} else {
					$( '.site-content-contain' ).css( {
						'background-repeat' : to,
					} );
				}
			} );
		} );

		// Background Attachment
		wp.customize( 'background_attachment', function( value ) {
			value.bind( function( to ) {
				if ( '' === to ) {
					$( '.site-content-contain' ).css( {
						'background-attachment' : 'scroll',
					} );
				} else {
					$( '.site-content-contain' ).css( {
						'background-attachment' : to,
					} );
				}
			} );
		} );

	} );
} )( jQuery );
