<?php
/**
 * Title: Default footer
 * Slug: nested/credit
 * inserter: no
 * hidden: true
 */
?>

<!-- wp:paragraph {"align":"right","style":{"typography":{"letterSpacing":"0px","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","lineHeight":"1","fontSize":"1.5rem"}}} -->
<p class="has-text-align-right" style="font-size:1.5rem;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1;text-transform:uppercase">
<?php
    /* Translators: WordPress link. */
    $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'nested' ) ) . '" rel="nofollow">WordPress</a>';
    echo sprintf(
        esc_html__( 'Designed with %1$s', 'nested' ),
        $wordpress_link
    );
?>
</p>
<!-- /wp:paragraph -->