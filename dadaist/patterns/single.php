<?php
/**
 * Title: single
 * Slug: dadaist/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Section title"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"0.5","textTransform":"uppercase","letterSpacing":"-0.02rem"}},"fontSize":"medium","fontFamily":"urw-gothic"} /-->

<!-- wp:group {"metadata":{"name":"Halftone stroke"},"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada-tex_1.png","id":10435,"source":"file","title":"dada-halftone-tex_1"},"backgroundSize":"720px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"40px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Content wrapper"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"aspectRatio":"4/3","align":"wide"} /-->

<!-- wp:group {"metadata":{"name":"Meta and content"},"style":{"spacing":{"margin":{"top":"4vh","bottom":"4vh"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:4vh;margin-bottom:4vh"><!-- wp:template-part {"slug":"post-meta"} /-->

<!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained"}} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"comments"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /-->