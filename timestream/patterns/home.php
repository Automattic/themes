<?php
/**
 * Title: home
 * Slug: timestream/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"width":"240px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/rawpixel-id-556658.png" alt="<?php esc_attr_e('', 'timestream');?>" style="aspect-ratio:1;object-fit:cover;width:240px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h1 class="wp-block-heading alignwide has-contrast-color has-text-color has-link-color"><?php esc_html_e('The Origins of Agriculture and the Transformation of the Human Societies', 'timestream');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":0,"query":{"perPage":100,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|secondary","style":"dotted","width":"1px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--secondary);border-left-style:dotted;border-left-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:15%"><!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|secondary","width":"3px"},"top":[],"right":[],"bottom":[]},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--secondary);border-left-width:3px;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"format":"Y","style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:60%"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50","padding":{"bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"0%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:0%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"layout":{"selfStretch":"fixed","flexSize":"25%"},"color":[]}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->