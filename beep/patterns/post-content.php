<?php
/**
 * Title: Post Content
 * Slug: beep/post-content
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">$<?php echo esc_html__( 'content', 'beep' ); ?> = [</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:post-content /-->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"0","right":"var:preset|spacing|40"}}},"textColor":"inactive"} -->
<p class="has-inactive-color has-text-color" style="margin-right:var(--wp--preset--spacing--40);margin-left:0">];</p>
<!-- /wp:paragraph -->
