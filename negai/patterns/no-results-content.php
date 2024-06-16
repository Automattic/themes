<?php
/**
 * Title: No Results Content
 * Slug: negai/no-results-content
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><?php echo esc_html_x( 'Nothing found. Try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'negai' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
