<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: A 404 page
 * Slug: raw/404
 * Inserter: no
 */

?>

<!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"6rem"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-text-align-center"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-text-align-center" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:6rem"><?php echo esc_html__( 'This page could not be found.'); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"1rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p>
<?php echo esc_html__( 'Please try a new search.'); ?>
</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->