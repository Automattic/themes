<?php
/**
 * Title: 404
 * Slug: sprinkler/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"16vh","bottom":"16vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:16vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:16vh;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|primary","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"40px"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--primary);border-top-style:solid;border-top-width:1px;padding-top:40px"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('This page could not be found.', 'sprinkler');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Go to the homepage or try searching below.', 'sprinkler');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search...","width":null,"widthUnit":"px","buttonUseIcon":true,"style":{"border":{"radius":"0px","top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"style":"none","width":"0px"},"left":{"style":"none","width":"0px"}}},"fontSize":"small","fontFamily":"lato"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->