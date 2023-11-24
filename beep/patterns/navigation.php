<?php
/**
 * Title: Navigation
 * Slug: beep/navigation
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php echo esc_html__( 'pages', 'beep' ); ?> = [</p>
	<!-- /wp:paragraph -->

	<!-- wp:navigation {"overlayMenu":"never","hasIcon":false,"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} /-->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|inactive"}}}},"textColor":"inactive"} -->
	<p class="has-inactive-color has-text-color has-link-color" style="margin-left:var(--wp--preset--spacing--30)">];</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
