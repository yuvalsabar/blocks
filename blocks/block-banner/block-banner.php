<?php 
$bg   = get_field( 'bg' ); 
$link = get_field( 'link' );
?>

<div class="block block-banner">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="block-in" style="background-image:url(<?php echo $bg['sizes']['large']; ?>)">
					<h3 class="entry-title">
						<?php the_field( 'title' ); ?>
					</h3>

					<?php
					$link = get_field( 'link' );
					
					if ( $link ) {
						$target = $link['target'] ? ' target="_blank"' : '';
						echo '<a href="' . $link['url'] . '"' . $target . ' class="btn">' . $link['title'] . '</a>';
					}
					?>
					
				</div>
				
			</div>
		</div>
	</div>
</div>
