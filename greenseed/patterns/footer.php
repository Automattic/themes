<?php
/**
 * Title: Default footer
 * Slug: greenseed/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><?php echo wp_kses_post( __( 'Inveresk Village Rd 15<br>Musselburgh, Scotland<br><a href="#">@greenseedmkt</a>', 'greenseed' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
<p class="has-text-align-right has-small-font-size"><?php echo wp_kses_post( __( 'Mon — Fri: 8 AM — 4 PM<br>Sat — Sun: 8 AM — 1 PM', 'greenseed' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
