<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package AltoFocus
 */

/*
 * Gallery Slider Shortcode
 */
function altofocus_gallery_shortcode( $attr ) {

	$post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {

		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) )
			$attr['orderby'] = 'post__in';

		$attr['include'] = $attr['ids'];
	}

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters( 'slider_gallery', '', $attr );
	if ( $output != '' )
		return $output;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {

		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );

		if ( ! $attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract( shortcode_atts( array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'itemtag'    => 'li',
		'icontag'    => null,
		'captiontag' => 'p',
		'columns'    => 3,
		'size'       => 'large',
		'include'    => '',
		'exclude'    => ''
	), $attr, 'gallery' ) );

	$id = intval( $id );

	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( ! empty( $include ) ) {

		$_attachments = get_posts( array(
			'include'        => $include,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );

		$attachments = array();

		foreach ( $_attachments as $key => $val ) {

			$attachments[$val->ID] = $_attachments[$key];
		}

	} elseif ( ! empty( $exclude ) ) {

		$attachments = get_children( array(
			'post_parent'    => $id,
			'exclude'        => $exclude,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );

	} else {

		$attachments = get_children( array(
			'post_parent'    => $id,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );
	}

	if ( empty( $attachments ) )
		return '';

	if ( is_feed() ) {

		$output = "\n";

		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link( $att_id, $size, true ) . "\n";

		return $output;
	}

	$itemtag = tag_escape( $itemtag );
	$captiontag = tag_escape( $captiontag );
	$icontag = tag_escape( $icontag );
	$valid_tags = wp_kses_allowed_html( 'post' );

	if ( ! isset( $valid_tags[ $itemtag ] ) )
		$itemtag = 'dl';
	if ( ! isset( $valid_tags[ $captiontag ] ) )
		$captiontag = 'dd';
	if ( ! isset( $valid_tags[ $icontag ] ) )
		$icontag = 'dt';

	$columns = intval( $columns );
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$size_class = sanitize_html_class( $size );
    $gallery_div = "<section id=\"gallery-{$id}\" class=\"entry-gallery\"><div id=\"$selector\" class=\"flexslider slider slider-size-{$size_class}\"><ul class=\"slides\">";
    $output = $gallery_div;

	$i = 0;

	$attachment_id = ( empty( $attachment_id ) ) ? get_post_thumbnail_id() : (int) $attachment_id;

	foreach ( $attachments as $id => $attachment ) {

		// Get image, meta & caption
		$image_link = wp_get_attachment_image( $id, $size );
		$image_meta  = wp_get_attachment_metadata( $id );
		$image_caption = $attachment->post_excerpt;

		// Set orientation
		$orientation = '';
		if ( isset( $image_meta['height'], $image_meta['width'] ) )
			$orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';

		// Image markup
		$output .= "<{$itemtag} class=\"slide {$orientation}\">";
		$output .= $image_link;

		// Add caption if it exists
		if ( ! empty( $image_caption ) )
			$output .= '<span class="image-caption">' . $image_caption . '</span>';

		$output .= "</{$itemtag}>";
	}

    $output .= "</ul></div></section>\n";

	return $output;

}
add_shortcode( 'flexslider_gallery', 'altofocus_gallery_shortcode' );

if ( ! function_exists( 'altofocus_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function altofocus_posted_on() {

	// Set date & time
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

	// Set author/byline info
	$byline = sprintf(
		esc_html_x( 'Written by %s', 'post author', 'altofocus' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	// Date markup
	echo '<div class="posted-on">' . $posted_on . '</div>'; // WPCS: XSS OK.

	// Author markup
	echo '<div class="byline"> ' . $byline . '</div>'; // WPCS: XSS OK.

	// Show edit link
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'altofocus' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

if ( ! function_exists( 'altofocus_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function altofocus_entry_footer() {

	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {

		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_term_list( get_the_ID(), 'category', '<ul><li>', '</li><li>', '</li></ul>' );
		if ( $categories_list && altofocus_categorized_blog() ) {

			printf( '<div class="cat-links">' . esc_html__( 'Categories %1$s', 'altofocus' ) . '</div>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_term_list( get_the_ID(), 'post_tag', '<ul><li>', '</li><li>', '</li></ul>' );
		if ( $tags_list ) {

			printf( '<div class="tags-links">' . esc_html__( 'Tags %1$s', 'altofocus' ) . '</div>', $tags_list ); // WPCS: XSS OK.
		}
	}
}
endif;

/**
 * Strips slideshow gallery shortcodes form the content
 */
function altofocus_strip_override_shortcode( $content ) {

	preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

	if ( ! empty( $matches ) ) {

		foreach ( $matches as $shortcode ) {

			if ( 'gallery' === $shortcode[2] ) {

				$pos = strpos( $content, $shortcode[0] );

				if ( false !== $pos ) {

					return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
				}
			}
		}
	}

	return $content;
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function altofocus_categorized_blog() {

	if ( false === ( $all_the_cool_cats = get_transient( 'altofocus_categories' ) ) ) {

		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'altofocus_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {

		// This blog has more than 1 category so altofocus_categorized_blog should return true.
		return true;

	} else {

		// This blog has only 1 category so altofocus_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in altofocus_categorized_blog.
 */
function altofocus_category_transient_flusher() {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Like, beat it. Dig?
	delete_transient( 'altofocus_categories' );
}
add_action( 'edit_category', 'altofocus_category_transient_flusher' );
add_action( 'save_post',     'altofocus_category_transient_flusher' );
