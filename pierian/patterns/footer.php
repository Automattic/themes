<?php
/**
 * Title: Default footer
 * Slug: pierian/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--60)","bottom":"var(--wp--preset--spacing--60)"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
            <?php
                /* Translators: WordPress link. */
                $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'pierian' ) ) . '" rel="nofollow">WordPress</a>';
                echo sprintf(
                    esc_html__( 'Designed with %1$s', 'pierian' ),
                    $wordpress_link
                );
            ?>
        </p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->