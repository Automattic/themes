<?php
/**
 * Title: footer
 * Slug: loic/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"44.45%"} -->
<div class="wp-block-column" style="flex-basis:44.45%"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-link-color"><?php echo __('About Me', 'loic');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('I’m Loïc Azar, a French creative and product manager living in London. I’m passionate about creativity, technology, and productivity, and I write about these topics on my personal website.', 'loic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22.22%"} -->
<div class="wp-block-column" style="flex-basis:22.22%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-link-color"><?php echo __('Say Hello', 'loic');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php echo __('<a href="/">Email</a>', 'loic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('<a href="/">Instagram</a>', 'loic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('<a href="/">Twitter</a>', 'loic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"typography":{"fontSize":"0.8rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:0.8rem"><!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">
<?php
    /* Translators: WordPress link. */
    $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'sunderland' ) ) . '" rel="nofollow">WordPress</a>';
    echo sprintf(
        esc_html__( 'Designed with %1$s', 'loic' ),
        $wordpress_link
    );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->