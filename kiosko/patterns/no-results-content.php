<?php
/**
 * Title: Hidden No Results Content
 * Slug: kiosko/no-results-content
 * Categories: text
 */

declare( strict_types = 1 );
?>
<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<p style="margin-bottom:0px"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'kiosko' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"30vh","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:30vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
