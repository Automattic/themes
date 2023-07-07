<?php
/**
 * Title: 404
 * Slug: pieria/404
 * Categories: featured, 404
 */
?>

<!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left" id="oops-that-page-can-t-be-found">
  <?php
    /* Translators: 404 message. */
    echo sprintf(
      esc_html__( 'Oops! That page can’t be found.', 'pieria' )
    );
  ?>
</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
  <?php
    /* Translators: suggest a search */
    echo sprintf(
      esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'pieria' )
    );
  ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"radius":"0px","width":"1px"}},"borderColor":"background","fontSize":"small"} /-->