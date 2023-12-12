<?php
/**
 * Title: Post Nav
 * Slug: beep/post-nav
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php echo esc_html__( 'previous', 'beep' ); ?> =</p>
	<!-- /wp:paragraph -->

	<!-- wp:post-navigation-link {"type":"previous","showTitle":true} /-->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-left:0">;</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php echo esc_html__( 'next', 'beep' ); ?> =</p>
	<!-- /wp:paragraph -->

	<!-- wp:post-navigation-link {"showTitle":true} /-->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-left:0">;</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
