<?php
/**
 * Title: A 404 page
 * Slug: kiosko/404
 * Categories: text
 */

declare( strict_types = 1 );
?>

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":1.1}},"textColor":"contrast","className":"wp-block-heading","fontSize":"large","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" id="oops-that-page-can-t-be-found" style="line-height:1.1"><?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'kiosko' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast","className":"has-contrast-color has-text-color"} -->
<p class="has-contrast-color has-text-color has-contrast-color"><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'kiosko' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html_x( 'Search...', 'This is a placeholder text in a search field', 'kiosko' ); ?>","buttonText":"Search"} /-->
