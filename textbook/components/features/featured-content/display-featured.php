<?php
/**
 * The template for displaying featured content
 *
 * @package TextBook
 */

// Get featured content data
$featured_content = textbook_get_featured_content();

// Get featured content settings and options
$featured_options          = get_option( 'featured-content' );
$featured_page_id          = absint( get_theme_mod( 'featured_page' ) );
$featured_page_title       = get_theme_mod( 'featured_page_title' );
$featured_page_description = get_theme_mod( 'featured_page_description' );

// Set featured title from tag name of theme options
if ( empty( $featured_page_title ) && ! empty( $featured_options[ 'tag-name' ] ) ) {
	$featured_page_title = $featured_options[ 'tag-name' ];
} else {
	$featured_page_title = $featured_page_title;
}

// Set featured description from tag description of theme options
if ( empty( $featured_page_description ) && ! empty( $featured_options[ 'tag-description' ] ) ) {
	$featured_page_description = $featured_options[ 'tag-description' ];
} else {
	$featured_page_description = $featured_page_description;
} ?>

<?php /* if we have featured content OR a featured page */ ?>
<?php if ( ! empty( $featured_content ) || ! empty( $featured_page_id ) ) { ?>
<div id="featured-content" class="featured-content">

	<div class="featured-content-header-wrap">

		<header class="featured-content-header">
			<h1 class="featured-content-title"><?php echo esc_html( $featured_page_title ); ?></h1>
			<?php if ( $featured_page_description ) { ?>
			<div class="featured-content-description">
				<?php echo apply_filters( 'the_content', $featured_page_description ); ?>
			</div>
			<?php } ?>
		</header>

		<?php // Add template for Featured Highlight
			get_template_part( 'components/features/featured-content/content', 'page-highlight' ); ?>
	</div>

	<?php /* if has featured content */ ?>
	<?php if ( ! empty( $featured_content ) ) { ?>
	<div class="featured-content-inner">
		<?php // Ignore the Highlighted (first) featured content
			$ignore_highlight_content = true;

			$i = 1;
			foreach ( $featured_content as $post ) {
				setup_postdata( $post );

				if ( $i <= 3 ) {

					$f_count = is_countable( $featured_content ) ? count( $featured_content ) : 0;
					if ( 1 !== $f_count ) {
						// Include the standard featured content template.
						get_template_part( 'components/features/featured-content/content', 'featured' );
					} else {
						// Include the full width featured image template.
						get_template_part( 'components/features/featured-content/content', 'featured-full' );
					}

					$i++;

				} else {
					// Skip other featured content
					continue;
				}
			}
			wp_reset_postdata(); ?>
	</div>
	<?php } ?>
</div>
<?php } ?>
