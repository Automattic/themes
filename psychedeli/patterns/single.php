<?php
/**
 * Title: single
 * Slug: psychedeli/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"gradient":"default-gradient","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-default-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Contrast Color Wrapper"},"align":"wide","style":{"border":{"left":{"width":"1px"},"right":{"width":"1px"}},"spacing":{"padding":{"right":"4px","left":"4px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-right:4px;padding-left:4px"><!-- wp:group {"metadata":{"name":"Base Color Wrapper"},"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="border-right-width:1px;border-left-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"metadata":{"name":"Featured Image Cover"},"align":"wide","style":{"dimensions":{"aspectRatio":"16/9"},"color":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Section Title"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","level":1} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"post-meta"} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:group {"metadata":{"name":"Comments Wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"comments","area":"uncategorized"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Celebrative CTA"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"gradient":"inverted-gradient","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-inverted-gradient-gradient-background has-background" style="border-right-width:1px;border-left-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":64} /-->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="padding-top:var(--wp--preset--spacing--40)"><?php esc_html_e('The enchanting psychedelic literature.', 'psychedeli');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.4"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="line-height:1.4"><?php esc_html_e('Welcome to Psychedelic. Here, we\'re dedicated to exploring the transformative power and profound insights found within the pages of psychedelic-inspired books and literature.', 'psychedeli');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Footer wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div>
<!-- /wp:group -->