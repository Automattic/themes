<?php
/**
 * Title: header
 * Slug: vows/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/header-background.jpg","dimRatio":10,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo __('', 'vows');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/header-background.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100vh"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom","justifyContent":"stretch"}} -->
<div class="wp-block-group has-base-color has-text-color has-link-color" style="min-height:100vh;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|60","bottom":"5vh","left":"var:preset|spacing|60","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:5vh;padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.22rem","bottom":"0.22rem"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0.22rem;padding-bottom:0.22rem"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","lineHeight":"1.4"}},"textColor":"primary","fontSize":"small","fontFamily":"figtree"} -->
<h1 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color has-figtree-font-family has-small-font-size" style="line-height:1.4;text-transform:uppercase"><?php echo __('Save<br>the<br>Date', 'vows');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"border":{"right":{"color":"var:preset|color|primary","width":"5px"},"top":[],"bottom":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-right-color:var(--wp--preset--color--primary);border-right-width:5px"><!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><?php echo __('September 15, 2024 — 4:00 PM<br>Whispering Pines Resort, Lake Tahoe, CA<br>Reception to follow ceremony', 'vows');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->