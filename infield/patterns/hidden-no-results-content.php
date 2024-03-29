<?php
/**
 * Title: Hidden No Results Content
 * Slug: infield/hidden-no-results-content
 * Inserter: no
 */
declare( strict_types = 1 );
?>
<!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"80px","top":"20px"}}}} -->
<p style="padding-top:20px;padding-bottom:80px"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'infield' ); ?></p>
<!-- /wp:paragraph -->