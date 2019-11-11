<div class="block block-icon-and-text">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<ul class="icon-and-text">
					<?php while ( have_rows( 'icons_and_text' ) ) : the_row();
						$width = get_sub_field( 'width' ) ? ' style="width: ' . get_sub_field( 'width' ) . '%;"' : ''?> 
				                
						<li<?php echo $width;?>>
							<div class="cols">
								<div class="col-image">
									<?php QS::acf_image('icon');?>
								</div>
								<div class="col-title">
									<h3 class="entry-title">
										<?php the_sub_field( 'title' );?>
									</h3>
									<h4 class="entry-subtitle">
										<?php the_sub_field( 'subtitle' );?>
									</h4>
								</div>
							</div>
						</li>
				   
				    <?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>