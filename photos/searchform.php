<?php
/**
 * Template for displaying search forms in Photos
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; // WPCS: XSS OK. ?>">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'photos' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; // WPCS: XSS OK. ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'photos' ); ?>" value="<?php esc_attr_e( get_search_query() ); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo photos_get_svg( array( 'icon' => 'search' ) ); // WPCS: XSS OK. ?><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'photos' ); ?></span></button>
</form>
