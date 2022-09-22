<?php
/**
 * Title: Front Page
 * Slug: loudness/front-page
 */
?>

<?php
if ( 'posts' === get_option( 'show_on_front' ) ) {
	// Show query
	echo( '<!-- wp:pattern {"slug":"loudness/posts-list"} /-->' );
} else {
	// show content
	echo( '<!-- wp:post-content {"tagName":"main","layout":{"inherit":true},"lock":{"move":false,"remove":true}} /-->' );
}

