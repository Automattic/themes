<?php

/**
 * Title: Home
 * Slug: snd/home
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Join millions of readers and subscribe to the Modern Wisdom. Enter your email below to receive new ideas that could change your life.', 'snd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/subscriptions {"submitButtonText":"SUBSCRIBE","borderRadius":50} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:separator {"style":{"color":{"background":"#ffffff26"}},"className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-default" style="background-color:#ffffff26;color:#ffffff26"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Reader Reviews', 'snd' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.88rem","right":"0.88rem","bottom":"0.88rem","left":"0.88rem"}}},"backgroundColor":"primary","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-primary-background-color has-text-color has-background" style="border-radius:100px;padding-top:0.88rem;padding-right:0.88rem;padding-bottom:0.88rem;padding-left:0.88rem"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.6"}},"textColor":"background","fontSize":"large"} -->
<p class="has-background-color has-text-color has-large-font-size" style="line-height:0.6">❝</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary","fontSize":"large"} -->
<p class="has-secondary-color has-text-color has-large-font-size"><em><?php echo esc_html__( 'I learn something new from every single issue!', 'snd' ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '- Jane Doe', 'snd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.88rem","right":"0.88rem","bottom":"0.88rem","left":"0.88rem"}}},"backgroundColor":"primary","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-primary-background-color has-text-color has-background" style="border-radius:100px;padding-top:0.88rem;padding-right:0.88rem;padding-bottom:0.88rem;padding-left:0.88rem"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"0.6"}},"textColor":"background","fontSize":"large"} -->
<p class="has-background-color has-text-color has-large-font-size" style="line-height:0.6">❝</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary","fontSize":"large"} -->
<p class="has-secondary-color has-text-color has-large-font-size"><em><?php echo esc_html__( 'A joy to read! The advice and insights I get from this newsletter are priceless.', 'snd' ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '- Estelle Vo', 'snd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:separator {"style":{"color":{"background":"#ffffff26"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#ffffff26;color:#ffffff26"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Recent Issues', 'snd' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.65rem","right":"0.75rem","bottom":"0.5rem","left":"0.75rem"}}},"backgroundColor":"primary","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-primary-background-color has-text-color has-background" style="border-radius:100px;padding-top:0.65rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"background","fontSize":"large"} -->
<p class="has-background-color has-text-color has-large-font-size" style="line-height:1"><sup>→</sup></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"},"fontSize":"large"} -->
<div class="wp-block-group has-large-font-size"><!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":1.458333333,"fontStyle":"normal","fontWeight":"400","textTransform":"none"}},"fontSize":"large"} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"400","textTransform":"none"},"spacing":{"margin":{"top":"4px"}}},"textColor":"foreground","className":"nowrap","fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->