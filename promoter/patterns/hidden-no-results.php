<?php
/**
 * Title: Hidden No Results Content
 * Slug: promoter/hidden-no-results
 * Inserter: no
 */
?>
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'promoter' ); ?></p>
<!-- /wp:paragraph -->
