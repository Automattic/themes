<?php
/**
 * Title: A 404 page
 * Slug: strand/404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60"}},"color":{"background":"#f5f5f5"},"border":{"bottom":{"color":"#1e1e1e26","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-bottom-color:#1e1e1e26;border-bottom-width:1px;background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"anchor":"oops-that-page-can-t-be-found"} -->
    <h1 class="wp-block-heading" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'strand' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'strand' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /--></div>
<!-- /wp:group -->