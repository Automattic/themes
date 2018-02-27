<?php
/**
 * Ixion customizes the search form to add a div for easier CSS manipulation.
 *
 * @package Ixion
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'ixion' ) ?></span>
		<input type="search" class="search-field"
		placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'ixion' ) ?>"
		value="<?php echo get_search_query() ?>" name="s"
		title="<?php echo esc_attr_x( 'Search for:', 'label', 'ixion' ) ?>" />
		<span class="search-form-icon"></span>
	</label>
	<input type="submit" class="search-submit"
		value="<?php echo esc_attr_x( 'Search', 'submit button', 'ixion' ) ?>" />
</form>
