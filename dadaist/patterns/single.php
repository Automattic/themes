<?php
/**
 * Title: single
 * Slug: dadaist/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Section title"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"0.5","textTransform":"uppercase","letterSpacing":"-0.02rem"}},"fontSize":"medium","fontFamily":"urw-gothic"} /-->

<!-- wp:group {"metadata":{"name":"Halftone stroke"},"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"40px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Content wrapper"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Featured Image wrapper"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"aspectRatio":"4/3","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post meta wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"post-meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained"}} /-->

<!-- wp:group {"metadata":{"name":"Comments wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"comments"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /-->