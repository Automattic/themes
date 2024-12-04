<?php
/**
 * Title: footer
 * Slug: dadaist/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60","right":"0","left":"0"},"blockGap":"var:preset|spacing|60"},"dimensions":{"minHeight":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="min-height:10px;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:group {"metadata":{"name":"Social Block"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"secondary","iconColorValue":"#121212e3","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"wordpress.org","service":"tumblr"} /-->

<!-- wp:social-link {"url":"wordpress.org","service":"mastodon"} /-->

<!-- wp:social-link {"url":"wordpress.org","service":"instagram"} /-->

<!-- wp:social-link {"url":"wordpress.org","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:group {"metadata":{"name":"Halftone stroke"},"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Credits"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s.', 'dadaist' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:site-logo {"width":48,"shouldSyncIcon":false,"style":{"color":{"duotone":"var:preset|duotone|bw"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->