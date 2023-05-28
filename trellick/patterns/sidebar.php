<?php
/**
 * Title: Sidebar
 * Slug: trellick/sidebar
 * Categories: featured
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Categories', 'trellic' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:categories /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Archive', 'trellic' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:archives /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'Instagram', 'trellic' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'Tumblr', 'trellic' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
