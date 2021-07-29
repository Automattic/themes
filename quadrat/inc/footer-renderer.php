<?php

/**
 * Add a filter to the render callback of the footer so it can be translated.
 */
function quadrat_add_markup_to_footer_template( $block_content, $block ) {
	if ( 'core/template-part' !== $block['blockName'] || 'footer' !== $block['attrs']['slug'] ) {
		return $block_content;
	}
	$wp_credit = __( 'Proudly Powered by ', 'quadrat' );
	return sprintf(
		'<!-- wp:group {"className":"site-footer","style":{"spacing":{"padding":{"top":"150px","bottom":"150px"}}}} -->
	<div class="wp-block-group site-footer" style="padding-top:150px;padding-bottom: 150px"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"> %s <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
	<!-- /wp:paragraph --></div><!-- /wp:group -->',
		$wp_credit
	);
}
add_filter( 'render_block', 'quadrat_add_markup_to_footer_template', 9, 2 );
