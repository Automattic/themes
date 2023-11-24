<?php
/**
 * Title: Post Title
 * Slug: beep/post-title
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php echo esc_html__( 'title', 'beep' ); ?> =</p>
	<!-- /wp:paragraph -->

	<!-- wp:post-title {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-left:0">;</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
