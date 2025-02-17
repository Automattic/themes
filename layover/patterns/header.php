<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: header
 * Slug: layover/header
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":24,"shouldSyncIcon":false,"style":{"color":[]}} /-->

<!-- wp:site-title {"style":{"spacing":{"blockGap":"2rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"40px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"2px","right":"2px","bottom":"2px","left":"2px"}},"border":{"top":{"color":"var:preset|color|foreground","width":"1px"},"bottom":{"color":"var:preset|color|foreground","width":"1px"},"right":[],"left":[]},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-width:1px;border-bottom-color:var(--wp--preset--color--foreground);border-bottom-width:1px;padding-top:2px;padding-right:2px;padding-bottom:2px;padding-left:2px"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element, 3. is the start of a 'em' HTML element, 4. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Shakespeare published 154 sonnets in his %1$squarto%2$s in 1609. While the initial 126 are addressed to a young man, the final 28 are directed toward an enigmatic woman referred to as the %3$sdark lady%4$s.', 'layover' ), '<em>', '</em>', '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->