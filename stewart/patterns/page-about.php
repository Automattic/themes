<?php
/**
 * Title: About page
 * Slug: stewart/page-about
 * Categories: pages
 */
?>

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontSize":"72px"}}} -->
<p style="font-size:72px;line-height:1">
<?php
	wp_kses_post( __( 'Jenn<br>Stewart', 'stewart' ) );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1em"}}}} -->
<div class="wp-block-group" style="padding-bottom:1em"><!-- wp:paragraph -->
<p>
<?php
	echo esc_html__( 'The artist: handsome, clever, and rich, with a comfortable home and happy disposition, seemed to unite some of the best blessings of existence; and had lived nearly twenty-one years in the world with very little to distress or vex her.', 'stewart' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/about.jpg'; ?>" alt="<?php echo esc_html__( 'A collage featuring the portrait of a woman.', 'stewart' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":2,"fontSize":"extra-large"} -->
<h2 class="has-extra-large-font-size">
<?php
	echo esc_html__( 'Experience', 'stewart' );
?>
</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:list -->
<ul><li>
<?php
	echo esc_html__( 'The mildness of her temper had hardly allowed her to impose any restraint.', 'stewart' );
?>
</li></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":2,"fontSize":"extra-large"} -->
<h2 class="has-extra-large-font-size">
<?php
	echo esc_html__( 'Awards', 'stewart' );
?>
</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:list -->
<ul>
<li>
<?php
	echo esc_html__( 'Seems to unite some of the best blessings of existence.', 'stewart' );
?>
</li>
<li>
<?php
	echo esc_html__( 'Nearly twenty-one years in the world with very little to distress or vex her.', 'stewart' );
?>
</li>
</ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
