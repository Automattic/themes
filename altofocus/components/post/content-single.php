<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AltoFocus
 */
?>

<?php

	/**
	 * Display A Gallery
	 *
	 * - Only display gallery when content has [gallery] shortcode and type = 'slideshow'
	 * - Allow single post, featured image Content Options to force shortcode default behavior
	 *
	 * src: http://wordpress.stackexchange.com/questions/121489/split-content-and-gallery/121508
	 * src: http://stackoverflow.com/questions/17224100/wordpress-remove-shortcode-and-save-for-use-elsewhere
	 */

	// Reset content width for featured image/gallery
	$content_width = 1200;

	// Look for shortcodes in content
	$content = get_the_content();
	$pattern = get_shortcode_regex();
	$get_image_post = get_option( 'jetpack_content_featured_images_post' );
	$content_option_override = ( empty ( $get_image_post ) ) ? '0' : '1';
	preg_match( '/' . $pattern . '/s', $content, $matches );

	// Account for Content Option settings
	if ( ! function_exists( 'jetpack_featured_images_remove_post_thumbnail' ) || ! empty ( $get_image_post ) ) {
		$content_option_override = '1';
	} else {
		$content_option_override = '0';
	}

	// If content has a gallery with the slideshow type, display that instead of the featured image.
	if ( has_shortcode( $content, 'gallery' ) && ( strpos( $matches[0], 'slideshow' ) !== false ) && $content_option_override == '1' ) :

		if ( $matches ) {

			if ( is_array( $matches ) && $matches[2] == 'gallery' ) {

				// Remove gallery markup from content (effects .entry-content below)
				$content = altofocus_strip_override_shortcode( $content );

				// Filter default gallery with custom full-width flexslider gallery. See: extras.php
				add_filter( 'post_gallery', 'altofocus_slideshow_gallery_filter', 10, 2);
				$shortcode = $matches[0];
				$output = do_shortcode( $shortcode );
			}
		}

		// Output flexslider_gallery as a slideshow
		echo "\t\t\t<div class=\"entry-media\">
			\t<div class=\"entry-media-wrap\">
			\t\t" . $output . "
			\t</div>
			</div>";

	/**
	 * OR display regular featured image
	 */

	elseif ( '' != altofocus_has_post_thumbnail() ) : ?>
	<figure class="entry-media">
		<div class="entry-media-wrap">
			<?php the_post_thumbnail( 'altofocus-post-featured-image' ); ?>
		</div>
	</figure>
<?php endif; ?>

<?php get_template_part( 'components/navigation/navigation', 'fixed' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( number_format_i18n( get_comments_number() ), number_format_i18n( get_comments_number() ), number_format_i18n( get_comments_number() ) ); ?>
				<svg class="comment-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
					<path class="path" d="M49.5,25c0-13.5-11-24.5-24.5-24.5S0.5,11.5,0.5,25s11,24.5,24.5,24.5h24.5l-7.2-7.2 C46.8,37.9,49.5,31.8,49.5,25z"/>
				</svg>
			</div>
		<?php endif; ?>
		<?php get_template_part( 'components/post/content', 'meta' ); ?>
	</header>
	<div class="entry-content">
		<?php // Display the content after reseting the content width to global
			$content_width = $GLOBALS['content_width'];
			$content = apply_filters( 'the_content', $content );

			echo $content;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'altofocus' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php get_template_part( 'components/post/content', 'footer' ); ?>
</article><!-- #post-## -->
