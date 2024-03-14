<?php
/**
 * Title: Recent Posts
 * Slug: kentwood/recent-posts
 * Categories: featured, posts
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"align":"wide","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading alignwide has-xx-large-font-size"><?php echo esc_html__( 'Recent Highlights', 'kentwood' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0">
		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'See More&rarr;', 'kentwood' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
		<!-- wp:group {"layout":{"inherit":false}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

			<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"x-small"} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"medium"} /-->

			<!-- wp:post-excerpt {"moreText":"Read More","showMoreOnNewLine":false,"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
