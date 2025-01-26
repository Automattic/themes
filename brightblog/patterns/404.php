<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: brightblog/404
 * Inserter: no
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"0rem","bottom":"0rem"},"blockGap":{"top":"0rem","left":"0rem"}},"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|secondary","style":"solid","width":"4rem"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns alignfull" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:4rem;margin-top:0rem;margin-bottom:0rem;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:column {"width":"20%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-coral-dream-1"}}}},"backgroundColor":"white","textColor":"custom-coral-dream-1","layout":{"type":"default"}} -->
<div class="wp-block-column has-custom-coral-dream-1-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:80%"><!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"metadata":{"name":"Content Wrapper"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"dimensions":{"minHeight":"50vh"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="min-height:50vh;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-coral-dream-1"}}}},"textColor":"custom-coral-dream-1"} -->
<h1 class="wp-block-heading has-text-align-left has-custom-coral-dream-1-color has-text-color has-link-color" id="oops-that-page-can-t-be-found"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'That page%1$scan’t be found.', 'brightblog' ), '<br>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Search block"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Maybe try a search?', 'brightblog');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-pages"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->