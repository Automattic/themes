<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Sketch
 */

if ( ! function_exists( 'sketch_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
function sketch_paging_nav( $max_num_pages = '' ) {
	// Get max_num_pages if not provided
	if ( '' == $max_num_pages )
		$max_num_pages = $GLOBALS['wp_query']->max_num_pages;

	// Don't print empty markup if there's only one page.
	if ( $max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation clear" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'sketch' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link( '', $max_num_pages ) ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">Previous</span>', 'sketch' ), $max_num_pages ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link( '', $max_num_pages ) ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( '<span class="meta-nav">Next</span>', 'sketch' ), $max_num_pages ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'sketch_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function sketch_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'sketch' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav"><</span> %title', 'Previous post link', 'sketch' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title <span class="meta-nav">></span>', 'Next post link',     'sketch' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'sketch_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function sketch_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	printf( __( '<span class="posted-on">%1$s</span><span class="byline"><span class="sep"> | </span>%2$s</span>', 'sketch' ),
		sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		)
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function sketch_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'sketch_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'sketch_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so sketch_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so sketch_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in sketch_categorized_blog.
 */
function sketch_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'sketch_categories' );
}
add_action( 'edit_category', 'sketch_category_transient_flusher' );
add_action( 'save_post',     'sketch_category_transient_flusher' );


/**
 * Returns the URL from the post.
 *
 * @uses get_the_link() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @return string URL
 */
function sketch_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

if ( ! function_exists( 'sketch_portfolio_pagination' ) ) :

function sketch_portfolio_pagination() {
	global $post;
	$pagination_posts = array();

	$pagination_posts['previous'] = get_adjacent_post( false, '', true );
	$pagination_posts['current']  = get_post();
	$pagination_posts['next']     = get_adjacent_post( false, '', false );

	if ( ! $pagination_posts['previous'] && ! $pagination_posts['next'] )
		return false;
?>
	<nav class="navigation project-navigation" role="navigation">
		<h1 class="more-projects"><?php _e( 'More Projects', 'sketch' ); ?></h1>
		<div class="project-navigation-wrapper">
			<ul>
			<?php
				foreach ( $pagination_posts as $pagination_post => $post ) :
					if ( is_object( $post ) && ( $post instanceof WP_Post ) && 'jetpack-portfolio' == $post->post_type ) :
						setup_postdata( $post );
			?>
						<li class="<?php echo esc_attr( $pagination_post ); ?>">
							<?php get_template_part( 'content', 'portfolio' ); ?>
						</li>
			<?php
						wp_reset_postdata();
					else :
			?>
						<li class="<?php echo esc_attr( $pagination_post ); ?>">
							<div class="no-result jetpack-portfolio">
								<div class="post-thumbnail-wrapper"></div>
							</div>
						</li>
			<?php
					endif;
				endforeach;
			?>
			</ul>
		</div>
	</nav>
<?php
}
endif;

/*
 * Return the post format, linked to the post format archive
 */
function sketch_post_format() {
	$format = get_post_format();
	$formats = get_theme_support( 'post-formats' );

	//If the post has no format, or if it's not a format supported by the theme, return
	if ( ! $format || ! has_post_format( $formats[0] ) )
		return;

	printf( '<a class="entry-format" href="%1$s" title="%2$s">%3$s</a><span class="sep"> | </span>',
				esc_url( get_post_format_link( $format ) ),
				esc_attr( sprintf( __( 'All %s posts', 'sketch' ), get_post_format_string( $format ) ) ),
				get_post_format_string( $format )
			);
}
