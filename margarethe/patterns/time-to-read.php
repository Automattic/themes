<?php
/**
 * Title: Time to read
 * Slug: margarethe/time-to-read
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
	<!-- wp:post-time-to-read /-->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php echo  esc_html__( 'read', 'margarethe' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
