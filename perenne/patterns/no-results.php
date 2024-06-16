<?php
/**
 * Title: No Results Content
 * Slug: perenne/no-results
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0px;line-height:1.8"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'perenne' ); ?></p>
<!-- /wp:paragraph -->
