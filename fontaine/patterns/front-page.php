<?php
/**
 * Title: Front Page
 * Slug: fontaine/front-page
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"position":{"type":"sticky","top":"0px"}},"className":"blending-mode","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull blending-mode">
	<!-- wp:template-part {"slug":"header","tagName":"header"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
	<!-- wp:group {"metadata":{"name":"Intro","categories":["text"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}},"dimensions":{"minHeight":""},"position":{"type":""}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading"><?php echo esc_html__( 'Serena Fontaine is a multidisciplinary Art and Creative Director devoted to developing and executing brand experiences for our constantly changing world.', 'fontaine' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Psychedelic-Portrait.jpg" alt="" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"position":{"type":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
</div>
<!-- /wp:group -->
