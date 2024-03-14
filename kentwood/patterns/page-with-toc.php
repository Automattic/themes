<?php
/**
 * Title: Page with Table of Contents
 * Slug: kentwood/page-with-toc
 * Categories: featured, text
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1056px"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"31%"} -->
		<div class="wp-block-column" style="flex-basis:31%">
			<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"backgroundColor":"primary","textColor":"base","className":"has-base-color has-primary-background-color has-text-color has-background has-link-color","layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:14px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"fontSize":"large"} -->
					<p class="has-large-font-size"><?php echo esc_html__( 'Contents', 'kentwood' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:table-of-contents {"onlyIncludeCurrentPage":true,"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":""} -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"59%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);flex-basis:59%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
