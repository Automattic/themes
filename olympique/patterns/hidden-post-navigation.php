<?php
/**
 * Title: Post navigation
 * Slug: olympique/hidden-post-navigation
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Posts', 'olympique' ); ?>","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)" aria-label="<?php esc_attr_e( 'Posts', 'olympique' ); ?>">
	<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_html_x( 'Previous: ', 'Label before the title of the previous post. There is a space after the colon.', 'olympique' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
	<!-- wp:post-navigation-link {"label":"<?php echo esc_html_x( 'Next: ', 'Label before the title of the next post. There is a space after the colon.', 'olympique' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
</nav>
<!-- /wp:group -->
