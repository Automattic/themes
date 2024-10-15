<?php
/**
 * Title: sidebar
 * Slug: aigoo/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"20px","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer wp-embed-aspect-16-9 wp-has-aspect-ratio"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|contrast","width":"2px","style":"dotted"},"bottom":{"color":"var:preset|color|contrast","width":"2px","style":"dotted"},"right":[],"left":[]}},"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-embed-aspect-16-9 wp-has-aspect-ratio" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:dotted;border-top-width:2px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em"}},"fontFamily":"metropolis"} -->
<p class="has-text-align-center has-metropolis-font-family" style="font-size:13px;font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('Watch', 'aigoo');?></p>
<!-- /wp:paragraph -->

<!-- wp:video {"id":89} -->
<figure class="wp-block-video"><video controls src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/videos/kpop_video.mp4"></video><figcaption class="wp-element-caption"><?php esc_html_e('CARNATION - Twin Flame (M/V)', 'aigoo');?></figcaption></figure>
<!-- /wp:video --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|contrast","width":"2px","style":"dotted"},"right":[],"left":[]}},"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio","layout":{"type":"constrained"}} -->
<div class="wp-block-group wp-embed-aspect-16-9 wp-has-aspect-ratio" style="border-top-style:none;border-top-width:0px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em"}},"fontFamily":"metropolis"} -->
<p class="has-text-align-center has-metropolis-font-family" style="font-size:13px;font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('Most Popular', 'aigoo');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":34,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"style":{"border":{"bottom":{"width":"0px","style":"none"},"top":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"0","top":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top is-not-stacked-on-mobile" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-bottom:0;flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
