<?php
/**
 * Title: Front Page
 * Slug: loudness/front-page
 * Inserter: no
 */
?>

<?php
if ( 'posts' === get_option( 'show_on_front' ) ) {
	// Show query
	echo( '<!-- wp:spacer {"height":"var(--wp--preset--spacing--70)"} --><div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->' );
	echo( '<!-- wp:pattern {"slug":"loudness/posts-list"} /-->' );
} else {
	// show content
	echo( '<!-- wp:post-content {"tagName":"main","layout":{"inherit":true}} /-->' );
}

