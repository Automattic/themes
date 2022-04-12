<?php
/**
 * Title: Small quote
 * Slug: remote/small-quote
 * Categories: featured, text
 */
?>

<!-- wp:columns {"style":{"spacing":{"blockGap":"30px"}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50px","style":{"spacing":{"padding":{"top":"28px"}}}} -->
<div class="wp-block-column" style="padding-top:28px;flex-basis:50px"><!-- wp:image {"width":48,"sizeSlug":"large","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coworker.jpg" alt="<?php echo esc_attr__( 'Picture of a user', 'remote' ); ?>" width="48"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"30px","padding":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-group" style="padding-top:20px;padding-bottom:20px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="line-height:1.5"><?php echo esc_html__( 'Now that I’m working from home, I find that I am spending more time with my family, exercising more, and getting more sleep. This has not been at the expense of my productivity at work — if anything, my productivity has improved as well.', 'remote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.3"><?php echo esc_html__( '— Jane Adams', 'remote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
