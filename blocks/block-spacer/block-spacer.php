<?php
$rand = wp_rand();
$l_space = get_field( 'large_screen_space' );
$s_space = get_field( 'small_screen_space' );
?>

<div class="block block-spacer" id="block-spacer-<?php echo $rand; ?>">
	<style>
		@media only screen and (min-width: 992px) {
			#block-spacer-<?php echo $rand; ?> {
				height: <?php echo $l_space ? $l_space . 'px' : 0; ?>;
			}
		}
		@media only screen and (max-width: 992px) {
			#block-spacer-<?php echo $rand; ?> {
				height: <?php echo $s_space ? $s_space . 'px' : 0; ?>;
			}
		}
	</style>
</div>
