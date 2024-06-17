<?php
/**
 * Title: 404
 * Slug: vows/hidden-404
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|70"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/groovepaper.png","source":"file","title":"groovepaper"},"backgroundSize":"300px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--70)">
		<!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"24px"},"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
		<div style="margin-bottom:var(--wp--preset--spacing--70);height:0px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
		<main class="wp-block-group">
			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading"><?php echo __('Oops... That page can’t be found.', 'vows');?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo __('It looks like nothing was found at this location. Maybe try a search?', 'vows');?></p>
			<!-- /wp:paragraph -->

			<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html_x( 'Search...', 'This is a placeholder text in a search field', 'vows' ); ?>","buttonText":"","buttonUseIcon":true} /-->
		</main>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"vows/footer"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:column -->
