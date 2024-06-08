<?php
/**
 * Title: 404
 * Slug: lowfi/hidden-404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/texture.png","source":"file","title":"texture"},"backgroundSize":"auto"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh">
	<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

	<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
	<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading"><?php echo esc_html__( 'Page Not Found', 'lowfi' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'lowfi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:pattern {"slug":"lowfi/hidden-search-field"} /-->
	</main>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px">
		<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
