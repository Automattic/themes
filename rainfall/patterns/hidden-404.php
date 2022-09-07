<?php
/**
 * Title: 404 content
 * Slug: rainfall/hidden-404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"backgroundColor":"light-orange", "align": "full", "layout": {"inherit": true}} -->
<div class="alignfull wp-block-group has-light-orange-background-color has-background">
	<!-- wp:group {"align": "wide"} -->
	<div class="alignwide wp-block-group">
		<!-- wp:heading {"level":2} -->
		<h2><?php esc_html_e( 'Missing page', 'rainfall' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:spacer {"height":"var(--wp--preset--spacing--20)"} -->
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The page you requested cannot be found; poor luck, eh?', 'rainfall' ); ?></p>
<!-- /wp:paragraph -->
