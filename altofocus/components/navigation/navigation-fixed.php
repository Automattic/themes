<?php
	$navigation = '';

	$previous = get_previous_post_link(
		'<div class="nav-previous">%link</div>',
		'<span class="screen-reader-text">%title</span> <span class="meta-nav" aria-hidden="true"><svg class="arrow-icon left-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><circle class="circle" cx="20" cy="20" r="19.5"/><polyline class="arrow" points="22.8 12 14.8 20 22.8 28 "/></svg></span>',
		false,
		'',
		'category'
	);

	$next = get_next_post_link(
		'<div class="nav-next">%link</div>',
		'<span class="screen-reader-text">%title</span> <span class="meta-nav" aria-hidden="true"><svg class="arrow-icon right-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><circle class="circle" cx="20" cy="20" r="19.5"/><polyline class="arrow" points="17.2,28 25.2,20 17.2,12 "/></svg></span>',
		false,
		'',
		'category'
	);

    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {

        $navigation = '<nav class="navigation post-navigation-fixed" role="navigation"><div class="nav-links">' . $previous . $next . '</div></nav>';
    }

    echo $navigation;

?>