<?php
/**
 * Title: front-page
 * Slug: kansei/front-page
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/milad-fakurian-Tc_4PdN-Fq0-unsplash-edited-scaled-1.jpg","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":65,"minHeightUnit":"vh","isDark":false,"style":{"color":[]}} -->
<div class="wp-block-cover is-light" style="min-height:65vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/milad-fakurian-Tc_4PdN-Fq0-unsplash-edited-scaled-1.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"16.7%"} -->
<div class="wp-block-column" style="flex-basis:16.7%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.3%"} -->
<div class="wp-block-column" style="flex-basis:33.3%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designer, curator, and writer. I am a graduate of %1$sMusashino Art University%2$s where I also work as a professor since April 2003 aside of the consultant practice.', 'kansei' ), '<a href="' . esc_url( 'https://en.wikipedia.org/wiki/Musashino_Art_University' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-front-page"} /--></div>
<!-- /wp:group -->