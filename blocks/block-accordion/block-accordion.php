<div class="block block-accordion">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="accordion-wrap">
					<ul class="accordion">

						<?php while ( have_rows( 'accordion' ) ) : the_row();?>

							 <li class="item">
							 	<div class="btn-wrap">
							 		<button class="btn">
										<span class="entry-text"><?php the_sub_field( 'title' );?></span>
										<span class="fa fa-angle-down" aria-hidden="true"></span>
									</button>
							 	</div>
								<div class="entry-content">
									<?php the_sub_field( 'content' );?>
								</div>
							</li>

						<?php endwhile; ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>