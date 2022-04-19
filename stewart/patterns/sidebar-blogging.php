<?php
/**
 * Title: Blogging sidebar
 * Slug: stewart/sidebar-blogging
 * Categories: sidebar
 */
?>

<!-- wp:group {"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"fontSize":"small"} -->
<h2 class="has-small-font-size">
<?php
	echo esc_html__( 'Start here', 'stewart' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"fontSize":"small"} -->
<h2 class="has-small-font-size">
<?php
	echo esc_html__( 'Archives', 'stewart' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:archives /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"fontSize":"small"} -->
<h2 class="has-small-font-size">
<?php
	echo esc_html__( 'Latest Comments', 'stewart' );
?>
</h2>
<!-- /wp:heading -->

<!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
