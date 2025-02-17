<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: home
 * Slug: timestream/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Corporative CTA"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"width":"200px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/rawpixel-id-556658.png" alt="" style="aspect-ratio:1;object-fit:cover;width:200px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h1 class="wp-block-heading alignwide has-contrast-color has-text-color has-link-color"><?php esc_html_e('Ten Years of Nature Restoration and Community Empowerment', 'timestream');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"About VM"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Victorian Meadows is a non-profit organization dedicated to revitalizing the natural beauty of urban outskirts and ensuring that green spaces flourish where they are needed most. For the past decade, we have worked tirelessly to transform underutilized areas around London into vibrant meadows, gardens, and wildlife havens.', 'timestream');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Timeline"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Explore Our Milestones', 'timestream');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"L"}} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"metadata":{"name":"Post template wrapper"},"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|secondary","style":"dotted","width":"1px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--secondary);border-left-style:dotted;border-left-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"stretch","width":"15%","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Date wrapper"},"style":{"border":{"left":{"color":"var:preset|color|secondary","width":"3px"},"top":[],"right":[],"bottom":[]},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--secondary);border-left-width:3px;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"format":"Y","style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:60%"><!-- wp:group {"metadata":{"name":"Post template content"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Read more ⇢","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"layout":{"selfStretch":"fixed","flexSize":"25%"},"color":{"duotone":"var:preset|duotone|default"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"L"}} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:read-more {"content":"Read more"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->