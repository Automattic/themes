<?php
/**
 * Title: Designed with 
 * Slug: grammerone/designed-with
 * Categories: hidden
 * Inserter: no
 */
?>


<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-text-align-left has-foreground-color has-text-color has-link-color">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'grammerone' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Designed with %1$s', 'grammerone' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph -->