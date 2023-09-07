<?php
/**
 * Title: A 404 page
 * Slug: luce/404
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'luce' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|80"},"dimensions":{"minHeight":"55vh"}},"backgroundColor":"tertiary","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="min-height:55vh;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'luce' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'luce' ); ?>","showLabel":false,"buttonText":"<?php echo esc_html__( 'Search', 'luce' ); ?>"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->