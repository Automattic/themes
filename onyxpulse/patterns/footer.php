<?php
/**
 * Title: footer
 * Slug: onyxpulse/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:paragraph {"lock":{"move":false,"remove":true},"className":"no-underline"} -->
	<p class="no-underline"><?php echo __('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a>', 'onyxpulse');?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
