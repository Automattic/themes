<?php
/**
 * Title: footer
 * Slug: downtown/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|secondary","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px"><!-- wp:group {"metadata":{"name":"Footer wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:site-title /-->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress.%2$s', 'downtown' ), '<a rel="noreferrer noopener" href="' . esc_url( 'http://wordpress.org' ) . '" data-type="URL" data-id="wordpress.org" target="_blank">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->