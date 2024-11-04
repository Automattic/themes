<?php
/**
 * Title: footer-front-page
 * Slug: kansei/footer-front-page
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:3rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"16.7%"} -->
<div class="wp-block-column" style="flex-basis:16.7%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.3%"} -->
<div class="wp-block-column" style="flex-basis:33.3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s', 'kansei' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->