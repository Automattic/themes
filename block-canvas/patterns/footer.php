<?php
/**
 * Title: Default footer
 * Slug: block-canvas/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
	<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
            <?php
                /* Translators: WordPress link. */
                $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'block-canvas' ) ) . '" rel="nofollow">WordPress</a>';
                echo sprintf(
                    esc_html__( 'Proudly Powered by %1$s', 'block-canvas' ),
                    $wordpress_link
                );
            ?>
        </p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->