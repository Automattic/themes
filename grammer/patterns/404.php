<?php
/**
 * Title: 404
 * Slug: grammer/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"categories":["hidden"],"name":"Content Wrapper"},"style":{"spacing":{"padding":{"top":"15vh","bottom":"25vh"},"margin":{"top":"0vh","bottom":"0vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0vh;margin-bottom:0vh;padding-top:15vh;padding-bottom:25vh"><!-- wp:group {"metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! That page can’t be found.', 'grammer');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'It looks like nothing was found at this location.%1$sMaybe try a search?', 'grammer' ), '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"0px","width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->