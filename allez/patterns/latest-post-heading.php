<?php
/**
 * Title: Latest Posts Heading
 * Slug: allez/latest-post-heading
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px"}},"fontSize":"small","fontFamily":"source-sans-3"} -->
	<h2 class="wp-block-heading has-source-sans-3-font-family has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0px"><?php echo esc_html__( 'Latest Posts', 'allez' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
