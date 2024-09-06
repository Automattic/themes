<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: single
 * Slug: vows/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","tagName":"header"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100vh"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/groovepaper.png","source":"file","title":"groovepaper"},"backgroundSize":"300px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100vh"><!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1} /-->

<!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained","justifyContent":"center"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->