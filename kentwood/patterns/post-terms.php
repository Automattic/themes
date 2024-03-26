<?php
/**
 * Title: Post Terms
 * Slug: kentwood/post-terms
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
	<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'Posted in: ', 'This is a prefix for the category', 'kentwood' ); ?>"} /-->

	<!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_html_x( 'Posted in: ', 'This is a prefix for the tags', 'kentwood' ); ?>"} /-->
</div>
<!-- /wp:group -->
