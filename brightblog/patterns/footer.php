<?php
/**
 * Title: footer
 * Slug: brightblog/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer Wrapper"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTumblr%2$s', 'brightblog' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sInstgrm%2$s', 'brightblog' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sFcbook%2$s', 'brightblog' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Designed with WordPress', 'brightblog');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Whether you\'re a blogger, photographer, or creative professional, Brightblog is a versatile theme that will shine your content. Its magazine-inspired layout and customizable design make it the perfect choice for anyone looking to elevate your blog to the next level.', 'brightblog');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->