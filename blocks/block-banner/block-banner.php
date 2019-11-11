<?php $bg = get_field( 'bg' );?>

<div class="block block-banner">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="block-in" style="background-image:url(<?php echo $bg['sizes']['block-banner'];?>)">
					<div class="overlay"></div>

					<div class="content">
						<h3 class="entry-title">
							<?php the_field( 'title' );?>
						</h3>
						<?php QS::acf_link('link', 'btn btn-white-border', 'fa fa-angle-left');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>