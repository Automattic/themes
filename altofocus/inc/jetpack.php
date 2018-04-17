<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package AltoFocus
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function altofocus_jetpack_setup() {

	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'type'      => 'click',
		'container' => 'main',
		'render'    => 'altofocus_infinite_scroll_render',
		'wrapper'   => false,
		'footer'    => 'page',
	) );

	// Custom logo fallback
	add_theme_support( 'custom-logo', array(
		'height'      => 120,
		'width'       => 120,
		'flex-width'  => true,
		'header-text' => array(
			'site-title',
			'site-description'
		),
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu', 'svg' );

	// Featured content
	add_theme_support( 'featured-content', array(
		'filter'     => 'altofocus_get_featured_posts',
		'max_posts'  => 999,
		'post_types' => array( 'post' ),
	) );

	// Content Options
	add_theme_support( 'jetpack-content-options', array(
		'author-bio'      => false,
		'post-details'    => array(
			'stylesheet' => 'altofocus-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'      => true,
			'post'         => true,
			'post-default' => true,
			'page'         => false,
			'page-default' => false,
			'fallback'     => true,
		),
	) );
}
add_action( 'after_setup_theme', 'altofocus_jetpack_setup' );

/**
 * Getter function for Featured Content
 *
 * @return (string) The value of the filter defined in add_theme_support( 'featured-content' ).
 */
function altofocus_get_featured_posts() {

	return apply_filters( 'altofocus_get_featured_posts', array() );
}

/**
 * Helper function to check for Featured Content
 *
 * @param (integer)
 * @return (boolean) true/false
 */
function altofocus_has_featured_posts( $minimum = 1 ) {

	if ( is_paged() )
		return false;

	$minimum = absint( $minimum );
	$featured_posts = apply_filters( 'altofocus_get_featured_posts', array() );

	if ( ! is_array( $featured_posts ) )
		return false;

	if ( $minimum > count( $featured_posts ) )
		return false;

	return true;
}

/**
 * Get featured post IDs
 *
 * @return array()
 */
function altofocus_get_featured_post_ids() {

	// Get array of cached results if they exist.
	$featured_ids = get_transient( 'featured_content_ids' );

	if ( false === $featured_ids ) {

		$featured_options = get_option( 'featured-content', FALSE );
		$featured_tag_name = $featured_options[ 'tag-name' ];
		$term = get_term_by( 'name', $featured_tag_name, 'post_tag' );

		if ( $term ) {

			// Query for featured posts.
			$featured_ids = get_posts( array(
				'fields'           => 'ids',
				'numberposts'      => $max_posts,
				'post_type'        => array( 'post' ),
				'suppress_filters' => false,
				'tax_query'        => array(
					array(
						'field'    => 'term_id',
						'taxonomy' => 'post_tag',
						'terms'    => $term->term_id,
					),
				),
				)
			);
		}

		set_transient( 'featured_content_ids', $featured_ids );
	}

	// Ensure correct format before return.
	if ( ! is_array( $featured_ids ) ) {
		return;
	} else {
		return array_map( 'absint', $featured_ids );
	}

}

/**
 * Custom render function for Infinite Scroll.
 *
 * Stores newly loaded post IDs into a JS variable to pass to
 * Isotope when new posts are loaded and need to be appended
 * and repositioned
 *
 * Global JS variable: loadedPosts
 */
function altofocus_infinite_scroll_render() {

	$loaded_post_IDs = array();

	while ( have_posts() ) {

		the_post();

		get_template_part( 'components/post/content', get_post_format() );

		// Put new post IDs into an array for use in isotope 'load more' calls
		if ( ! in_array( get_the_ID(), $loaded_post_IDs ) ) {

			$loaded_post_IDs[] = get_the_ID();
		}
	} ?>
	<script>
		// Put returned posts' IDs in to an array
		var loadedPosts = <?php echo json_encode( $loaded_post_IDs ); ?>;
	</script>
<?php
}

/**
 * Jetpack Social Menu Fallback
 */
function altofocus_social_menu() {

	if ( ! function_exists( 'jetpack_social_menu' ) ) {

		return;

	} else {

		jetpack_social_menu();
	}
}


/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function altofocus_has_post_thumbnail( $post = null ) {

	if ( ! function_exists( 'jetpack_has_featured_image' ) ) {

		return has_post_thumbnail( $post );

	} else {

		return jetpack_has_featured_image( $post );
	}
}
