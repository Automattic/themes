<?php
/**
 * Title: 404
 * Slug: vitrum/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"10vh","bottom":"15vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:10vh;padding-bottom:15vh"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;flex-basis:70%"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"has-text-align-center"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-text-align-center"><?php esc_html_e('Oops, this page could not be found. Maybe try a search?', 'vitrum');?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->