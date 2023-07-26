<?php
/**
 * Title: Header rating banner
 * Slug: screenplay/header-rating-banner
 * Inserter: no
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1,"fontSize":"12px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"golos-text"} -->
<p class="has-text-align-left has-golos-text-font-family" style="font-size:12px;font-style:normal;font-weight:500;line-height:1"><?php echo esc_html__( 'Active Crowdfunding — Join now!', 'screenplay' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"className":"is-style-filled"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:left"><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group -->