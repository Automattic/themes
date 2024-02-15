<?php
/**
 * Title: Default header
 * Slug: chanson/header-with-biography
 * Categories: featured, header
 * Block Types: core/template-part/header
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"x-large"} -->
	<p class="has-x-large-font-size" style="line-height:1.1"><?php echo esc_html__( 'born in 1915, Edith Piaf was the embodiment of the tragic and the beautiful, a symbol of hope amidst the chaos.', 'chanson' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:site-logo {"width":70} /-->
</div>
<!-- /wp:group -->
