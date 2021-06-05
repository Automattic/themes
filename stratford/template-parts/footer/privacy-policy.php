<?php
if ( function_exists( 'the_privacy_policy_link' ) ) {
	?>
	<div class="privacy-policy-container">
	<?php the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' ); ?>
	</div>
	<?php
}
?>
