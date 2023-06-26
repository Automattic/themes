<?php
/**
 * Title: No Results Content
 * Slug: bsoj/no-results-content
 * Inserter: no
 */
?>
<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%">
		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Hmm...', 'bsoj' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"80%"} -->
	<div class="wp-block-column" style="flex-basis:80%">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'bsoj' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
