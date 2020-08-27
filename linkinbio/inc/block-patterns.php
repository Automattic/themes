<?php
/**
 * Block Patterns
 *
 * @package linkinbio
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	
	register_block_pattern_category(
		'linkinbio',
		array( 'label' => __( 'Link in Bio', 'linkinbio' ) )
	);
}

/**
 * Register Custom Block Patterns
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'linkinbio/music',
		array (
			'title'		=> __( 'Link in Bio: Music', 'linkinbio' ),
			'categories'=> array( 'linkinbio' ),
			'content'	=> "<!-- wp:embed {\"url\":\"https://www.youtube.com/watch?v=pB5gaJloeRU\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/watch?v=pB5gaJloeRU\n</div></figure>\n<!-- /wp:embed -->\n\n<!-- wp:buttons {\"className\":\"is-style-linkinbio-large-buttons\"} -->\n<div class=\"wp-block-buttons is-style-linkinbio-large-buttons\"><!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Soundcloud</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Bandcamp</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">YouTube</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Spotify</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Apple Music</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Tidal</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:social-links {\"align\":\"center\",\"className\":\"is-style-linkinbio-secondary-color-buttons\"} -->\n<ul class=\"wp-block-social-links aligncenter is-style-linkinbio-secondary-color-buttons\"><!-- wp:social-link {\"url\":\"https://wordpress.org\",\"service\":\"wordpress\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://facebook.com\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://twitter.com\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://instsagram.com\",\"service\":\"instagram\"} /-->\n\n<!-- wp:social-link {\"service\":\"linkedin\"} /-->\n\n<!-- wp:social-link {\"service\":\"youtube\"} /--></ul>\n<!-- /wp:social-links -->",
		)
	);
	register_block_pattern(
		'linkinbio/podcast',
		array (
			'title'		=> __( 'Link in Bio: Podcast', 'linkinbio' ),
			'categories'=> array( 'linkinbio' ),
			'content'	=> "<!-- wp:buttons {\"className\":\"is-style-linkinbio-large-buttons\"} -->\n<div class=\"wp-block-buttons is-style-linkinbio-large-buttons\"><!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">iTunes</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Spotify</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Soundcloud</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"borderRadius\":50} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:50px\">Stitcher</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:social-links {\"align\":\"center\",\"className\":\"is-style-linkinbio-secondary-color-buttons\"} -->\n<ul class=\"wp-block-social-links aligncenter is-style-linkinbio-secondary-color-buttons\"><!-- wp:social-link {\"url\":\"https://wordpress.org\",\"service\":\"wordpress\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://facebook.com\",\"service\":\"facebook\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://twitter.com\",\"service\":\"twitter\"} /-->\n\n<!-- wp:social-link {\"url\":\"https://instsagram.com\",\"service\":\"instagram\"} /-->\n\n<!-- wp:social-link {\"service\":\"linkedin\"} /-->\n\n<!-- wp:social-link {\"service\":\"youtube\"} /--></ul>\n<!-- /wp:social-links -->",
		)
	);
} 