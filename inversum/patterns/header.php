<?php
/**
 * Title: header
 * Slug: inversum/header
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"75%","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;flex-basis:75%"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:25%"><!-- wp:paragraph -->
<p><?php esc_html_e('Wait, does the nav block sit on the footer for this theme? That\'s bold.', 'inversum');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-width:2px;padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":64,"shouldSyncIcon":false,"style":{"spacing":{"padding":{"top":"5px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;flex-basis:25%"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is the start of a 'strong' HTML element, 4. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Explore the style variations available. Go to %1$sStyles%2$s > %3$sBrowse styles%4$s.', 'inversum' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->