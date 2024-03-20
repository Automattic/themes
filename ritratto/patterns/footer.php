<?php
/**
 * Title: Default footer
 * Slug: ritratto/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:8rem;padding-bottom:8rem"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"2.1rem","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}}} -->
<p class="has-text-align-left" style="font-size:2.1rem;font-style:normal;font-weight:600;line-height:1.2"><?php echo esc_html__( 'Ernest Hemingway produced most of his work between the mid-1920s and the mid-1950s, and he was awarded the 1954 Nobel Prize in Literature.', 'ritratto' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"2.1rem","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}}} -->
<p class="has-text-align-left" style="font-size:2.1rem;font-style:normal;font-weight:600;line-height:1.2"><?php echo esc_html__( 'He published seven novels, six short-story collections, and two nonfiction works.', 'ritratto' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">
    <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'ritratto' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'Designed with %1$s', 'ritratto' ),
            $wordpress_link
        );
    ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->