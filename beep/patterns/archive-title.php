<?php
/**
 * Title: Archive Title
 * Slug: beep/archive-title
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|80","bottom":"0","left":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php echo esc_html__( 'archive', 'beep' ); ?> =</p>
	<!-- /wp:paragraph -->

	<!-- wp:query-title {"type":"archive"} /-->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-left:0">;</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
