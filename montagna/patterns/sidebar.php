<?php
/**
 * Title: Sidebar
 * Slug: montagna/sidebar
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html_x( 'Search', 'montagna' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"style":"none","width":"0px"},"left":{"style":"none","width":"0px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html_x( 'Latest Stories', 'montagna' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"160px","align":"wide","style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"color":"#f5f2eb00","width":"0px","style":"none"},"bottom":{"radius":"0px","width":"0px","style":"none"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-date {"displayType":"modified","style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"0.05em","fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"}}} -->
<p style="font-size:0.8rem;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html_x( 'Quote of the day', 'montagna' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><em>“<?php echo esc_html_x( 'The world is a book and those who do not travel read only one page.', 'montagna' ); ?>”</em></p>
<!-- /wp:paragraph --><cite>- St. Augustine</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"170px"} -->
<div style="height:170px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->