<?php
/**
 * Singular template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quadrat
 * @since 1.0.0
 */
get_header();

	// the header
	get_template_part( 'template-parts/header' );

	echo do_blocks( '<!-- wp:group {"layout":{"inherit":true},"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} --><div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:post-title /--><!-- wp:post-content /--><!-- wp:columns {"align":"wide","className":"next-prev-links"} --><div class="wp-block-columns alignwide next-prev-links"><!-- wp:column --><div class="wp-block-column"><!-- wp:post-navigation-link {"type":"previous","label":"←","showTitle":true} /--></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:post-navigation-link {"textAlign":"right","label":"→","showTitle":true} /--></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:heading {"textAlign":"center","level":5} --><h5 class="has-text-align-center">Latest Posts</h5><!-- /wp:heading --><!-- wp:latest-posts {"postsToShow":2,"displayPostContent":true,"postLayout":"grid","columns":2,"align":"wide"} /--></div><!-- /wp:group -->' );

	// the footer
	echo do_blocks( file_get_contents( get_stylesheet_directory() . '/block-template-parts/footer.html' ) );

get_footer();
