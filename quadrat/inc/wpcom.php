<?php

/**
 * Add a filter to the render callback of the footer so it can be translated.
 * Overrides the functionality in footer-renderer.
 */
function quadrat_add_wpcom_markup_to_footer_template( $block_content, $block ) {
	if ( 'core/template-part' !== $block['blockName'] || 'footer' !== $block['attrs']['slug'] ) {
		return $block_content;
	}
	// If we are on WPCOM, do not render a credit so that the WP.com footer credit plugin can handle it
	return '<!-- wp:group {"className":"site-footer","style":{"spacing":{"padding":{"top":"150px","bottom":"150px"}}}} -->
	<div class="wp-block-group site-footer site-info" style="padding-top:150px;padding-bottom: 150px">
	</div><!-- /wp:group -->';
}
add_filter( 'render_block', 'quadrat_add_wpcom_markup_to_footer_template', 9, 2 ); // Make the priority one higher than the default so it filters before the WPCOM plugin
