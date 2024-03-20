<?php
/**
 * Title: No Results Content
 * Slug: freddie/no-results-content
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<p style="margin-bottom:0px"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'freddie' ); ?></p>
<!-- /wp:paragraph -->
